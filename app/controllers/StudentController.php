<?php

class StudentController
{
    public function dashboard()
    {
        if (!isset($_SESSION['userId']) || $_SESSION['userRole'] !== 'student') {
            header('Location: /login');
            exit();
        }
        require_once __DIR__ . '/../../views/student/dashboard.php';
    }
}