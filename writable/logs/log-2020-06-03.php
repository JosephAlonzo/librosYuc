<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2020-06-03 14:46:48 --> move_uploaded_file(C:/wamp64/www/public/src/img/1008198.jpg): failed to open stream: No such file or directory
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'move_uploaded_f...', 'C:\\wamp64\\www\\p...', 148, Array)
#1 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(148): move_uploaded_file('C:\\wamp64\\tmp\\p...', 'C:/wamp64/www/p...')
#2 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(109): App\Controllers\UserController->subirArchivo()
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->add()
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-06-03 14:47:51 --> move_uploaded_file(C:/wamp64/www/public/src/img/1006568.jpg): failed to open stream: No such file or directory
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'move_uploaded_f...', 'C:\\wamp64\\www\\p...', 148, Array)
#1 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(148): move_uploaded_file('C:\\wamp64\\tmp\\p...', 'C:/wamp64/www/p...')
#2 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(109): App\Controllers\UserController->subirArchivo()
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->add()
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-06-03 14:51:24 --> move_uploaded_file(C:/wamp64/www/public/src/img/1006568.jpg): failed to open stream: No such file or directory
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'move_uploaded_f...', 'C:\\wamp64\\www\\p...', 148, Array)
#1 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(148): move_uploaded_file('C:\\wamp64\\tmp\\p...', 'C:/wamp64/www/p...')
#2 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(109): App\Controllers\UserController->subirArchivo()
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->add()
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-06-03 14:52:11 --> Undefined index: foto
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(147): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 147, Array)
#1 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(109): App\Controllers\UserController->subirArchivo()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->add()
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-06-03 17:09:48 --> Your server does not support the GD function required to process this type of image. Ima
#0 C:\wamp64\www\proyectoLibreria\system\Images\Handlers\GDHandler.php(423): CodeIgniter\Images\Exceptions\ImageException::forInvalidImageCreate('Ima')
#1 C:\wamp64\www\proyectoLibreria\system\Images\Handlers\GDHandler.php(273): CodeIgniter\Images\Handlers\GDHandler->createImage()
#2 C:\wamp64\www\proyectoLibreria\system\Images\Handlers\GDHandler.php(230): CodeIgniter\Images\Handlers\GDHandler->process('resize')
#3 C:\wamp64\www\proyectoLibreria\system\Images\Handlers\BaseHandler.php(247): CodeIgniter\Images\Handlers\GDHandler->_resize(true)
#4 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(348): CodeIgniter\Images\Handlers\BaseHandler->resize(350, 300, true, 'height')
#5 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(336): App\Controllers\BookController->resizeImage('C:/wamp64/www/p...')
#6 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(316): App\Controllers\BookController->subirArchivo()
#7 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->update()
#8 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#9 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
