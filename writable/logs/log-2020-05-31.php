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
