<?php

class Database
{
    static private $instance = null;
    private $pdo;

    private function __construct()
    {
        $config = require __DIR__ . '/../../config/database.php';
        $dbConfig = $config['db'];

        $this->pdo = new PDO(
            $dbConfig['dsn'],
            $dbConfig['user'],
            $dbConfig['pass'],
            $dbConfig['options']
        );
    }

    public function connect()
    {
        if (is_null(self::$instance)) {
            self::$instance = new Database();
        }

        return self::$instance;
    }
}