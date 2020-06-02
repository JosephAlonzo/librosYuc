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
CRITICAL - 2020-05-31 04:19:33 --> Router.invalidParameterType
#0 C:\wamp64\www\proyectoLibreria\system\Router\RouteCollection.php(1220): CodeIgniter\Router\Exceptions\RouterException::forInvalidParameterType()
#1 C:\wamp64\www\proyectoLibreria\system\Router\RouteCollection.php(1106): CodeIgniter\Router\RouteCollection->fillRouteParams('deleteToNowRead...', Array)
#2 C:\wamp64\www\proyectoLibreria\system\Common.php(531): CodeIgniter\Router\RouteCollection->reverseRoute('deletenowreadin...', '19', '1')
#3 C:\wamp64\www\proyectoLibreria\app\Views\pages\buybooks.php(27): route_to('deletenowreadin...', '19', '1')
#4 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include('C:\\wamp64\\www\\p...')
#5 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('pages/buybooks', Array, NULL)
#6 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(200): view('pages/buybooks', Array)
#7 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->seeBook()
#8 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#9 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2020-05-31 04:21:19 --> Router.invalidParameterType
#0 C:\wamp64\www\proyectoLibreria\system\Router\RouteCollection.php(1220): CodeIgniter\Router\Exceptions\RouterException::forInvalidParameterType()
#1 C:\wamp64\www\proyectoLibreria\system\Router\RouteCollection.php(1106): CodeIgniter\Router\RouteCollection->fillRouteParams('deleteToNowRead...', Array)
#2 C:\wamp64\www\proyectoLibreria\system\Common.php(531): CodeIgniter\Router\RouteCollection->reverseRoute('deletenowreadin...', '19', '1')
#3 C:\wamp64\www\proyectoLibreria\app\Views\pages\buybooks.php(27): route_to('deletenowreadin...', '19', '1')
#4 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include('C:\\wamp64\\www\\p...')
#5 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('pages/buybooks', Array, NULL)
#6 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(200): view('pages/buybooks', Array)
#7 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->seeBook()
#8 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#9 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2020-05-31 04:21:40 --> ltrim() expects parameter 1 to be string, object given
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'ltrim() expects...', 'C:\\wamp64\\www\\p...', 1121, Array)
#1 C:\wamp64\www\proyectoLibreria\system\Router\RouteCollection.php(1121): ltrim(Object(Closure), '\\')
#2 C:\wamp64\www\proyectoLibreria\system\Common.php(531): CodeIgniter\Router\RouteCollection->reverseRoute('deletenowreadin...', '19', '1')
#3 C:\wamp64\www\proyectoLibreria\app\Views\pages\buybooks.php(27): route_to('deletenowreadin...', '19', '1')
#4 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include('C:\\wamp64\\www\\p...')
#5 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('pages/buybooks', Array, NULL)
#6 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(200): view('pages/buybooks', Array)
#7 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->seeBook()
#8 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#9 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2020-05-31 04:21:55 --> Router.invalidParameterType
#0 C:\wamp64\www\proyectoLibreria\system\Router\RouteCollection.php(1220): CodeIgniter\Router\Exceptions\RouterException::forInvalidParameterType()
#1 C:\wamp64\www\proyectoLibreria\system\Router\RouteCollection.php(1106): CodeIgniter\Router\RouteCollection->fillRouteParams('deleteToNowRead...', Array)
#2 C:\wamp64\www\proyectoLibreria\system\Common.php(531): CodeIgniter\Router\RouteCollection->reverseRoute('deletenowreadin...', '19', '1')
#3 C:\wamp64\www\proyectoLibreria\app\Views\pages\buybooks.php(27): route_to('deletenowreadin...', '19', '1')
#4 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include('C:\\wamp64\\www\\p...')
#5 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('pages/buybooks', Array, NULL)
#6 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(200): view('pages/buybooks', Array)
#7 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->seeBook()
#8 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#9 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2020-05-31 04:27:51 --> ltrim() expects parameter 1 to be string, object given
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'ltrim() expects...', 'C:\\wamp64\\www\\p...', 1121, Array)
#1 C:\wamp64\www\proyectoLibreria\system\Router\RouteCollection.php(1121): ltrim(Object(Closure), '\\')
#2 C:\wamp64\www\proyectoLibreria\system\Common.php(531): CodeIgniter\Router\RouteCollection->reverseRoute('deletenowreadin...', '19', '1')
#3 C:\wamp64\www\proyectoLibreria\app\Views\pages\buybooks.php(27): route_to('deletenowreadin...', '19', '1')
#4 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include('C:\\wamp64\\www\\p...')
#5 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('pages/buybooks', Array, NULL)
#6 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(200): view('pages/buybooks', Array)
#7 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->seeBook()
#8 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#9 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2020-05-31 04:27:54 --> ltrim() expects parameter 1 to be string, object given
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'ltrim() expects...', 'C:\\wamp64\\www\\p...', 1121, Array)
#1 C:\wamp64\www\proyectoLibreria\system\Router\RouteCollection.php(1121): ltrim(Object(Closure), '\\')
#2 C:\wamp64\www\proyectoLibreria\system\Common.php(531): CodeIgniter\Router\RouteCollection->reverseRoute('deletenowreadin...', '19', '1')
#3 C:\wamp64\www\proyectoLibreria\app\Views\pages\buybooks.php(27): route_to('deletenowreadin...', '19', '1')
#4 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include('C:\\wamp64\\www\\p...')
#5 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('pages/buybooks', Array, NULL)
#6 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(200): view('pages/buybooks', Array)
#7 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->seeBook()
#8 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#9 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2020-05-31 04:28:33 --> ltrim() expects parameter 1 to be string, object given
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'ltrim() expects...', 'C:\\wamp64\\www\\p...', 1121, Array)
#1 C:\wamp64\www\proyectoLibreria\system\Router\RouteCollection.php(1121): ltrim(Object(Closure), '\\')
#2 C:\wamp64\www\proyectoLibreria\system\Common.php(531): CodeIgniter\Router\RouteCollection->reverseRoute('deletenowreadin...', '19', '1')
#3 C:\wamp64\www\proyectoLibreria\app\Views\pages\buybooks.php(27): route_to('deletenowreadin...', '19', '1')
#4 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include('C:\\wamp64\\www\\p...')
#5 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('pages/buybooks', Array, NULL)
#6 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(200): view('pages/buybooks', Array)
#7 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->seeBook()
#8 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#9 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2020-05-31 04:28:38 --> ltrim() expects parameter 1 to be string, object given
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'ltrim() expects...', 'C:\\wamp64\\www\\p...', 1121, Array)
#1 C:\wamp64\www\proyectoLibreria\system\Router\RouteCollection.php(1121): ltrim(Object(Closure), '\\')
#2 C:\wamp64\www\proyectoLibreria\system\Common.php(531): CodeIgniter\Router\RouteCollection->reverseRoute('deletenowreadin...', '19', '1')
#3 C:\wamp64\www\proyectoLibreria\app\Views\pages\buybooks.php(27): route_to('deletenowreadin...', '19', '1')
#4 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include('C:\\wamp64\\www\\p...')
#5 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('pages/buybooks', Array, NULL)
#6 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(200): view('pages/buybooks', Array)
#7 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->seeBook()
#8 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#9 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2020-05-31 04:30:01 --> ltrim() expects parameter 1 to be string, object given
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'ltrim() expects...', 'C:\\wamp64\\www\\p...', 1121, Array)
#1 C:\wamp64\www\proyectoLibreria\system\Router\RouteCollection.php(1121): ltrim(Object(Closure), '\\')
#2 C:\wamp64\www\proyectoLibreria\system\Common.php(531): CodeIgniter\Router\RouteCollection->reverseRoute('deletenowreadin...', '19', '1')
#3 C:\wamp64\www\proyectoLibreria\app\Views\pages\buybooks.php(27): route_to('deletenowreadin...', '19', '1')
#4 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include('C:\\wamp64\\www\\p...')
#5 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('pages/buybooks', Array, NULL)
#6 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(200): view('pages/buybooks', Array)
#7 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->seeBook()
#8 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#9 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2020-05-31 04:30:06 --> ltrim() expects parameter 1 to be string, object given
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'ltrim() expects...', 'C:\\wamp64\\www\\p...', 1121, Array)
#1 C:\wamp64\www\proyectoLibreria\system\Router\RouteCollection.php(1121): ltrim(Object(Closure), '\\')
#2 C:\wamp64\www\proyectoLibreria\system\Common.php(531): CodeIgniter\Router\RouteCollection->reverseRoute('deletenowreadin...', '19', '1')
#3 C:\wamp64\www\proyectoLibreria\app\Views\pages\buybooks.php(27): route_to('deletenowreadin...', '19', '1')
#4 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include('C:\\wamp64\\www\\p...')
#5 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('pages/buybooks', Array, NULL)
#6 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(200): view('pages/buybooks', Array)
#7 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->seeBook()
#8 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#9 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2020-05-31 04:30:35 --> ltrim() expects parameter 1 to be string, object given
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'ltrim() expects...', 'C:\\wamp64\\www\\p...', 1121, Array)
#1 C:\wamp64\www\proyectoLibreria\system\Router\RouteCollection.php(1121): ltrim(Object(Closure), '\\')
#2 C:\wamp64\www\proyectoLibreria\system\Common.php(531): CodeIgniter\Router\RouteCollection->reverseRoute('deletenowreadin...', '19', '1')
#3 C:\wamp64\www\proyectoLibreria\app\Views\pages\buybooks.php(27): route_to('deletenowreadin...', '19', '1')
#4 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include('C:\\wamp64\\www\\p...')
#5 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('pages/buybooks', Array, NULL)
#6 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(200): view('pages/buybooks', Array)
#7 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->seeBook()
#8 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#9 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2020-05-31 04:30:47 --> ltrim() expects parameter 1 to be string, object given
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'ltrim() expects...', 'C:\\wamp64\\www\\p...', 1121, Array)
#1 C:\wamp64\www\proyectoLibreria\system\Router\RouteCollection.php(1121): ltrim(Object(Closure), '\\')
#2 C:\wamp64\www\proyectoLibreria\system\Common.php(531): CodeIgniter\Router\RouteCollection->reverseRoute('deletenowreadin...', '19', '1')
#3 C:\wamp64\www\proyectoLibreria\app\Views\pages\buybooks.php(27): route_to('deletenowreadin...', '19', '1')
#4 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include('C:\\wamp64\\www\\p...')
#5 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('pages/buybooks', Array, NULL)
#6 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(200): view('pages/buybooks', Array)
#7 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->seeBook()
#8 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#9 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2020-05-31 04:31:17 --> ltrim() expects parameter 1 to be string, object given
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'ltrim() expects...', 'C:\\wamp64\\www\\p...', 1121, Array)
#1 C:\wamp64\www\proyectoLibreria\system\Router\RouteCollection.php(1121): ltrim(Object(Closure), '\\')
#2 C:\wamp64\www\proyectoLibreria\system\Common.php(531): CodeIgniter\Router\RouteCollection->reverseRoute('deletenowreadin...', '19', '1')
#3 C:\wamp64\www\proyectoLibreria\app\Views\pages\buybooks.php(27): route_to('deletenowreadin...', '19', '1')
#4 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include('C:\\wamp64\\www\\p...')
#5 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('pages/buybooks', Array, NULL)
#6 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(200): view('pages/buybooks', Array)
#7 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->seeBook()
#8 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#9 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2020-05-31 04:31:33 --> ltrim() expects parameter 1 to be string, object given
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'ltrim() expects...', 'C:\\wamp64\\www\\p...', 1121, Array)
#1 C:\wamp64\www\proyectoLibreria\system\Router\RouteCollection.php(1121): ltrim(Object(Closure), '\\')
#2 C:\wamp64\www\proyectoLibreria\system\Common.php(531): CodeIgniter\Router\RouteCollection->reverseRoute('deletenowreadin...', '19', '1')
#3 C:\wamp64\www\proyectoLibreria\app\Views\pages\buybooks.php(27): route_to('deletenowreadin...', '19', '1')
#4 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include('C:\\wamp64\\www\\p...')
#5 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('pages/buybooks', Array, NULL)
#6 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(200): view('pages/buybooks', Array)
#7 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->seeBook()
#8 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#9 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2020-05-31 05:18:05 --> syntax error, unexpected end of file
#0 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('includes/header', Array, NULL)
#1 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(44): view('includes/header', Array)
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->index()
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-05-31 05:18:15 --> syntax error, unexpected end of file
#0 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('includes/header', Array, NULL)
#1 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(44): view('includes/header', Array)
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->index()
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-05-31 05:35:48 --> Undefined variable: users
#0 C:\wamp64\www\proyectoLibreria\app\Views\includes\header.php(39): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\wamp64\\www\\p...', 39, Array)
#1 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include('C:\\wamp64\\www\\p...')
#2 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('includes/header', Array, NULL)
#3 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(44): view('includes/header', Array)
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->index()
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-05-31 12:01:43 --> Undefined index: foto
#0 C:\wamp64\www\proyectoLibreria\app\Views\includes\header.php(28): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 28, Array)
#1 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include('C:\\wamp64\\www\\p...')
#2 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('includes/header', Array, NULL)
#3 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(106): view('includes/header', Array)
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->mostRead()
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-05-31 12:02:03 --> Undefined index: foto
#0 C:\wamp64\www\proyectoLibreria\app\Views\includes\header.php(28): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 28, Array)
#1 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include('C:\\wamp64\\www\\p...')
#2 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('includes/header', Array, NULL)
#3 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(119): view('includes/header', Array)
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->bestOfList()
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-05-31 12:02:34 --> Undefined index: foto
#0 C:\wamp64\www\proyectoLibreria\app\Views\includes\header.php(28): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 28, Array)
#1 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include('C:\\wamp64\\www\\p...')
#2 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('includes/header', Array, NULL)
#3 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(106): view('includes/header', Array)
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->mostRead()
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-05-31 12:05:31 --> Call to a member function get() on null
#0 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(813): App\Controllers\BookController->__construct()
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(330): CodeIgniter\CodeIgniter->createController()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-05-31 12:05:54 --> Call to a member function get() on null
#0 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(813): App\Controllers\BookController->__construct()
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(330): CodeIgniter\CodeIgniter->createController()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-05-31 12:09:56 --> Call to a member function get() on null
#0 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(813): App\Controllers\BookController->__construct()
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(330): CodeIgniter\CodeIgniter->createController()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-05-31 12:10:42 --> Cannot call constructor
#0 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(813): App\Controllers\BookController->__construct()
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(330): CodeIgniter\CodeIgniter->createController()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-05-31 12:11:36 --> Too few arguments to function App\Controllers\BaseController::initController(), 0 passed in C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php on line 29 and exactly 3 expected
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(29): App\Controllers\BaseController->initController()
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(813): App\Controllers\BookController->__construct()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(330): CodeIgniter\CodeIgniter->createController()
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-05-31 12:12:15 --> Undefined variable: session
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(32): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\wamp64\\www\\p...', 32, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(813): App\Controllers\BookController->__construct()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(330): CodeIgniter\CodeIgniter->createController()
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-05-31 12:17:04 --> Undefined variable: users
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(37): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\wamp64\\www\\p...', 37, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(813): App\Controllers\BookController->__construct()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(330): CodeIgniter\CodeIgniter->createController()
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-05-31 12:17:54 --> Undefined variable: userModel
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(37): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\wamp64\\www\\p...', 37, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(813): App\Controllers\BookController->__construct()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(330): CodeIgniter\CodeIgniter->createController()
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-05-31 12:18:03 --> Undefined variable: users
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(37): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\wamp64\\www\\p...', 37, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(813): App\Controllers\BookController->__construct()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(330): CodeIgniter\CodeIgniter->createController()
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-05-31 12:27:53 --> Undefined variable: users
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(178): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\wamp64\\www\\p...', 178, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->seeBook()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-05-31 12:32:11 --> Column 'id_user' cannot be null
#0 C:\wamp64\www\proyectoLibreria\system\Database\MySQLi\Connection.php(329): mysqli->query('INSERT INTO `hi...')
#1 C:\wamp64\www\proyectoLibreria\system\Database\BaseConnection.php(709): CodeIgniter\Database\MySQLi\Connection->execute('INSERT INTO `hi...')
#2 C:\wamp64\www\proyectoLibreria\system\Database\BaseConnection.php(637): CodeIgniter\Database\BaseConnection->simpleQuery('INSERT INTO `hi...')
#3 C:\wamp64\www\proyectoLibreria\system\Database\BaseBuilder.php(1835): CodeIgniter\Database\BaseConnection->query('INSERT INTO `hi...', Array, false)
#4 C:\wamp64\www\proyectoLibreria\system\Model.php(715): CodeIgniter\Database\BaseBuilder->insert()
#5 C:\wamp64\www\proyectoLibreria\system\Model.php(538): CodeIgniter\Model->insert(Array, false)
#6 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(201): CodeIgniter\Model->save(Array)
#7 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(171): App\Controllers\BookController->addHistory(NULL, '1')
#8 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->seeBook()
#9 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#10 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#11 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#12 {main}
CRITICAL - 2020-05-31 12:32:24 --> Column 'id_user' cannot be null
#0 C:\wamp64\www\proyectoLibreria\system\Database\MySQLi\Connection.php(329): mysqli->query('INSERT INTO `hi...')
#1 C:\wamp64\www\proyectoLibreria\system\Database\BaseConnection.php(709): CodeIgniter\Database\MySQLi\Connection->execute('INSERT INTO `hi...')
#2 C:\wamp64\www\proyectoLibreria\system\Database\BaseConnection.php(637): CodeIgniter\Database\BaseConnection->simpleQuery('INSERT INTO `hi...')
#3 C:\wamp64\www\proyectoLibreria\system\Database\BaseBuilder.php(1835): CodeIgniter\Database\BaseConnection->query('INSERT INTO `hi...', Array, false)
#4 C:\wamp64\www\proyectoLibreria\system\Model.php(715): CodeIgniter\Database\BaseBuilder->insert()
#5 C:\wamp64\www\proyectoLibreria\system\Model.php(538): CodeIgniter\Model->insert(Array, false)
#6 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(201): CodeIgniter\Model->save(Array)
#7 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(171): App\Controllers\BookController->addHistory(NULL, '1')
#8 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->seeBook()
#9 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#10 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#11 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#12 {main}
CRITICAL - 2020-05-31 12:33:50 --> Column 'id_user' cannot be null
#0 C:\wamp64\www\proyectoLibreria\system\Database\MySQLi\Connection.php(329): mysqli->query('INSERT INTO `hi...')
#1 C:\wamp64\www\proyectoLibreria\system\Database\BaseConnection.php(709): CodeIgniter\Database\MySQLi\Connection->execute('INSERT INTO `hi...')
#2 C:\wamp64\www\proyectoLibreria\system\Database\BaseConnection.php(637): CodeIgniter\Database\BaseConnection->simpleQuery('INSERT INTO `hi...')
#3 C:\wamp64\www\proyectoLibreria\system\Database\BaseBuilder.php(1835): CodeIgniter\Database\BaseConnection->query('INSERT INTO `hi...', Array, false)
#4 C:\wamp64\www\proyectoLibreria\system\Model.php(715): CodeIgniter\Database\BaseBuilder->insert()
#5 C:\wamp64\www\proyectoLibreria\system\Model.php(538): CodeIgniter\Model->insert(Array, false)
#6 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(202): CodeIgniter\Model->save(Array)
#7 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(172): App\Controllers\BookController->addHistory(NULL, '1')
#8 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->seeBook()
#9 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#10 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#11 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#12 {main}
CRITICAL - 2020-05-31 12:39:03 --> syntax error, unexpected '}', expecting end of file
#0 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('pages/buybooks', Array, NULL)
#1 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(180): view('pages/buybooks', Array)
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->seeBook()
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-05-31 13:41:47 --> Undefined index: id
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(45): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 45, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->index()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-05-31 13:42:08 --> Undefined index: id
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(46): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 46, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->index()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-05-31 13:42:19 --> Undefined index: id
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(46): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 46, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->index()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-05-31 13:44:15 --> Undefined variable: books
#0 C:\wamp64\www\proyectoLibreria\app\Views\pages\browse.php(4): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\wamp64\\www\\p...', 4, Array)
#1 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include('C:\\wamp64\\www\\p...')
#2 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('pages/browse', Array, NULL)
#3 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(52): view('pages/browse', Array)
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->index()
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-05-31 13:44:36 --> Undefined variable: books
#0 C:\wamp64\www\proyectoLibreria\app\Views\pages\browse.php(4): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\wamp64\\www\\p...', 4, Array)
#1 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include('C:\\wamp64\\www\\p...')
#2 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('pages/browse', Array, NULL)
#3 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(52): view('pages/browse', Array)
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->index()
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-05-31 13:45:38 --> syntax error, unexpected '}', expecting ',' or ';'
#0 C:\wamp64\www\proyectoLibreria\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\wamp64\\www\\p...')
#1 C:\wamp64\www\proyectoLibreria\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(792): class_exists('\\App\\Controller...', true)
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->startController()
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-05-31 13:45:46 --> Array to string conversion
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(52): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Array to string...', 'C:\\wamp64\\www\\p...', 52, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->index()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-05-31 13:46:06 --> Undefined variable: books
#0 C:\wamp64\www\proyectoLibreria\app\Views\pages\browse.php(4): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\wamp64\\www\\p...', 4, Array)
#1 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include('C:\\wamp64\\www\\p...')
#2 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('pages/browse', Array, NULL)
#3 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(57): view('pages/browse', Array)
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->index()
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-05-31 13:46:56 --> Undefined variable: books
#0 C:\wamp64\www\proyectoLibreria\app\Views\pages\browse.php(4): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\wamp64\\www\\p...', 4, Array)
#1 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include('C:\\wamp64\\www\\p...')
#2 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('pages/browse', Array, NULL)
#3 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(55): view('pages/browse', Array)
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->index()
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-05-31 13:50:43 --> Undefined variable: books
#0 C:\wamp64\www\proyectoLibreria\app\Views\pages\browse.php(4): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\wamp64\\www\\p...', 4, Array)
#1 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include('C:\\wamp64\\www\\p...')
#2 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('pages/browse', Array, NULL)
#3 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(60): view('pages/browse', Array)
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->index()
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-05-31 13:53:50 --> syntax error, unexpected '=>' (T_DOUBLE_ARROW)
#0 C:\wamp64\www\proyectoLibreria\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\wamp64\\www\\p...')
#1 C:\wamp64\www\proyectoLibreria\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(792): class_exists('\\App\\Controller...', true)
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->startController()
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-05-31 13:55:27 --> Trying to get property 'true' of non-object
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(53): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Trying to get p...', 'C:\\wamp64\\www\\p...', 53, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->index()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-05-31 13:57:03 --> array_push() expects parameter 1 to be array, null given
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'array_push() ex...', 'C:\\wamp64\\www\\p...', 53, Array)
#1 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(53): array_push(NULL, true)
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->index()
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-05-31 14:04:51 --> Unknown column 'nowreading.id_book' in 'on clause'
#0 C:\wamp64\www\proyectoLibreria\system\Database\MySQLi\Connection.php(329): mysqli->query('SELECT `id_book...')
#1 C:\wamp64\www\proyectoLibreria\system\Database\BaseConnection.php(709): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `id_book...')
#2 C:\wamp64\www\proyectoLibreria\system\Database\BaseConnection.php(637): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `id_book...')
#3 C:\wamp64\www\proyectoLibreria\system\Database\BaseBuilder.php(1476): CodeIgniter\Database\BaseConnection->query('SELECT `id_book...', Array, false)
#4 C:\wamp64\www\proyectoLibreria\system\Model.php(377): CodeIgniter\Database\BaseBuilder->get()
#5 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(50): CodeIgniter\Model->find()
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(813): App\Controllers\BookController->__construct()
#7 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(330): CodeIgniter\CodeIgniter->createController()
#8 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2020-05-31 14:11:03 --> Undefined offset: 2
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(70): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined offse...', 'C:\\wamp64\\www\\p...', 70, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->index()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-05-31 14:21:35 --> Array to string conversion
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(66): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Array to string...', 'C:\\wamp64\\www\\p...', 66, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->index()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-05-31 14:22:19 --> Array to string conversion
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(66): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Array to string...', 'C:\\wamp64\\www\\p...', 66, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->index()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-05-31 14:22:45 --> Undefined index: id
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(66): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 66, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->index()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-05-31 14:24:06 --> Column 'id' in field list is ambiguous
#0 C:\wamp64\www\proyectoLibreria\system\Database\MySQLi\Connection.php(329): mysqli->query('SELECT `id_book...')
#1 C:\wamp64\www\proyectoLibreria\system\Database\BaseConnection.php(709): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `id_book...')
#2 C:\wamp64\www\proyectoLibreria\system\Database\BaseConnection.php(637): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `id_book...')
#3 C:\wamp64\www\proyectoLibreria\system\Database\BaseBuilder.php(1476): CodeIgniter\Database\BaseConnection->query('SELECT `id_book...', Array, false)
#4 C:\wamp64\www\proyectoLibreria\system\Model.php(377): CodeIgniter\Database\BaseBuilder->get()
#5 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(45): CodeIgniter\Model->find()
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(813): App\Controllers\BookController->__construct()
#7 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(330): CodeIgniter\CodeIgniter->createController()
#8 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2020-05-31 14:24:38 --> Unknown column 'n.id' in 'field list'
#0 C:\wamp64\www\proyectoLibreria\system\Database\MySQLi\Connection.php(329): mysqli->query('SELECT `id_book...')
#1 C:\wamp64\www\proyectoLibreria\system\Database\BaseConnection.php(709): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `id_book...')
#2 C:\wamp64\www\proyectoLibreria\system\Database\BaseConnection.php(637): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `id_book...')
#3 C:\wamp64\www\proyectoLibreria\system\Database\BaseBuilder.php(1476): CodeIgniter\Database\BaseConnection->query('SELECT `id_book...', Array, false)
#4 C:\wamp64\www\proyectoLibreria\system\Model.php(377): CodeIgniter\Database\BaseBuilder->get()
#5 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(45): CodeIgniter\Model->find()
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(813): App\Controllers\BookController->__construct()
#7 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(330): CodeIgniter\CodeIgniter->createController()
#8 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2020-05-31 14:24:53 --> Column 'id' in field list is ambiguous
#0 C:\wamp64\www\proyectoLibreria\system\Database\MySQLi\Connection.php(329): mysqli->query('SELECT `id_book...')
#1 C:\wamp64\www\proyectoLibreria\system\Database\BaseConnection.php(709): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `id_book...')
#2 C:\wamp64\www\proyectoLibreria\system\Database\BaseConnection.php(637): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `id_book...')
#3 C:\wamp64\www\proyectoLibreria\system\Database\BaseBuilder.php(1476): CodeIgniter\Database\BaseConnection->query('SELECT `id_book...', Array, false)
#4 C:\wamp64\www\proyectoLibreria\system\Model.php(377): CodeIgniter\Database\BaseBuilder->get()
#5 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(50): CodeIgniter\Model->find()
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(813): App\Controllers\BookController->__construct()
#7 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(330): CodeIgniter\CodeIgniter->createController()
#8 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2020-05-31 14:25:41 --> Array to string conversion
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(69): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Array to string...', 'C:\\wamp64\\www\\p...', 69, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->index()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-05-31 14:28:17 --> Undefined variable: books
#0 C:\wamp64\www\proyectoLibreria\app\Views\pages\browse.php(4): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\wamp64\\www\\p...', 4, Array)
#1 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include('C:\\wamp64\\www\\p...')
#2 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('pages/browse', Array, NULL)
#3 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(76): view('pages/browse', Array)
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->index()
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-05-31 14:28:42 --> Undefined index: id
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(64): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 64, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->index()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-05-31 16:06:01 --> Undefined index: id
#0 C:\wamp64\www\proyectoLibreria\app\Views\pages\browse.php(17): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 17, Array)
#1 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include('C:\\wamp64\\www\\p...')
#2 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('pages/browse', Array, NULL)
#3 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(75): view('pages/browse', Array)
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->index()
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-05-31 16:06:30 --> Undefined index: favorite
#0 C:\wamp64\www\proyectoLibreria\app\Views\pages\browse.php(23): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 23, Array)
#1 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include('C:\\wamp64\\www\\p...')
#2 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('pages/browse', Array, NULL)
#3 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(75): view('pages/browse', Array)
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->index()
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-05-31 16:07:35 --> Undefined index: favorite
#0 C:\wamp64\www\proyectoLibreria\app\Views\pages\browse.php(27): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 27, Array)
#1 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include('C:\\wamp64\\www\\p...')
#2 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('pages/browse', Array, NULL)
#3 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(75): view('pages/browse', Array)
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->index()
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-05-31 16:08:11 --> Undefined index: favorite
#0 C:\wamp64\www\proyectoLibreria\app\Views\pages\browse.php(28): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 28, Array)
#1 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include('C:\\wamp64\\www\\p...')
#2 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('pages/browse', Array, NULL)
#3 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(75): view('pages/browse', Array)
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->index()
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-05-31 16:08:55 --> Undefined index: favorite
#0 C:\wamp64\www\proyectoLibreria\app\Views\pages\browse.php(28): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 28, Array)
#1 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include('C:\\wamp64\\www\\p...')
#2 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('pages/browse', Array, NULL)
#3 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(75): view('pages/browse', Array)
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->index()
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-05-31 16:27:16 --> Class 'App\Controllers\NowreadingModel' not found
#0 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(813): App\Controllers\HistoryController->__construct()
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(330): CodeIgniter\CodeIgniter->createController()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-05-31 16:27:42 --> Undefined property: App\Controllers\HistoryController::$books
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\HistoryController.php(48): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\wamp64\\www\\p...', 48, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(813): App\Controllers\HistoryController->__construct()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(330): CodeIgniter\CodeIgniter->createController()
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-05-31 16:28:37 --> Invalid argument supplied for foreach()
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\HistoryController.php(49): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Invalid argumen...', 'C:\\wamp64\\www\\p...', 49, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(813): App\Controllers\HistoryController->__construct()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(330): CodeIgniter\CodeIgniter->createController()
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-05-31 16:30:26 --> Invalid argument supplied for foreach()
#0 C:\wamp64\www\proyectoLibreria\app\Views\pages\browse.php(4): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Invalid argumen...', 'C:\\wamp64\\www\\p...', 4, Array)
#1 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include('C:\\wamp64\\www\\p...')
#2 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('pages/browse', Array, NULL)
#3 C:\wamp64\www\proyectoLibreria\app\Controllers\HistoryController.php(63): view('pages/browse', Array)
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\HistoryController->history()
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\HistoryController))
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-05-31 16:31:34 --> Invalid argument supplied for foreach()
#0 C:\wamp64\www\proyectoLibreria\app\Views\pages\browse.php(4): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Invalid argumen...', 'C:\\wamp64\\www\\p...', 4, Array)
#1 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include('C:\\wamp64\\www\\p...')
#2 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('pages/browse', Array, NULL)
#3 C:\wamp64\www\proyectoLibreria\app\Controllers\HistoryController.php(64): view('pages/browse', Array)
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\HistoryController->history()
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\HistoryController))
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-05-31 16:37:57 --> Class 'App\Controllers\WishlistModel' not found
#0 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(813): App\Controllers\newReadingController->__construct()
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(330): CodeIgniter\CodeIgniter->createController()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-05-31 16:38:34 --> Class 'App\Controllers\WishlistModel' not found
#0 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(813): App\Controllers\newReadingController->__construct()
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(330): CodeIgniter\CodeIgniter->createController()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-05-31 16:38:53 --> Undefined index: id
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\NewReadingController.php(87): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 87, Array)
#1 C:\wamp64\www\proyectoLibreria\app\Controllers\NewReadingController.php(59): App\Controllers\newReadingController->addlists(Array)
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\newReadingController->nowReading()
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\newReadingController))
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-05-31 16:43:49 --> Undefined index: id
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\NewReadingController.php(28): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 28, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\newReadingController->nowReading()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\newReadingController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-05-31 16:44:17 --> Undefined index: id
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\NewReadingController.php(29): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 29, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\newReadingController->nowReading()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\newReadingController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-05-31 16:44:44 --> Undefined index: id
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\NewReadingController.php(29): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 29, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\newReadingController->nowReading()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\newReadingController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-05-31 17:14:26 --> You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '*
FROM `nowreading`
JOIN `books` ON `books`.`id` = `nowreading`.`id_book`
WHERE ' at line 1
#0 C:\wamp64\www\proyectoLibreria\system\Database\MySQLi\Connection.php(329): mysqli->query('SELECT `nowRead...')
#1 C:\wamp64\www\proyectoLibreria\system\Database\BaseConnection.php(709): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `nowRead...')
#2 C:\wamp64\www\proyectoLibreria\system\Database\BaseConnection.php(637): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `nowRead...')
#3 C:\wamp64\www\proyectoLibreria\system\Database\BaseBuilder.php(1476): CodeIgniter\Database\BaseConnection->query('SELECT `nowRead...', Array, false)
#4 C:\wamp64\www\proyectoLibreria\system\Model.php(377): CodeIgniter\Database\BaseBuilder->get()
#5 C:\wamp64\www\proyectoLibreria\app\Controllers\NewReadingController.php(26): CodeIgniter\Model->find()
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\newReadingController->nowReading()
#7 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\newReadingController))
#8 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2020-05-31 17:15:14 --> You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '*
FROM `nowreading`
JOIN `books` ON `nowreading`.`id_book`  = `books`.`id`
WHERE' at line 1
#0 C:\wamp64\www\proyectoLibreria\system\Database\MySQLi\Connection.php(329): mysqli->query('SELECT `nowRead...')
#1 C:\wamp64\www\proyectoLibreria\system\Database\BaseConnection.php(709): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `nowRead...')
#2 C:\wamp64\www\proyectoLibreria\system\Database\BaseConnection.php(637): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `nowRead...')
#3 C:\wamp64\www\proyectoLibreria\system\Database\BaseBuilder.php(1476): CodeIgniter\Database\BaseConnection->query('SELECT `nowRead...', Array, false)
#4 C:\wamp64\www\proyectoLibreria\system\Model.php(377): CodeIgniter\Database\BaseBuilder->get()
#5 C:\wamp64\www\proyectoLibreria\app\Controllers\NewReadingController.php(26): CodeIgniter\Model->find()
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\newReadingController->nowReading()
#7 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\newReadingController))
#8 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2020-05-31 17:15:25 --> You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '*
FROM `nowreading`
JOIN `books` ON `nowreading`.`id_book`  = `books`.`id`' at line 1
#0 C:\wamp64\www\proyectoLibreria\system\Database\MySQLi\Connection.php(329): mysqli->query('SELECT `nowRead...')
#1 C:\wamp64\www\proyectoLibreria\system\Database\BaseConnection.php(709): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `nowRead...')
#2 C:\wamp64\www\proyectoLibreria\system\Database\BaseConnection.php(637): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `nowRead...')
#3 C:\wamp64\www\proyectoLibreria\system\Database\BaseBuilder.php(1476): CodeIgniter\Database\BaseConnection->query('SELECT `nowRead...', Array, false)
#4 C:\wamp64\www\proyectoLibreria\system\Model.php(377): CodeIgniter\Database\BaseBuilder->get()
#5 C:\wamp64\www\proyectoLibreria\app\Controllers\NewReadingController.php(26): CodeIgniter\Model->find()
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\newReadingController->nowReading()
#7 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\newReadingController))
#8 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2020-05-31 17:24:15 --> You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '*
FROM `nowreading`
JOIN `books` ON `books`.`id` = `nowreading`.`id_book`
WHERE ' at line 1
#0 C:\wamp64\www\proyectoLibreria\system\Database\MySQLi\Connection.php(329): mysqli->query('SELECT `nowread...')
#1 C:\wamp64\www\proyectoLibreria\system\Database\BaseConnection.php(709): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `nowread...')
#2 C:\wamp64\www\proyectoLibreria\system\Database\BaseConnection.php(637): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `nowread...')
#3 C:\wamp64\www\proyectoLibreria\system\Database\BaseBuilder.php(1476): CodeIgniter\Database\BaseConnection->query('SELECT `nowread...', Array, false)
#4 C:\wamp64\www\proyectoLibreria\system\Model.php(377): CodeIgniter\Database\BaseBuilder->get()
#5 C:\wamp64\www\proyectoLibreria\app\Controllers\NewReadingController.php(26): CodeIgniter\Model->find()
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\newReadingController->nowReading()
#7 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\newReadingController))
#8 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2020-05-31 17:26:26 --> Undefined index: id
#0 C:\wamp64\www\proyectoLibreria\app\Views\pages\browse.php(8): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 8, Array)
#1 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include('C:\\wamp64\\www\\p...')
#2 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('pages/browse', Array, NULL)
#3 C:\wamp64\www\proyectoLibreria\app\Controllers\NewReadingController.php(28): view('pages/browse', Array)
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\newReadingController->nowReading()
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\newReadingController))
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-05-31 17:26:42 --> Undefined index: rate
#0 C:\wamp64\www\proyectoLibreria\app\Views\pages\browse.php(46): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 46, Array)
#1 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include('C:\\wamp64\\www\\p...')
#2 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('pages/browse', Array, NULL)
#3 C:\wamp64\www\proyectoLibreria\app\Controllers\NewReadingController.php(28): view('pages/browse', Array)
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\newReadingController->nowReading()
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\newReadingController))
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-05-31 17:28:10 --> Column 'id_book' cannot be null
#0 C:\wamp64\www\proyectoLibreria\system\Database\MySQLi\Connection.php(329): mysqli->query('INSERT INTO `no...')
#1 C:\wamp64\www\proyectoLibreria\system\Database\BaseConnection.php(709): CodeIgniter\Database\MySQLi\Connection->execute('INSERT INTO `no...')
#2 C:\wamp64\www\proyectoLibreria\system\Database\BaseConnection.php(637): CodeIgniter\Database\BaseConnection->simpleQuery('INSERT INTO `no...')
#3 C:\wamp64\www\proyectoLibreria\system\Database\BaseBuilder.php(1835): CodeIgniter\Database\BaseConnection->query('INSERT INTO `no...', Array, false)
#4 C:\wamp64\www\proyectoLibreria\system\Model.php(715): CodeIgniter\Database\BaseBuilder->insert()
#5 C:\wamp64\www\proyectoLibreria\app\Controllers\NewReadingController.php(40): CodeIgniter\Model->insert(Array)
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\newReadingController->addToNowReading()
#7 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\newReadingController))
#8 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2020-05-31 17:29:25 --> Column 'id_book' cannot be null
#0 C:\wamp64\www\proyectoLibreria\system\Database\MySQLi\Connection.php(329): mysqli->query('INSERT INTO `no...')
#1 C:\wamp64\www\proyectoLibreria\system\Database\BaseConnection.php(709): CodeIgniter\Database\MySQLi\Connection->execute('INSERT INTO `no...')
#2 C:\wamp64\www\proyectoLibreria\system\Database\BaseConnection.php(637): CodeIgniter\Database\BaseConnection->simpleQuery('INSERT INTO `no...')
#3 C:\wamp64\www\proyectoLibreria\system\Database\BaseBuilder.php(1835): CodeIgniter\Database\BaseConnection->query('INSERT INTO `no...', Array, false)
#4 C:\wamp64\www\proyectoLibreria\system\Model.php(715): CodeIgniter\Database\BaseBuilder->insert()
#5 C:\wamp64\www\proyectoLibreria\app\Controllers\NewReadingController.php(40): CodeIgniter\Model->insert(Array)
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\newReadingController->addToNowReading()
#7 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\newReadingController))
#8 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2020-05-31 17:49:05 --> Undefined variable: uri
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\FavouriteController.php(62): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\wamp64\\www\\p...', 62, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\FavouriteController->deleteToFavourite()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\FavouriteController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-05-31 17:49:29 --> Undefined variable: uri
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\FavouriteController.php(63): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\wamp64\\www\\p...', 63, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\FavouriteController->deleteToFavourite()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\FavouriteController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-05-31 17:50:25 --> Undefined variable: uri
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\WishListController.php(41): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\wamp64\\www\\p...', 41, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\WishListController->addToWishlist()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\WishListController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-05-31 17:56:22 --> Undefined variable: uri
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\FavouriteController.php(57): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\wamp64\\www\\p...', 57, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\FavouriteController->deleteToFavourite()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\FavouriteController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-05-31 18:09:28 --> Invalid argument supplied for foreach()
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(98): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Invalid argumen...', 'C:\\wamp64\\www\\p...', 98, Array)
#1 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(115): App\Controllers\BookController->addlists(Array)
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->mostRecent()
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-05-31 18:10:56 --> Undefined variable: book
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(115): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\wamp64\\www\\p...', 115, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->mostRecent()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-05-31 18:13:58 --> Invalid argument supplied for foreach()
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(97): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Invalid argumen...', 'C:\\wamp64\\www\\p...', 97, Array)
#1 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(115): App\Controllers\BookController->addlists(Array)
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->mostRecent()
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-05-31 18:14:20 --> Invalid argument supplied for foreach()
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(97): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Invalid argumen...', 'C:\\wamp64\\www\\p...', 97, Array)
#1 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(115): App\Controllers\BookController->addlists(Array)
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->mostRecent()
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-05-31 18:15:02 --> Invalid argument supplied for foreach()
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(97): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Invalid argumen...', 'C:\\wamp64\\www\\p...', 97, Array)
#1 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(194): App\Controllers\BookController->addlists(Array)
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->freeBooks()
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-05-31 18:15:22 --> Invalid argument supplied for foreach()
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(97): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Invalid argumen...', 'C:\\wamp64\\www\\p...', 97, Array)
#1 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(158): App\Controllers\BookController->addlists(Array)
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->bestOfList()
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-05-31 18:16:08 --> Invalid argument supplied for foreach()
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(97): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Invalid argumen...', 'C:\\wamp64\\www\\p...', 97, Array)
#1 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(184): App\Controllers\BookController->addlists(Array)
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->nonFiction()
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-05-31 18:17:48 --> Invalid argument supplied for foreach()
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(97): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Invalid argumen...', 'C:\\wamp64\\www\\p...', 97, Array)
#1 C:\wamp64\www\proyectoLibreria\app\Controllers\BookController.php(215): App\Controllers\BookController->addlists(Array)
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\BookController->searchBooks()
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\BookController))
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-05-31 19:00:17 --> Invalid file: page/userform.php
#0 C:\wamp64\www\proyectoLibreria\system\View\View.php(223): CodeIgniter\Exceptions\FrameworkException::forInvalidFile('page/userform.p...')
#1 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('page/userform', Array, NULL)
#2 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(85): view('page/userform')
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->show()
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-05-31 19:01:17 --> Invalid file: page/userform.php
#0 C:\wamp64\www\proyectoLibreria\system\View\View.php(223): CodeIgniter\Exceptions\FrameworkException::forInvalidFile('page/userform.p...')
#1 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('page/userform', Array, NULL)
#2 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(85): view('page/userform', Array)
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->show()
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-05-31 19:01:19 --> Invalid file: page/userform.php
#0 C:\wamp64\www\proyectoLibreria\system\View\View.php(223): CodeIgniter\Exceptions\FrameworkException::forInvalidFile('page/userform.p...')
#1 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('page/userform', Array, NULL)
#2 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(85): view('page/userform', Array)
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->show()
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-05-31 19:02:30 --> Invalid file: page/userform.php
#0 C:\wamp64\www\proyectoLibreria\system\View\View.php(223): CodeIgniter\Exceptions\FrameworkException::forInvalidFile('page/userform.p...')
#1 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('page/userform', Array, NULL)
#2 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(85): view('page/userform', Array)
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->show()
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-05-31 19:02:51 --> Invalid file: page/fuser.php
#0 C:\wamp64\www\proyectoLibreria\system\View\View.php(223): CodeIgniter\Exceptions\FrameworkException::forInvalidFile('page/fuser.php')
#1 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('page/fuser', Array, NULL)
#2 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(85): view('page/fuser', Array)
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->show()
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-05-31 19:03:54 --> Invalid file: page/fuser.php
#0 C:\wamp64\www\proyectoLibreria\system\View\View.php(223): CodeIgniter\Exceptions\FrameworkException::forInvalidFile('page/fuser.php')
#1 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('page/fuser', Array, NULL)
#2 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(85): view('page/fuser', Array)
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->show()
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-05-31 19:04:33 --> Invalid argument supplied for foreach()
#0 C:\wamp64\www\proyectoLibreria\app\Views\pages\userform.php(30): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Invalid argumen...', 'C:\\wamp64\\www\\p...', 30, Array)
#1 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include('C:\\wamp64\\www\\p...')
#2 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('pages/userform', Array, NULL)
#3 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(85): view('pages/userform', Array)
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->show()
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-05-31 19:05:42 --> Invalid argument supplied for foreach()
#0 C:\wamp64\www\proyectoLibreria\app\Views\pages\userform.php(30): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Invalid argumen...', 'C:\\wamp64\\www\\p...', 30, Array)
#1 C:\wamp64\www\proyectoLibreria\system\View\View.php(235): include('C:\\wamp64\\www\\p...')
#2 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('pages/userform', Array, NULL)
#3 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(86): view('pages/userform', Array)
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->show()
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-05-31 19:33:58 --> syntax error, unexpected 'echo' (T_ECHO)
#0 C:\wamp64\www\proyectoLibreria\system\Common.php(175): CodeIgniter\View\View->render('pages/userform', Array, NULL)
#1 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(88): view('pages/userform', Array)
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->show()
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-05-31 19:47:14 --> Undefined variable: request
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(93): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\wamp64\\www\\p...', 93, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->add()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-05-31 19:48:16 --> Undefined index: foto
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(118): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 118, Array)
#1 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(97): App\Controllers\UserController->subirArchivo()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->add()
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-05-31 19:49:12 --> Undefined index: foto
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(119): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 119, Array)
#1 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(97): App\Controllers\UserController->subirArchivo()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->add()
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-05-31 19:51:56 --> move_uploaded_file(http://localhost/public/src/img/1030343.jpg): failed to open stream: HTTP wrapper does not support writeable connections
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'move_uploaded_f...', 'C:\\wamp64\\www\\p...', 119, Array)
#1 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(119): move_uploaded_file('C:\\wamp64\\tmp\\p...', 'http://localhos...')
#2 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(97): App\Controllers\UserController->subirArchivo()
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->add()
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-05-31 19:53:35 --> Undefined index: foto
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(118): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 118, Array)
#1 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(97): App\Controllers\UserController->subirArchivo()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->add()
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-05-31 19:53:48 --> move_uploaded_file(http://localhost/proyectolibreria/public/src/img/999628.jpg): failed to open stream: HTTP wrapper does not support writeable connections
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'move_uploaded_f...', 'C:\\wamp64\\www\\p...', 119, Array)
#1 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(119): move_uploaded_file('C:\\wamp64\\tmp\\p...', 'http://localhos...')
#2 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(97): App\Controllers\UserController->subirArchivo()
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->add()
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-05-31 19:55:05 --> move_uploaded_file(C:/wamp64/www/public/src/img/999628.jpg): failed to open stream: No such file or directory
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'move_uploaded_f...', 'C:\\wamp64\\www\\p...', 119, Array)
#1 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(119): move_uploaded_file('C:\\wamp64\\tmp\\p...', 'C:/wamp64/www/p...')
#2 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(97): App\Controllers\UserController->subirArchivo()
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->add()
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#5 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-05-31 19:57:16 --> Undefined index: foto
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(118): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 118, Array)
#1 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(97): App\Controllers\UserController->subirArchivo()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->add()
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-05-31 19:57:30 --> Column 'tipo' cannot be null
#0 C:\wamp64\www\proyectoLibreria\system\Database\MySQLi\Connection.php(329): mysqli->query('INSERT INTO `us...')
#1 C:\wamp64\www\proyectoLibreria\system\Database\BaseConnection.php(709): CodeIgniter\Database\MySQLi\Connection->execute('INSERT INTO `us...')
#2 C:\wamp64\www\proyectoLibreria\system\Database\BaseConnection.php(637): CodeIgniter\Database\BaseConnection->simpleQuery('INSERT INTO `us...')
#3 C:\wamp64\www\proyectoLibreria\system\Database\BaseBuilder.php(1835): CodeIgniter\Database\BaseConnection->query('INSERT INTO `us...', Array, false)
#4 C:\wamp64\www\proyectoLibreria\system\Model.php(715): CodeIgniter\Database\BaseBuilder->insert()
#5 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(101): CodeIgniter\Model->insert(Array)
#6 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->add()
#7 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#8 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2020-05-31 19:58:01 --> Undefined property: App\Controllers\UserController::$AllUsers
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(104): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\wamp64\\www\\p...', 104, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->add()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-05-31 19:58:59 --> Undefined index: foto
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(118): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 118, Array)
#1 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(97): App\Controllers\UserController->subirArchivo()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->add()
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-05-31 19:59:23 --> Undefined variable: userModel
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(102): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\wamp64\\www\\p...', 102, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->add()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-05-31 20:04:38 --> Undefined index: foto
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(115): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 115, Array)
#1 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(97): App\Controllers\UserController->subirArchivo()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->add()
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-05-31 20:15:13 --> Undefined index: foto
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(114): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 114, Array)
#1 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(96): App\Controllers\UserController->subirArchivo()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->add()
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#4 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-05-31 20:19:33 --> Undefined index: tipo
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(28): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 28, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->index()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-05-31 20:20:29 --> Undefined property: App\Controllers\UserController::$user
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(28): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\wamp64\\www\\p...', 28, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->index()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-05-31 20:21:59 --> Call to undefined function App\Controllers\int()
#0 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->index()
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-05-31 20:22:18 --> Undefined index: tipo
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(28): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 28, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->index()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-05-31 20:22:38 --> Undefined index: tipo
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(28): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 28, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->index()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-05-31 20:22:49 --> Undefined index: tipo
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(29): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 29, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->index()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-05-31 20:25:23 --> Undefined index: users
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(85): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 85, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->show()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-05-31 20:26:56 --> Undefined index: users
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(86): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 86, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->show()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-05-31 20:27:49 --> Undefined index: users
#0 C:\wamp64\www\proyectoLibreria\app\Controllers\UserController.php(28): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\wamp64\\www\\p...', 28, Array)
#1 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(838): App\Controllers\UserController->index()
#2 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserController))
#3 C:\wamp64\www\proyectoLibreria\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\wamp64\www\proyectoLibreria\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
