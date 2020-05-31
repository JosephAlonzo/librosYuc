<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2020-05-27 18:01:27 --> Undefined variable: users
#0 C:\wamp64\www\proyectoLibreria\app\Views\includes\body.php(28): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\wamp64\\www\\p...', 28, Array)
#1 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include('C:\\wamp64\\www\\p...')
#2 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('includes/body', Array, NULL)
#3 C:\wamp64\www\proyectoLibreria\app\Controllers\Home.php(10): view('includes/body')
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\Home->index()
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
