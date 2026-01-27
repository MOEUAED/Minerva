<?php
require_once __DIR__ . '/../services/AttendanceService.php';
require_once __DIR__ . '/../models/Student.php';
require_once __DIR__ . '/../services/ClassService.php';

class AttendanceController
{
    private $attendanceService;
    private $studentModel;
    private $classService;

    public function __construct()
    {
        $this->attendanceService = new AttendanceService();
        $this->studentModel = new StudentModel();
        $this->classService = new ClassService();
    }

    public function index()
    {           
        $teacherId = $_SESSION['userId'];

        $classes = $this->classService->getClassesByTeacherId($teacherId);

        $students = [];
        if (isset($_GET['class_id'])) {
            $students = $this->studentModel->getByClass($_GET['class_id']);
        }

        require __DIR__ . '/../../views/teacher/attendance.php';
    }

    // Save attendance
    public function save()
    {           
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: /teacher/dashboard');
            exit;
        }

        $classId = $_POST['class_id'];
        $absentStudentIds = $_POST['absent_students'] ?? [];

        $students = $this->studentModel->getByClass($classId);

        $this->attendanceService->saveAttendance($classId, $absentStudentIds, $students);

        header('Location: /teacher/attendance?class_id=' . $classId);
        exit;
    }
        public function attendance() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->save();
        } else {
            $this->index();
        }
    }
}
