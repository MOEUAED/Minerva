<?php
require_once __DIR__ . '/../services/ClassService.php';

class ClassController
{
    private $classService;

    public function __construct()
    {
        $this->classService = new ClassService();
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: /teacher/dashboard');
            return;
        }

        session_start();

        $name = $_POST['class_name'];
        $teacherId = $_SESSION['userId'];

        $this->classService->create($name, $teacherId);

        header('Location: /teacher/dashboard');
        return;
    }

    public function storeviews()
    {
        $teacherId = $_SESSION['userId'];
        $classes = $this->classService->getClassesByTeacherId($teacherId);

        require __DIR__ . '/../../views/teacher/classes.php';
    }
    
    
}
 