<?php
require_once __DIR__ . '/../models/Work.php';
class WorkService
{
    private $work;

    public function __construct()
    {
        $this->work = new Work();
    }
    public function saveService($name, $description, $deadline, $idClass)
    {
        $resultat = ['success' => true, 'message' => 'Le travail est ajouté avec succés.'];
        if (!isset($name) || !isset($description) || !isset($deadline) || !isset($idClass)) {
            return $resultat = [
                'success' => false,
                'message' => 'Tous les champs son oblligatoire.'
            ];
        }
        if ($_SESSION['userRole'] != 'teacher') {
            return $resultat = [
                'success' => false,
                'message' => 'ne peux pas.'
            ];
            header('Location: /login');
            exit;

        }
        $this->work->save($name, $description, $deadline, $idClass);
        return $resultat;
    }
    public function getWorksByTeacher($teacherId)
    {

        // if ($_SESSION['role'] != 'teacher') {
        //     header('location: /login');
        // }
        return $this->work->getWorkByTeacher($teacherId);
    }


}