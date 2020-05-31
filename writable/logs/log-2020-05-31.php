<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2020-05-31 00:39:22 --> Undefined index: foto
#0 C:\wamp64\www\proyectoLibreria\app\Views\includes\header.php(22): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 22, Array)
#1 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include('C:\\wamp64\\www\\p...')
#2 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('includes/header', Array, NULL)
#3 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(37): view('includes/header', Array)
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->index()
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-05-31 00:40:22 --> Undefined index: foto
#0 C:\wamp64\www\proyectoLibreria\app\Views\includes\header.php(22): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 22, Array)
#1 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include('C:\\wamp64\\www\\p...')
#2 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('includes/header', Array, NULL)
#3 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(39): view('includes/header', Array)
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->index()
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-05-31 01:09:34 --> Argument 2 passed to view() must be of the type array, boolean given, called in C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php on line 45
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(45): view('includes/header', false)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->index()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-05-31 01:09:37 --> Argument 2 passed to view() must be of the type array, boolean given, called in C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php on line 45
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(45): view('includes/header', false)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->index()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-05-31 01:10:49 --> Argument 2 passed to view() must be of the type array, string given, called in C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php on line 45
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(45): view('includes/header', '')
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->index()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-05-31 01:16:41 --> Call to undefined method CodeIgniter\Session\Session::setdata()
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(13): App\Controllers\UserController->login()
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->index()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-05-31 01:16:53 --> Call to undefined method CodeIgniter\Session\Session::setData()
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(13): App\Controllers\UserController->login()
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->index()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
