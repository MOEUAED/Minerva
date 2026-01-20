<?php

session_start();

require_once __DIR__ . '/../app/core/Router.php';

$route = new Router();
$route->get('',['AuthController','login']);
$route->get('/login', ['AuthController','login']);
$route->post('/login', ['AuthController', 'login']);

$route->get('/teacher/dashboard', ['TeacherController', 'dashboard']);
$route->get('/student/dashboard', ['StudentController', 'dashboard']);


$route->dispatch();