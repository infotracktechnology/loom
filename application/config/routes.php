<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'AuthController/index';
$route['404_override'] = '';

$route['production']['GET'] = "ProductionController/index";
$route['production_entry']['GET'] = "ProductionController/production_entry";

$route['loom']['GET'] = 'LoomController/index';           
$route['loom/create']['GET'] = 'LoomController/create';      
$route['loom/store']['POST'] = 'LoomController/store';         
$route['loom/(:num)/edit']['GET'] = 'LoomController/edit/$1'; 
$route['loom/(:num)/update']['POST'] = 'LoomController/update/$1'; 
$route['loom/(:num)/delete']['POST'] = 'LoomController/delete/$1';

$route['material']['GET'] = 'MaterialController/index';           
$route['material/create']['GET'] = 'MaterialController/create';      
$route['material/store']['POST'] = 'MaterialController/store';         
$route['material/(:num)/edit']['GET'] = 'MaterialController/edit/$1'; 
$route['material/(:num)/update']['POST'] = 'MaterialController/update/$1'; 
$route['material/(:num)/delete']['POST'] = 'MaterialController/delete/$1';

$route['product']['GET'] = 'ProductController/index';           
$route['product/create']['GET'] = 'ProductController/create';      
$route['product/store']['POST'] = 'ProductController/store';         
$route['product/(:num)/edit']['GET'] = 'ProductController/edit/$1'; 
$route['product/(:num)/update']['POST'] = 'ProductController/update/$1'; 
$route['product/(:num)/delete']['POST'] = 'ProductController/delete/$1';



//$route['login'] = "AuthController/index";
$route['translate_uri_dashes'] = FALSE;
