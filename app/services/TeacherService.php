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
<div style='margin:0;padding:0;background:#f3f4f6;font-family:Arial,Helvetica,sans-serif;'>

  <table width='100%' cellpadding='0' cellspacing='0'>
    <tr>
      <td align='center' style='padding:40px 15px;'>

        <!-- Card -->
        <table width='600' cellpadding='0' cellspacing='0'
               style='max-width:600px;background:#ffffff;border-radius:14px;
                      box-shadow:0 10px 30px rgba(0,0,0,0.08);padding:40px;'>

          <!-- Header -->
          <tr>
            <td align='center' style='padding-bottom:25px;'>

              <h1 style='margin:0;color:#2563eb;font-size:28px;font-weight:bold;'>
                🎓 Minerva
              </h1>

              <p style='margin:6px 0 0 0;color:#6b7280;font-size:14px;'>
                Classroom Management Platform
              </p>

            </td>
          </tr>

          <!-- Title -->
          <tr>
            <td align='center'>
              <h2 style='margin:0 0 15px 0;color:#111827;font-size:22px;'>
                Bienvenue sur Minerva !
              </h2>
            </td>
          </tr>

          <!-- Text -->
          <tr>
            <td align='center' style='color:#4b5563;font-size:15px;line-height:22px;padding-bottom:25px;'>
              Votre compte a été créé avec succès.<br>
              Utilisez les informations ci-dessous pour accéder à votre espace.
            </td>
          </tr>

          <!-- Credentials Box -->
          <tr>
            <td>

              <table width='100%' style='background:#f9fafb;border-radius:10px;padding:18px;'>
                <tr>
                  <td style='color:#374151;font-size:14px;padding:6px 0;'>
                    <strong>Email :</strong> $email
                  </td>
                </tr>

                <tr>
                  <td style='color:#374151;font-size:14px;padding:6px 0;'>
                    <strong>Mot de passe :</strong> $password
                  </td>
                </tr>
              </table>

            </td>
          </tr>

          <!-- Button -->
          <tr>
            <td align='center' style='padding:30px 0 10px 0;'>

              <a href='https://maghreb.simplonline.co/login?redirect=%2Fclassrooms%2Ffae303b1-faa2-4fde-bec5-1f03d350564e%2Fbriefs%2Fea9c252f-2de6-4f60-b410-c8f8363d9c41'
                 style='background:#2563eb;
                        color:#ffffff;
                        text-decoration:none;
                        padding:14px 32px;
                        font-weight:bold;
                        border-radius:10px;
                        display:inline-block;
                        font-size:15px;'>

                Se connecter
              </a>

            </td>
          </tr>

          <!-- Footer -->
          <tr>
            <td align='center' style='padding-top:30px;font-size:12px;color:#9ca3af;'>
              © 2026 Minerva • Education Management System
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


