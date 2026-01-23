<?php
require_once __DIR__ . '/../core/Database.php';

class Work
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function save($name, $description,$deadline, $idClass)
    {
        $stmt = $this->db->prepare("INSERT INTO works (name, description,deadline,class_id) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$name, $description,$deadline, $idClass]);
    }
    public function getAl()
    {
        $stmt = $this->db->query("SELECT * FROM works");
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // public function delete($id)
    // {
    //     $stmt = $this->db->prepare("DELETE FROM works WHERE id = ?");
    //     return $stmt->execute([$id]);
    // }

}