<?php
require_once __DIR__ . '/../core/Database.php';

class UserModel
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function findByEmail($email)
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = ? LIMIT 1");
        $stmt->execute([$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function create($nom,$email,$password)
    {
        $stmt = $this->db->prepare("INSERT INTO users (email, password, fullname) VALUES (?, ?, ?)");
        return $stmt->execute([$email, $password, $nom]);
        
    }
}
