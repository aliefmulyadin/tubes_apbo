<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// routes home
$routes->get('/', 'Home\Home::index');

// routes admin
$routes->get('/admin', 'Admin\Admin::index');

// routes login admin
$routes->get('/admin/adminlogin', 'Admin\AdminLogin::index');
$routes->get('/admin/adminlogin/login', 'Admin\AdminLogin::login');
$routes->get('/admin/logout', 'Admin\AdminLogin::logout');

// routes mekanik admin
$routes->get('/admin/mekanik', 'Admin\Mekanik::index');
$routes->delete('/admin/mekanik/(:num)', 'Admin\Mekanik::delete/$1');
$routes->get('/admin/mekanik/create', 'Admin\Mekanik::create');
$routes->get('/admin/mekanik/edit/(:num)', 'Admin\Mekanik::edit/$1');
$routes->get('/admin/mekanik/update/(:num)', 'Admin\Mekanik::update/$1');
// $routes->get('/admin/mekanik/(:alpha)', 'Admin\Mekanik::$1');
$routes->get('/admin/mekanik/(:any)', 'Admin\Mekanik::detail/$1');

// routes customer admin
$routes->get('/admin/customer', 'Admin\AdminCustomer::index');
$routes->delete('/admin/customer/(:num)', 'Admin\AdminCustomer::delete/$1');


// routes service admin
$routes->get('/admin/service', 'Admin\Service::index');

// routes spareparts admin
$routes->get('/admin/spareparts', 'Admin\AdminSpareparts::index');
$routes->get('/admin/adminspareparts/create', 'Admin\AdminSpareparts::create');
$routes->get('/admin/adminspareparts/edit/(:num)', 'Admin\AdminSpareparts::edit/$1');
$routes->get('/admin/adminspareparts/update/(:num)', 'Admin\AdminSpareparts::update/$1');
$routes->delete('/admin/adminspareparts/(:num)', 'Admin\AdminSpareparts::delete/$1');

// routes transaksi admin
$routes->get('/admin/admintransaksi', 'Admin\AdminTransaksi::index');
$routes->get('/admin/admintransaksi/selesai/(:num)', 'Admin\AdminTransaksi::selesai/$1');
$routes->get('/admin/admintransaksi/detail/(:any)', 'Admin\AdminTransaksi::detail/$1');

$routes->get('/admin/admintselesai/detail/(:any)', 'Admin\AdminTselesai::detail/$1');
$routes->get('/admin/admintselesai/cetakbukti/(:any)', 'Admin\AdminTselesai::cetakbukti/$1');

// routes login customer
$routes->get('/customer/customerlogin', 'Customer\CustomerLogin::index');
$routes->get('/customer/customerlogin/login', 'Customer\CustomerLogin::login');
$routes->get('/customer/logout', 'Customer\CustomerLogin::logout');

// routes customer
$routes->get('/customer', 'Customer\Customer::index');

// routes register customer
$routes->get('/customer/registercustomer', 'Customer\RegisterCustomer::index');
$routes->get('/customer/registercustomer/register', 'Customer\RegisterCustomer::register');

// routes order customer
$routes->get('/customer/customerorder', 'Customer\CustomerOrder::index');
$routes->get('/customer/customerorder/save', 'Customer\CustomerOrder::save');
$routes->get('/customer/customerorder/ospareparts', 'Customer\CustomerOrder::ospareparts');

// routes customer keranjang
$routes->get('/customer/customerkeranjang', 'Customer\CustomerKeranjang::index');
$routes->get('/customer/customerkeranjang/deleteitem/(:any)', 'Customer\CustomerKeranjang::deleteitem/$1');







/*


Placeholders are simply strings that represent a Regular Expression pattern. During the routing process, these placeholders are replaced with the value of the Regular Expression. They are primarily used for readability.

The following placeholders are available for you to use in your routes:

(:any)	    = will match all characters from that point to the end of the URI. This may include multiple URI segments.
(:segment)  = will match any character except for a forward slash (/) restricting the result to a single segment.
(:num)	    = will match any integer.
(:alpha)	= will match any string of alphabetic characters
(:alphanum)	= will match any string of alphabetic characters or integers, or any combination of the two.
(:hash)	    = is the same as (:segment), but can be used to easily see which routes use hashed ids (see the Model docs).

*/




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
