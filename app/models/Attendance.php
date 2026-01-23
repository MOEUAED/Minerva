<?php
require_once __DIR__ . '/../core/Database.php';

class AttendanceModel
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function save($studentId, $classId, $status)
    {
        $sql = "
            INSERT INTO attendance (student_id, class_id, date, status)
            VALUES (?, ?, CURDATE(), ?)
        ";

        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$studentId, $classId, $status]);
    }
}
