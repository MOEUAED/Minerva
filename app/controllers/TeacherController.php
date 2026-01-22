<?php
include_once __DIR__ . '/../services/TeacherService.php';
class TeacherController
{
    private $createStudent;

    public function __construct()
    {
        $this->createStudent = new TeacherService();
    }
    public function dashboard()
    {
        if (!isset($_SESSION['userId']) || $_SESSION['userRole'] !== 'teacher') {
            header('Location: /login');
            exit();
        }
        require_once __DIR__ . '/../../views/teacher/dashboard.php';
    }
    public function storeStudent()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $classId = $_POST['class_id'];
            if (empty($fullname) || empty($email) || empty($classId)) {
                $erreur = "Veuillez remplir tous les champs.";
                require_once __DIR__ . '/../../views/teacher/dashboard.php';
                return;
            }
            $result = $this->createStudent->createStudent($fullname, $email, $classId);
            if ($result['status'] === 'success') {
                $_SESSION['success_message'] = $result['message'];
                $_SESSION['envoye'] = $result['envoye'];
                header('Location: /teacher/dashboard');
                return;
            } else {
                $_SESSION['error_message'] = $result['message'];
                header('Location: /teacher/dashboard');
            }
        }
        require_once __DIR__ . '/../../views/teacher/dashboard.php';
    }
}


