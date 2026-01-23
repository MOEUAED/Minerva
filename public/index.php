<?php

session_start();

require_once __DIR__ . '/../app/core/Router.php';

$route = new Router();
$route->get('/login', ['AuthController','login']);
$route->post('/login', ['AuthController', 'login']);

$route->get('/teacher/dashboard', ['TeacherController', 'dashboard']);
$route->get('/student/dashboard', ['StudentController', 'dashboard']);

$route->get('/register', ['AuthController', 'register']);
$route->post('/register', ['AuthController', 'register']);
$route->get('/logout',['AuthController', 'logout']);

$route->post('/teacher/addStudent', ['TeacherController', 'storeStudent']);
$route->post('/teacher/create-classes', ['ClassController', 'store']);
$route->get('/teacher/classes', ['ClassController', 'storeviews']);

$route->get('/teacher/works',['WorkController', 'works']);
$route->post('/teacher/work', ['TeacherController', 'workCreate']);

$route->dispatch();