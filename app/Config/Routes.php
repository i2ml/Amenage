<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->setAutoRoute(false);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('aideTechniques/view/(:segment)', 'AideTechnique::view/$1');
$routes->get('cibler-mon-besoin', 'Question::index');
$routes->get('question/(:segment)', 'Question::view/$1');
$routes->get('aideTechniques/(:segment)', 'AideTechnique::index');
$routes->get('aideTechniques/categorie/(:segment)', 'AideTechnique::displayByCategorie/$1');
$routes->get('aideTechniques/zone/(:segment)', 'AideTechnique::displayByZone/$1');
$routes->get('aideTechniques/group/(:segment)', 'AideTechnique::displayByGroup/$1');
$routes->get('aideTechniques/search/(:segment)', 'AideTechnique::search/$1');
$routes->get('aideTechniques', 'AideTechnique::index');
$routes->match(['get', 'post'], 'filter', 'AideTechnique::filter');
$routes->match(['get', 'post'], 'aideTechniques/categorie/filter', 'AideTechnique::filter');
$routes->match(['get', 'post'], 'aideTechniques/filter', 'AideTechnique::filter');
$routes->match(['get', 'post'], 'aideTechniques/group/filter', 'AideTechnique::filter');
$routes->match(['get', 'post'], 'aideTechniques/zone/filter', 'AideTechnique::filter');
$routes->match(['get', 'post'], 'aideTechniques/search/filter', 'AideTechnique::filter');
$routes->get('categories', 'Categorie::index');
$routes->get('zones', 'Zone::index');
$routes->get('(:any)', 'Pages::view/$1');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
