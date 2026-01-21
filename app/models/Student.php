<?php
require_once __DIR__.'/../core/Database.php';

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
        return $stmt->execute([$fullname, $email, $password, $role]);
    }
}