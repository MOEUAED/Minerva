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
            $fullName = $_POST['fullname'];
            $email = $_POST['email'];
            $result = $this->createStudent->createStudent($fullName, $email);


        }

    }
}
