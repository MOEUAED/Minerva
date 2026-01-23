<?php
require_once __DIR__ . '/../models/Student.php';
// require_once __DIR__ . '/../../config/.env';
require_once __DIR__ . '/../../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
// use Dotenv\Dotenv;

class TeacherService
{
    private $student;
    public function __construct()
    {
        $this->student = new StudentModel();
    }

    public function createStudent($fullname, $email, $classId)
    {
        if (empty($fullname) || empty($email) || empty($classId)) {
            return [
                'status' => 'error',
                'message' => 'Tous les champs sont requis'
            ];
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return [
                'status' => 'error',
                'message' => 'Format d email invalide'
            ];
        }

        $existingStudent = $this->student->findByEmail($email);
        if ($existingStudent) {
            return [
                'status' => 'error',
                'message' => 'Un utilisateur avec cet email existe déjà'
            ];
        }

        $password = bin2hex(random_bytes(8));
        $randpassword = password_hash($password, PASSWORD_BCRYPT);

        $studentinfo = $this->student->create($fullname, $email, $randpassword);

        if ($studentinfo) {
            $assignResult = $this->student->assignToClass($studentinfo, $classId);

            if ($assignResult) {
                $emailSent = $this->sendEmail($email, $password);
                return [
                    'status' => 'success',
                    'message' => "Étudiant créé et assigné à la classe avec succès.",
                    'email' => $email,
                    'password' => $password,
                    'envoye' => $emailSent
                ];
            }
        }

        return [
            'status' => 'error',
            'message' => "Erreur lors de la création de l'étudiant."
        ];
    }

    public function sendEmail($email, $password)
    {
        $ENV = require_once __DIR__ . '/../../config/email.php';
        $mail = new PHPMailer(true);
        try {
            $mail->SMTPAuth = true;
            $mail->isSMTP();
            $mail->Host = $ENV['host'];
            $mail->Username = $ENV['username'];
            $mail->Password = $ENV['password'];
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
            $mail->setFrom($ENV['username'], $ENV['from_name']);
            $mail->addAddress($email);
            $mail->isHTML(true);
            $mail->Subject = 'Vos identifiants Minerva';
            $mail->isHTML(true);

            $mail->Body = "
<div style='font-family: Arial, Helvetica, sans-serif; background:#f4f6f9; padding:40px 0;'>

    <table width='100%' cellpadding='0' cellspacing='0'>
        <tr>
            <td align='center'>

                <table width='600' cellpadding='0' cellspacing='0' 
                       style='background:#ffffff; border-radius:12px; padding:40px; box-shadow:0 5px 20px rgba(0,0,0,0.08);'>

                    <tr>
                        <td align='center'>

                            <h1 style='color:#2563eb; margin-bottom:10px;'>
                                🎓 Minerva
                            </h1>

                            <h2 style='color:#222; margin-top:0;'>
                                Bienvenue sur la plateforme !
                            </h2>

                            <p style='color:#555; font-size:15px;'>
                                Votre compte a été créé avec succès.<br>
                                Voici vos informations de connexion :
                            </p>

                            <div style='background:#f1f5f9; padding:20px; border-radius:8px; margin:25px 0; text-align:left;'>

                                <p style='margin:8px 0;'>
                                    <strong>Email :</strong> $email
                                </p>

                                <p style='margin:8px 0;'>
                                    <strong>Mot de passe :</strong> $password
                                </p>

                            </div>

                            <a href='http://localhost/minerva/login'
                               style='display:inline-block;
                                      background:#2563eb;
                                      color:#ffffff;
                                      padding:12px 28px;
                                      border-radius:8px;
                                      text-decoration:none;
                                      font-weight:bold;
                                      margin-top:10px;'>
                                Se connecter
                            </a>

                            <p style='margin-top:30px; font-size:12px; color:#888;'>
                                Si vous n'avez pas créé ce compte, ignorez cet email.
                            </p>

                            <hr style='margin:25px 0; border:none; border-top:1px solid #eee;'>

                            <p style='font-size:12px; color:#aaa;'>
                                © 2026 Minerva • Classroom Management System
                            </p>

                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</div>
";

            $mail->send();
            return 'Email envoyé avec succès';
        } catch (Exception $e) {
            return "Erreur d envoi:" . $e->getMessage();
        }
    }
}


