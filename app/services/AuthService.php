<?php

require_once __DIR__ . '/../models/User.php';
class AuthService
{
    private $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }
    public function login($email, $password)
    {
        $user = $this->userModel->findByEmail($email);
        if ($user === false) {
            return "Cet email n'existe pas";
        }
        if (!password_verify($password, $user['password'])) {
            return "Mot de passe incorrect";
        }
        // 
        $_SESSION['userNom'] = $user['fullname'];
        $_SESSION['userEmail'] = $user['email'];
        $_SESSION['userId'] = $user['id'];
        $_SESSION['userRole'] = $user['role'];

        return true;
    }
    public function register($nom, $email, $password)
    {
        $user = $this->userModel->findByEmail($email);
        if ($user) {
            return "Un compte existe déjà avec cet email";
            return;
        }
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $result = $this->userModel->create($nom, $email, $hashedPassword);

        if ($result) {
            return true;
        } else {
            return "Erreur lors de l'inscription";
        }
    }

    public function logout()
    {

        session_unset();
        session_destroy();
        header('Location: /login');
        return;

    }


}