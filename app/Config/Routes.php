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

	$routes->group('sales', function($routes) {
		//banner
		$routes->get('banner','Sales\BannerController');
		$routes->add('banner/add','Sales\BannerController::add');
		$routes->post('banner/save','Sales\BannerController::save');
		$routes->post('banner/update','Sales\BannerController::update');
		$routes->get('banner/edit/(:num)','Sales\BannerController::edit/$1');
		$routes->get('banner/delete/(:num)','Sales\BannerController::delete/$1');

		//prooduct
		$routes->get('product','Sales\ProductController');
		$routes->add('product/add','Sales\ProductController::add');
		$routes->post('product/save','Sales\ProductController::save');
		$routes->post('product/update','Sales\ProductController::update');
		$routes->get('product/edit/(:num)','Sales\ProductController::edit/$1');
		$routes->get('product/delete/(:num)','Sales\ProductController::delete/$1');

		//customer
		$routes->get('customer','Sales\CustomerController');
		$routes->add('customer/add','Sales\CustomerController::add');
		$routes->post('customer/save','Sales\CustomerController::save');
		$routes->post('customer/update','Sales\CustomerController::update');
		$routes->get('customer/edit/(:num)','Sales\CustomerController::edit/$1');
		$routes->get('customer/delete/(:num)','Sales\CustomerController::delete/$1');

		//testimoni
		$routes->get('testimonial','Sales\TestimoniController');
		$routes->add('testimonial/add','Sales\TestimoniController::add');
		$routes->post('testimonial/save','Sales\TestimoniController::save');
		$routes->post('testimonial/update','Sales\TestimoniController::update');
		$routes->get('testimonial/edit/(:num)','Sales\TestimoniController::edit/$1');
		$routes->get('testimonial/delete/(:num)','Sales\TestimoniController::delete/$1');

		$routes->get('profile','Sales\ProfileController');
		$routes->add('profile/add','Sales\ProfileController::add');
		$routes->post('profile/save','Sales\ProfileController::save');
		$routes->post('profile/update','Sales\ProfileController::update');
		$routes->get('profile/edit/(:num)','Sales\ProfileController::edit/$1');
		$routes->get('profile/delete/(:num)','Sales\ProfileController::delete/$1');

		//customer
		$routes->get('notification','Sales\NotificationController');
		$routes->add('notification/add','Sales\NotificationController::add');
		$routes->post('notification/save','Sales\NotificationController::save');
		$routes->post('notification/update','Sales\NotificationController::update');
		$routes->get('notification/edit/(:num)','Sales\NotificationController::edit/$1');
		$routes->get('notification/delete/(:num)','Sales\NotificationController::delete/$1');
	});
	
	

	//users
	$routes->add('users', 'UserController');
	$routes->add('users/add','UserController::addUser');
	$routes->add('users/register','UserController::register');
	$routes->get('users/edit/(:num)','UserController::edit/$1');
	$routes->post('users/update','UserController::update');

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
