<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2020-05-28 16:46:37 --> syntax error, unexpected '}', expecting ',' or ';'
#0 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('includes/body', Array, NULL)
#1 C:\wamp64\www\proyectoLibreria\app\Controllers\Home.php(10): view('includes/body')
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\Home->index()
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
