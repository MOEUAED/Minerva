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
        $this->work->save($name, $description, $deadline, $idClass);
        return $resultat;
    }

    
}