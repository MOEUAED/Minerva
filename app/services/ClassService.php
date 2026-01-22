<?php
require_once __DIR__ . '/../models/ClassModel.php';
class ClassService
{
    private $classModel;

    public function __construct()
    {
        $this->classModel = new ClassModel();
    }

    public function create($name, $teacherId)
    {
        if (empty($name)) {
            return false;
        }

        return $this->classModel->insert($name, $teacherId);
    }
    public function getClassesByTeacher($teacherId)
{
    return $this->classModel->getByTeacher($teacherId);
}


}
