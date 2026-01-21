<?php

class Database
{
    static private $instance = null;
    private $pdo;

    private function __construct()
    {
        $config = require __DIR__ . '/../../config/database.php';
        $dbConfig = $config['db'];

        try {
            $this->pdo = new PDO(
                $dbConfig['dsn'],
                $dbConfig['user'],
                $dbConfig['pass'],
                $dbConfig['options']
            );
        } catch (PDOException $e) {
            echo 'connection faild' . $e->getMessage();
        }

    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }

        return self::$instance;
    }
    public function getConnection(): PDO
    {
        return $this->pdo;
    }
}


