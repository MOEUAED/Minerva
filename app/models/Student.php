<?php
require_once __DIR__ . '/../core/Database.php';

class StudentModel
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function create($fullname, $email, $password)
    {
        $role = 'student';
        $sql = "INSERT INTO users (fullname,email,password,role) VALUE (?,?,?,?)";
        $stmt = $this->db->prepare($sql);
        if ($stmt->execute([$fullname, $email, $password, $role])) {
            return $this->db->lastInsertId();
        };
        return false;
    }
    public function assignToClass($studentId, $classId)
    {
        $sql = "INSERT INTO class_students (student_id, class_id) VALUES (?, ?)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$studentId, $classId]);
    }
    public function findByEmail($email)
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = ? LIMIT 1");
        $stmt->execute([$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}