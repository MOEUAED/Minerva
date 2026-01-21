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
        $password = bin2hex(random_bytes(8));
        $randpassword = password_hash($password, PASSWORD_BCRYPT);
        $result = $this->student->create($fullname, $email, $randpassword);
        if($result){
            return "Étudiant créé avec succès";
        }else{
            return "Erreur lors de la création de l'étudiant";
        }
        // if ($result) {
        //     $subject = "Bienvenue sur Minerva - Vos identifiants";
        //     $message = "Bonjour $fullname,\n\n";
        //     $message .= "Votre compte Minerva a été créé avec succès.\n\n";
        //     $message .= "Vos identifiants de connexion :\n";
        //     $message .= "Email : $email\n";
        //     $message .= "Mot de passe : $password\n\n"; // Mot de passe en clair
        //     $message .= "Connectez-vous sur : http://localhost/Minerva/public/login\n\n";
        //     $message .= "Cordialement,\nL'équipe Minerva";

        //     $headers = "From: admin@minerva.com\r\n";
        //     $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        // }
        
        $to = $email;
        $subject = "Test Minerva";
        $message = "Test d'envoi d'email";
        $headers = "From: nafiai.medamine1@gmail.com";

        if (mail($to, $subject, $message, $headers)) {
            return "✅ Email envoyé avec succès";
        } else {
            return "❌ Échec de l'envoi (comme prévu)";
        }
        die;

    }
}
