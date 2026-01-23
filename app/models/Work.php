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
        $stmt = $this->db->prepare("SELECT * FROM works JOIN classes ON works.class_id=classes.id where classes.teacher_id=? order by created_at desc");
        $stmt->execute([$teacherId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


}