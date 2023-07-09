<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.


$routes->get('/', 'Home::author');

$routes->get('/login', 'Home::login');
$routes->get('/logout', 'Home::logout'); 
$routes->get('/frontview', 'Home::frontview'); 
$routes->get('/ebookname', 'Home::ebookname'); 
$routes->get('/ebook', 'Home::ebook');

$routes->get('/frontview/listajax', 'Home::listajax');




$routes->get('/author', 'Home::author');

// $routes->post('/author', 'Home::author');
//  $routes->get('/category', 'Home::category');

// $routes->get('/author', 'Home::author');
// $routes->get('/ebook/ebook', 'Home::ebook/ebook');


//author routes
// $routes->post('/aform', 'AuthorController::authorform');

$routes->get('/aform', 'AuthorController::authorform');
$routes->post('/aform', 'AuthorController::addauthor');
$routes->post('/aform/authoradd', 'AuthorController::addauthor');

$routes->post('/addauthor', 'AuthorController::addauthor');

// $routes->get('/addauthor', 'AuthorController::addAuthor');

// $routes->get('/authorlist', 'AuthorController::addauthor');

// $routes->post('/authorStore', 'Home::store');

// $routes->get('/addauthorform', 'AuthorController::addAuthor');



// category
$routes->get('/category', 'CategoryController::categoryShow');
$routes->get('/addcategory', 'CategoryController::addcategory');

$routes->post('/addcategory', 'CategoryController::addcategory');

$routes->get('/edit_category/(:num)', 'CategoryController::editcategory/$1');
$routes->post('/edit_category/update/(:num)', 'CategoryController::updatecategory/$1');



$routes->get('/delete_category/(:num)', 'CategoryController::deletecategory/$1');


$routes->get('/add_sub_category', 'CategoryController::addSubCategory');


$routes->get('/subcategoryview/(:num)', 'CategoryController::subcategoryview/$1');
$routes->post('/subcategoryview', 'SubcategoryController::addSubCategory');
// $routes->get('/ebook/addcategory', 'SubcategoryController::view');

$routes->post('/add_sub_category', 'SubcategoryController::addSubCategory');


// ebooks

$routes->get('/ebook', 'EbookController::ebook');
$routes->get('/ebookform', 'EbookController::ebookform');
$routes->post('/ebookformsubmit', 'EbookController::addebook');
$routes->get('/ebooktable', 'EbookController::ebookformsubmit');

$routes->get('/delete_ebook/(:num)', 'EbookController::deleteebook/$1');

$routes->get('/edit_ebook/(:num)', 'EbookController::editebook/$1');
$routes->post('/edit_ebook/update/(:num)', 'EbookController::updateebook/$1');
$routes->get('/search', 'EbookController::search');
$routes->get('/searchwithajax', 'EbookController::searchwithajax');

//ajax form submit

$routes->post('/editwithajax/(:num)', 'EbookController::editwithajax/$1');
$routes->post('/formsubmitwithajax/(:num)', 'EbookController::formsubmitwithajax/$1');














/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
