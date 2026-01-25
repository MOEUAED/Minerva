<?php
require_once __DIR__ . '/../core/Database.php';

class Work
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function save($name, $description, $deadline, $idClass)
    {
        $stmt = $this->db->prepare("INSERT INTO works (name, description,deadline,class_id) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$name, $description, $deadline, $idClass]);
    }
    public function getWorkByTeacher($teacherId)
    {
        $stmt = $this->db->prepare("SELECT w.*,c.name as class_name FROM works w JOIN classes c ON w.class_id=c.id where c.teacher_id=? order by w.created_at desc");
        $stmt->execute([$teacherId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


}