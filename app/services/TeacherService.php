<?php
require_once __DIR__ . '/../models/Student.php';
require_once __DIR__ . '/../../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
use Dotenv\Dotenv;

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
        $mail = new PHPMailer(true);
        try {
            $mail->SMTPAuth = true;
            $mail->isSMTP();
            $mail->Host = $_ENV['SMTP_HOST'];
            $mail->Username = $_ENV['SMTP_USER'];
            $mail->Password = $_ENV['SMTP_PASS'];
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
            $mail->setFrom($_ENV['SMTP_USER'], $_ENV['SMTP_NAME']);
            $mail->addAddress($email);
            $mail->isHTML(true);
            $mail->Subject = 'Vos identifiants Minerva';
            $mail->Body = "
                <h2>Bienvenue sur Minerva !</h2>
                <p>Voici vos identifiants de connexion :</p>
                <p><strong>Email :</strong> $email</p>
                <p><strong>Mot de passe :</strong> $password</p>
                <p>Connectez-vous sur : Minerva</p>
            ";

            $mail->send();
            return 'Email envoyé avec succès';
        } catch (Exception $e) {
            return "Erreur d envoi:" . $e->getMessage();
        }
    }
}


