<?php
require_once __DIR__ . '/../services/WorkService.php';
class WorkController{
    public function works()
    {
        if(!isset($_SESSION['userId']) || $_SESSION['userRole'] !== 'teacher'){
            header('Location: /login');
            return;
        }
        require_once __DIR__ . '/../../views/teacher/create_work.php';
    }

    public function workCreate()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $work = new WorkService();
            $name = $_POST['work_name'];
            $description = $_POST['work_description'];
            $deadline = $_POST['work_deadline'];
            $idClass = $_POST['class_id'];
            $work->saveService($name, $description, $deadline, $idClass);
            header('Location: /works');
        }
    }
}