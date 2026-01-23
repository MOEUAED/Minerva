<?php
require_once __DIR__ . '/../services/WorkService.php';
require_once __DIR__ . '/../services/ClassService.php';
class WorkController
{
    private $workService;
    private $classService;
    public function __construct()
    {
        $this->workService = new WorkService();
        $this->classService = new ClassService();
    }


    public function works()
    {
        if (!isset($_SESSION['userId']) || $_SESSION['userRole'] !== 'teacher') {
            header('Location: /login');
            return;
        }
        $works = $this->workService->getWorksByTeacher($_SESSION['userId']);
        $works = $this->workService->getWorksByTeacher($_SESSION['userId']);
        $classes = $this->classService->getClassesByTeacher($_SESSION['userId']);
        require_once __DIR__ . '/../../views/teacher/create_work.php';
    }

    public function workCreate()
    {
        if (!isset($_SESSION['userId']) || $_SESSION['userRole'] !== 'teacher') {
            header('Location: /login');
            exit();
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $name = $_POST['work_name'];
            $description = $_POST['work_description'];
            $deadline = $_POST['work_deadline'];
            $idClass = $_POST['class_id'];
            $result = $this->workService->saveService($name, $description, $deadline, $idClass);
            if ($result['success']) {
                $_SESSION['success_message'] = $result['message'];
            } else {
                $_SESSION['error_message'] = $result['message'];
            }
            header('Location: /works');
            exit;
        }
    }
}