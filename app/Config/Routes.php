<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//Book controller
$routes->get('/', 'BookController::index');
$routes->get('/admin', 'BookController::book');
$routes->get('/buybooks', 'BookController::buybooks');
$routes->get('/browse', 'BookController::index');
$routes->get('/cart', 'BookController::cart');
$routes->get('/allBooks', 'BookController::allBooks');
$routes->get('/mostRecent', 'BookController::mostRecent');
$routes->get('/mostPopular', 'BookController::mostPopular');
$routes->get('/freeBooks', 'BookController::freeBooks');
$routes->post('/searchBooks', 'BookController::searchBooks');
$routes->get('/seeBook', 'BookController::seeBook');
$routes->get('/mostRead', 'BookController::mostRead');
$routes->get('/bestOfList', 'BookController::bestOfList');
$routes->get('/novels', 'BookController::novels');
$routes->get('/nonFiction', 'BookController::nonFiction');

$routes->get('/nowReading', 'NewReadingController::nowReading');
$routes->get('/deleteToNowReading', 'NewReadingController::deleteToNowReading');
$routes->get('/addToNowReading', 'NewReadingController::addToNowReading');

$routes->get('/favourite', 'FavouriteController::favourite');
$routes->get('/addToFavourite', 'FavouriteController::addToFavourite');
$routes->get('/deleteToFavourite', 'FavouriteController::deleteToFavourite');


$routes->get('/wishList', 'WishListController::wishList');
$routes->get('/addToWishlist', 'WishListController::addToWishlist');
$routes->get('/deleteToWishlist', 'WishListController::deleteToWishlist');

$routes->get('/history', 'HistoryController::history');


// User controller
$routes->get('/login', 'UserController::index');
$routes->post('/login', 'UserController::index');
$routes->get('/logout', 'UserController::logout');
$routes->get('/users', 'UserController::show');
$routes->post('/users/add', 'UserController::add');
$routes->post('/users/update', 'UserController::update');
$routes->post('/users/delete', 'UserController::delete');

$routes->get('/books', 'BookController::show');
$routes->post('/books/add', 'BookController::add');
$routes->post('/books/update', 'BookController::update');
$routes->post('/books/delete', 'BookController::delete');

$routes->get('/cart/show', 'CartController::show');
$routes->get('/cart/add', 'CartController::add');
$routes->get('/cart/update', 'CartController::update');
$routes->get('/cart/delete', 'CartController::delete');



/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
