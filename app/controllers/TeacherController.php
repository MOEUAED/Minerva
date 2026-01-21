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
    public function storeStudent()
    {
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $role = 'student';
            $pdo = Database::connect();
            $sql = "INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$name, $email, $password, $role]);
            Database::disconnect();
            header('Location: /teacher/dashboard');
            exit();
        }

    }
}
