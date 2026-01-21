<?php

require_once __DIR__ . '/../../app/services/AuthService.php';
class AuthController
{
    private $service;
    public function __construct()
    {
        $this->service = new AuthService();
    }
    public function login()
    {
        $result = null;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email_input = $_POST['email'];
            $password_input = $_POST['password'];
            $result = $this->service->login($email_input, $password_input);

            if ($result === true) {
                if ($_SESSION['userRole'] === 'teacher') {
                    // header('Location: /teachear/dashbord');
                    require_once __DIR__ . '/../../views/teacher/dashboard.php';
                } else {
                    // header('Location: /student/dashbord');
                    require_once __DIR__ . '/../../views/student/dashboard.php';
                }
            } else {
                $error = $result;
                require_once __DIR__ . '/../../views/auth/login.php';
            }

        } else {
            require_once __DIR__ . '/../../views/auth/login.php';
        }
    }
    public function logout()
    {

        $this->service->logout();

    }
}