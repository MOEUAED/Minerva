<?php
require_once __DIR__ . '/../models/Student.php';

class TeacherService
{
    private $student;
    public function __construct()
    {
        $this->student = new StudentModel();
    }

    public function createStudent($fullname, $email)
    {
        if (empty($fullname) || empty($email)) {
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
        $result = $this->student->create($fullname, $email, $randpassword);
        if ($result) {
            $envouye = $this->sendEmail($email, $password);
            return [
                'status' => 'success',
                'message' => " Étudiant créé avec succès.",
                'email' => $email,
                'password' => $password,
                'envoye' => $envouye
            ];
        } else {

            return [
                'status' => 'error',
                'message' => "Erreur lors de la création de l'étudiant."
            ];

        }


    }
    public function sendEmail($email, $password)
    {
        $to = $email;
        $subject = "Vos informations de connexion";
        $message = "Bonjour,\n\nVoici vos informations de connexion:\nEmail: $email\nMot de passe: $password\n\nVeuillez changer votre mot de passe après votre première connexion.\n\nCordialement,\nL'équipe.";
        $headers = "From:nafiai.medamine1@gmail.com";
        $envoyer = mail($to, $subject, $message, $headers);
        if ($envoyer) {
            return 'email envouyer';
        } else {
            return 'échec d envoi de l email';
        }
    }
}
