<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2020-06-01 00:01:54 --> Undefined index: users
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(28): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 28, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->index()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-06-01 00:04:45 --> Undefined index: users
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(29): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 29, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->index()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-06-01 00:35:00 --> syntax error, unexpected '}'
#0 C:\wamp64\www\proyectoLibreria\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\wamp64\\www\\p...')
#1 C:\wamp64\www\proyectoLibreria\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(792): class_exists('\\App\\Controller...', true)
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->startController()
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-06-01 00:35:16 --> There is no data to update.
#0 C:\wamp64\www\proyectoLibreria\system\Model.php(790): CodeIgniter\Database\Exceptions\DataException::forEmptyDataset('update')
#1 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(137): CodeIgniter\Model->update(Array)
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->update()
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-06-01 00:49:25 --> Undefined variable: request
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(142): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\wamp64\\www\\p...', 142, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->delete()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-06-01 01:26:56 --> Undefined index: books
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(280): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 280, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->show()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-06-01 01:27:19 --> Undefined index: user
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(280): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 280, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->show()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-06-01 01:28:33 --> Undefined index: user
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(282): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 282, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->show()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-06-01 02:12:00 --> Undefined index: tipo
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(74): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 74, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->index()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-06-01 02:13:27 --> Undefined index: tipo
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(75): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 75, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->index()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-06-01 02:14:26 --> Undefined index: users
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(74): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 74, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->index()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-06-01 02:17:06 --> 'continue' not in the 'loop' or 'switch' context
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2020-06-01 02:17:16 --> Undefined index: users
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(75): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 75, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->index()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-06-01 02:19:15 --> Undefined index: users
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(75): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 75, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->index()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-06-01 02:19:53 --> Undefined index: users
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(75): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 75, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->index()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-06-01 02:20:40 --> Undefined index: users
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(75): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 75, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->index()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-06-01 02:23:40 --> Undefined index: users
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(75): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 75, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->index()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-06-01 02:25:04 --> Undefined index: users
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(29): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 29, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->index()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-06-01 02:34:33 --> syntax error, unexpected ')'
#0 C:\wamp64\www\proyectoLibreria\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\wamp64\\www\\p...')
#1 C:\wamp64\www\proyectoLibreria\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(792): class_exists('\\App\\Controller...', true)
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->startController()
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-06-01 02:34:37 --> syntax error, unexpected ')'
#0 C:\wamp64\www\proyectoLibreria\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\wamp64\\www\\p...')
#1 C:\wamp64\www\proyectoLibreria\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(792): class_exists('\\App\\Controller...', true)
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->startController()
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-06-01 03:33:53 --> Undefined variable: session
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(93): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\wamp64\\www\\p...', 93, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->cart()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-06-01 03:34:40 --> array_push() expects parameter 1 to be array, null given
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'array_push() ex...', 'C:\\wamp64\\www\\p...', 92, Array)
#1 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(92): array_push(NULL, NULL)
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->cart()
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-06-01 03:34:53 --> array_push() expects parameter 1 to be array, null given
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'array_push() ex...', 'C:\\wamp64\\www\\p...', 92, Array)
#1 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(92): array_push(NULL, '7')
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->cart()
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-06-01 03:35:54 --> Argument 2 passed to CodeIgniter\Session\Session::push() must be of the type array, string given, called in C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php on line 92
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(92): CodeIgniter\Session\Session->push('cart', '7')
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->cart()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-06-01 10:55:29 --> array_push() expects parameter 1 to be array, null given
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'array_push() ex...', 'C:\\wamp64\\www\\p...', 92, Array)
#1 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(92): array_push(NULL, '1')
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->cart()
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-06-01 11:33:20 --> Illegal string offset 'cantidad'
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\CartController.php(46): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Illegal string ...', 'C:\\wamp64\\www\\p...', 46, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\CartController->add()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CartController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-06-01 11:33:54 --> Illegal string offset 'cantidad'
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\CartController.php(46): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Illegal string ...', 'C:\\wamp64\\www\\p...', 46, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\CartController->add()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CartController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-06-01 11:34:15 --> syntax error, unexpected 'foreach' (T_FOREACH)
#0 C:\wamp64\www\proyectoLibreria\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\wamp64\\www\\p...')
#1 C:\wamp64\www\proyectoLibreria\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(792): class_exists('\\App\\Controller...', true)
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->startController()
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-06-01 11:34:23 --> syntax error, unexpected 'foreach' (T_FOREACH)
#0 C:\wamp64\www\proyectoLibreria\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\wamp64\\www\\p...')
#1 C:\wamp64\www\proyectoLibreria\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(792): class_exists('\\App\\Controller...', true)
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->startController()
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-06-01 11:34:27 --> Illegal string offset 'cantidad'
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\CartController.php(47): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Illegal string ...', 'C:\\wamp64\\www\\p...', 47, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\CartController->add()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CartController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-06-01 11:35:18 --> Argument 1 passed to CodeIgniter\Model::findAll() must be of the type integer, array given, called in C:\wamp64\www\proyectoLibreria\app\Controllers\CartController.php on line 31
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\CartController.php(31): CodeIgniter\Model->findAll(Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\CartController->show()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CartController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-06-01 11:39:01 --> array_slice() expects parameter 2 to be integer, string given
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'array_slice() e...', 'C:\\wamp64\\www\\p...', 31, Array)
#1 C:\wamp64\www\proyectoLibreria\app\Controllers\CartController.php(31): array_slice(Array, 'idBook')
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\CartController->show()
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CartController))
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-06-01 12:02:14 --> Undefined variable: libros
#0 C:\wamp64\www\proyectoLibreria\app\Views\pages\cart.php(25): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\wamp64\\www\\p...', 25, Array)
#1 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include('C:\\wamp64\\www\\p...')
#2 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('pages/cart', Array, NULL)
#3 C:\wamp64\www\proyectoLibreria\app\Controllers\CartController.php(35): view('pages/cart', Array)
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\CartController->show()
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CartController))
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-06-01 12:02:24 --> Undefined index: libro
#0 C:\wamp64\www\proyectoLibreria\app\Views\pages\cart.php(31): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 31, Array)
#1 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include('C:\\wamp64\\www\\p...')
#2 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('pages/cart', Array, NULL)
#3 C:\wamp64\www\proyectoLibreria\app\Controllers\CartController.php(35): view('pages/cart', Array)
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\CartController->show()
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CartController))
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-06-01 12:25:04 --> Undefined index: cantidad
#0 C:\wamp64\www\proyectoLibreria\app\Views\pages\cart.php(26): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 26, Array)
#1 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include('C:\\wamp64\\www\\p...')
#2 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('pages/cart', Array, NULL)
#3 C:\wamp64\www\proyectoLibreria\app\Controllers\CartController.php(35): view('pages/cart', Array)
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\CartController->show()
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CartController))
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-06-01 12:37:10 --> Function name must be a string
#0 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include()
#1 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('pages/cart', Array, NULL)
#2 C:\wamp64\www\proyectoLibreria\app\Controllers\CartController.php(35): view('pages/cart', Array)
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\CartController->show()
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CartController))
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-06-01 12:37:42 --> Function name must be a string
#0 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include()
#1 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('pages/cart', Array, NULL)
#2 C:\wamp64\www\proyectoLibreria\app\Controllers\CartController.php(35): view('pages/cart', Array)
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\CartController->show()
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CartController))
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-06-01 12:57:21 --> Undefined variable: row
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\CartController.php(59): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\wamp64\\www\\p...', 59, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\CartController->add()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CartController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-06-01 13:14:03 --> syntax error, unexpected '}', expecting ',' or ';'
#0 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('pages/cart', Array, NULL)
#1 C:\wamp64\www\proyectoLibreria\app\Controllers\CartController.php(35): view('pages/cart', Array)
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\CartController->show()
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CartController))
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-06-01 13:44:10 --> array_column() expects parameter 1 to be array, null given
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'array_column() ...', 'C:\\wamp64\\www\\p...', 31, Array)
#1 C:\wamp64\www\proyectoLibreria\app\Controllers\CartController.php(31): array_column(NULL, 'idBook')
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\CartController->show()
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CartController))
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-06-01 13:46:10 --> Undefined variable: books
#0 C:\wamp64\www\proyectoLibreria\app\Views\pages\cart.php(6): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\wamp64\\www\\p...', 6, Array)
#1 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include('C:\\wamp64\\www\\p...')
#2 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('pages/cart', Array, NULL)
#3 C:\wamp64\www\proyectoLibreria\app\Controllers\CartController.php(40): view('pages/cart', Array)
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\CartController->show()
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CartController))
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-06-01 13:48:28 --> syntax error, unexpected '$books' (T_VARIABLE), expecting ',' or ';'
#0 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('pages/cart', Array, NULL)
#1 C:\wamp64\www\proyectoLibreria\app\Controllers\CartController.php(40): view('pages/cart', Array)
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\CartController->show()
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CartController))
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-06-01 14:00:17 --> Undefined variable: book
#0 C:\wamp64\www\proyectoLibreria\app\Views\pages\buybooks.php(45): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\wamp64\\www\\p...', 45, Array)
#1 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include('C:\\wamp64\\www\\p...')
#2 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('pages/buybooks', Array, NULL)
#3 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(249): view('pages/buybooks', Array)
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->seeBook()
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-06-01 15:05:07 --> File not found: C:/wamp64/www/proyectolibreria/public/src/img/1044639.png
#0 C:\wamp64\www\proyectoLibreria\system\Files\File.php(73): CodeIgniter\Files\Exceptions\FileNotFoundException::forFileNotFound('C:/wamp64/www/p...')
#1 C:\wamp64\www\proyectoLibreria\system\Images\Handlers\BaseHandler.php(156): CodeIgniter\Files\File->__construct('C:/wamp64/www/p...', true)
#2 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(159): CodeIgniter\Images\Handlers\BaseHandler->withFile('C:/wamp64/www/p...')
#3 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(148): App\Controllers\UserController->resizeImage('C:/wamp64/www/p...')
#4 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(111): App\Controllers\UserController->subirArchivo()
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->add()
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#7 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2020-06-01 15:06:22 --> File not found: C:/wamp64/www/proyectolibreria/public/src/img/
#0 C:\wamp64\www\proyectoLibreria\system\Files\File.php(73): CodeIgniter\Files\Exceptions\FileNotFoundException::forFileNotFound('C:/wamp64/www/p...')
#1 C:\wamp64\www\proyectoLibreria\system\Images\Handlers\BaseHandler.php(156): CodeIgniter\Files\File->__construct('C:/wamp64/www/p...', true)
#2 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(159): CodeIgniter\Images\Handlers\BaseHandler->withFile('C:/wamp64/www/p...')
#3 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(148): App\Controllers\UserController->resizeImage('C:/wamp64/www/p...')
#4 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(128): App\Controllers\UserController->subirArchivo()
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->update()
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#7 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2020-06-01 15:06:40 --> File not found: C:/wamp64/www/proyectolibreria/public/src/img/
#0 C:\wamp64\www\proyectoLibreria\system\Files\File.php(73): CodeIgniter\Files\Exceptions\FileNotFoundException::forFileNotFound('C:/wamp64/www/p...')
#1 C:\wamp64\www\proyectoLibreria\system\Images\Handlers\BaseHandler.php(156): CodeIgniter\Files\File->__construct('C:/wamp64/www/p...', true)
#2 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(159): CodeIgniter\Images\Handlers\BaseHandler->withFile('C:/wamp64/www/p...')
#3 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(148): App\Controllers\UserController->resizeImage('C:/wamp64/www/p...')
#4 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(128): App\Controllers\UserController->subirArchivo()
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->update()
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#7 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2020-06-01 15:13:54 --> File not found: C:/wamp64/www/proyectolibreria/public/src/img/1044639.png
#0 C:\wamp64\www\proyectoLibreria\system\Files\File.php(73): CodeIgniter\Files\Exceptions\FileNotFoundException::forFileNotFound('C:/wamp64/www/p...')
#1 C:\wamp64\www\proyectoLibreria\system\Images\Handlers\BaseHandler.php(156): CodeIgniter\Files\File->__construct('C:/wamp64/www/p...', true)
#2 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(162): CodeIgniter\Images\Handlers\BaseHandler->withFile('C:/wamp64/www/p...')
#3 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(151): App\Controllers\UserController->resizeImage('C:/wamp64/www/p...')
#4 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(111): App\Controllers\UserController->subirArchivo()
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->add()
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#7 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2020-06-01 15:45:29 --> syntax error, unexpected ',', expecting ';'
#0 C:\wamp64\www\proyectoLibreria\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\wamp64\\www\\p...')
#1 C:\wamp64\www\proyectoLibreria\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(792): class_exists('\\App\\Controller...', true)
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->startController()
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-06-01 16:02:36 --> File not found: C:/wamp64/www/proyectolibreria/public/src/img/1045046.jpg
#0 C:\wamp64\www\proyectoLibreria\system\Files\File.php(73): CodeIgniter\Files\Exceptions\FileNotFoundException::forFileNotFound('C:/wamp64/www/p...')
#1 C:\wamp64\www\proyectoLibreria\system\Images\Handlers\BaseHandler.php(156): CodeIgniter\Files\File->__construct('C:/wamp64/www/p...', true)
#2 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(163): CodeIgniter\Images\Handlers\BaseHandler->withFile('C:/wamp64/www/p...')
#3 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(152): App\Controllers\UserController->resizeImage('C:/wamp64/www/p...')
#4 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(112): App\Controllers\UserController->subirArchivo()
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->add()
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#7 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2020-06-01 16:03:10 --> File not found: C:/wamp64/www/proyectolibreria/public/src/img/1045046.jpg
#0 C:\wamp64\www\proyectoLibreria\system\Files\File.php(73): CodeIgniter\Files\Exceptions\FileNotFoundException::forFileNotFound('C:/wamp64/www/p...')
#1 C:\wamp64\www\proyectoLibreria\system\Images\Handlers\BaseHandler.php(156): CodeIgniter\Files\File->__construct('C:/wamp64/www/p...', true)
#2 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(163): CodeIgniter\Images\Handlers\BaseHandler->withFile('C:/wamp64/www/p...')
#3 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(152): App\Controllers\UserController->resizeImage('C:/wamp64/www/p...')
#4 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(112): App\Controllers\UserController->subirArchivo()
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->add()
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#7 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
