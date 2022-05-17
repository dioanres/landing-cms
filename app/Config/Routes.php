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
$routes->get('/', 'Home::index');
$routes->get('/detailAp/(:num)','CompanyController::getDetailById/$1');

$routes->add('login', 'LoginController::login');
$routes->get('logout', 'LoginController::logout');
$routes->post('proses_login', 'LoginController::prosesLogin');
//$routes->addRedirect('proses_login', 'admin/users');

$routes->group('admin',['filter' => 'auth'], function($routes)
{
	//dashboard
	$routes->add('dashboard', 'DashboardController');

	//users
	$routes->add('users', 'UserController');
	$routes->add('users/add','UserController::addUser');
	$routes->add('users/register','UserController::register');
	$routes->get('users/edit/(:num)','UserController::edit/$1');

	//about us
	$routes->get('aboutUs','AboutUsController');
	$routes->post('aboutUs/update','AboutUsController::update');
	$routes->get('aboutUs/edit/(:num)','AboutUsController::edit/$1');

	//anak perusahaan
	$routes->get('anakPerusahaan','CompanyController');
	$routes->add('anakPerusahaan/add','CompanyController::addAp');
	$routes->post('anakPerusahaan/save','CompanyController::save');
	$routes->post('anakPerusahaan/update','CompanyController::update');
	$routes->get('anakPerusahaan/edit/(:num)','CompanyController::edit/$1');

	//pimpinan
	$routes->get('pimpinan','PimpinanController');
	$routes->add('pimpinan/add','PimpinanController::add');
	$routes->post('pimpinan/save','PimpinanController::save');
	$routes->post('pimpinan/update','PimpinanController::update');
	$routes->get('pimpinan/edit/(:num)','PimpinanController::edit/$1');

	//team
	$routes->get('team','TeamController');
	$routes->add('team/add','TeamController::add');
	$routes->post('team/save','TeamController::save');
	$routes->post('team/update','TeamController::update');
	$routes->get('team/edit/(:num)','TeamController::edit/$1');

	//Visi
	$routes->get('visi','VisiController');
	$routes->add('visi/add','VisiController::add');
	$routes->post('visi/save','VisiController::save');
	$routes->post('visi/update','VisiController::update');
	$routes->get('visi/edit/(:num)','VisiController::edit/$1');

	//Misi
	$routes->get('misi','MisiController');
	$routes->add('misi/add','MisiController::add');
	$routes->post('misi/save','MisiController::save');
	$routes->post('misi/update','MisiController::update');
	$routes->get('misi/edit/(:num)','MisiController::edit/$1');

	//Budaya
	$routes->get('budaya','BudayaController');
	$routes->add('budaya/add','BudayaController::add');
	$routes->post('budaya/save','BudayaController::save');
	$routes->post('budaya/update','BudayaController::update');
	$routes->get('budaya/edit/(:num)','BudayaController::edit/$1');

	//Review
	$routes->get('review','ReviewController');
	$routes->add('review/add','ReviewController::add');
	$routes->post('review/save','ReviewController::save');
	$routes->post('review/update','ReviewController::update');
	$routes->get('review/edit/(:num)','ReviewController::edit/$1');

	//Gallery
	$routes->get('gallery','GalleryController');
	$routes->add('gallery/add','GalleryController::add');
	$routes->post('gallery/save','GalleryController::save');
	$routes->post('gallery/update','GalleryController::update');
	$routes->get('gallery/edit/(:num)','GalleryController::edit/$1');
	$routes->get('gallery/delete/(:num)','GalleryController::delete/$1');

	//Setting
	$routes->get('setting','SettingController');
	$routes->add('setting/add','SettingController::add');
	$routes->post('setting/save','SettingController::save');
	$routes->post('setting/update','SettingController::update');
	$routes->get('setting/edit/(:num)','SettingController::edit/$1');
});

/**
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
