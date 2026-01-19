<?php
return [
    'db' => [
        'dsn' => 'mysql:host=127.0.0.1;dbname=minerva;charset=utf8mb4',
        'user' => 'root',
        'pass' => 'amine@2002@N',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ],
    ],
];