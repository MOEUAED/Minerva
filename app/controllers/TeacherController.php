<?php
class TeacherController
{
    public function dashboard()
    {
        if (!isset($_SESSION['userId']) || $_SESSION['userRole'] !== 'teacher') {
            header('Location: /login');
            exit();
        }
        require_once __DIR__ . '/../../views/teacher/dashboard.php';
    }
}
