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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index', ['filter' => 'noAuth']);

$routes->group('auth', function ($routes) {
	$routes->get('/', 'Auth', ['filter' => 'auth']);
	$routes->post('login', 'Auth::login');
	$routes->get('logout', 'Auth::logout');
});

$routes->group('user', ['filter' => 'noAuth'], function ($routes) {
	$routes->get('/', 'User');
	$routes->get('hapus/(:num)', 'User::destroy/$1');
	$routes->post('/', 'User::store');
	$routes->post('ubah/(:num)', 'User::update/$1');
});

$routes->group('lokasi', ['filter' => 'noAuth'], function ($routes) {
	$routes->get('/', 'Lokasi');
	$routes->post('/', 'Lokasi::store');
	$routes->get('hapus/(:num)', 'Lokasi::destroy/$1');
	$routes->post('ubah/(:num)', 'Lokasi::update/$1');
});

$routes->group('data', ['filter' => 'noAuth'], function ($routes) {
	$routes->post('store', 'Data::store');
	$routes->post('update/(:num)', 'Data::updated/$1');
	$routes->get('hapus/(:num)', 'Data::destroy/$1');
});

$routes->group('sto', ['filter' => 'noAuth'], function ($routes) {
	$routes->group('odc', function ($routes) {
		$routes->get('lokasi/(:any)/(:any)', 'Sto::odc/$1/$2');
		$routes->get('ubah/(:num)', 'Sto::odcUbah/$1');
	});
	$routes->group('olt', function ($routes) {
		$routes->get('lokasi/(:any)/(:any)', 'Sto::olt/$1/$2');
	});
});

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
