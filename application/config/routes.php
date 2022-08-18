<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*backend routes*/
$route['admin/login'] = 'backend/Auth/login';
$route['admin/logout']="backend/Auth/logout";
$route['admin/index'] = 'backend/Admin/index';
$route['admin/forgot-password'] = 'backend/Auth/forgotpassword';
$route['admin/404']="backend/Auth/error404";

$route['admin/register'] = 'backend/User/register';
$route['admin/users'] = 'backend/User/users';
$route['admin/changepassword'] = 'backend/User/changePassword';
$route['admin/profile'] = 'backend/User/index';

$route['admin/categories'] = 'backend/Category/index';
$route['admin/add/category'] = 'backend/Category/add';
$route['admin/category/(:any)'] = 'backend/Category/edit/$1';
$route['admin/delete/category/(:any)']='backend/Category/delete/$1';

$route['admin/products'] = 'backend/Product/index';
$route['admin/add/product'] = 'backend/Product/add';
$route['admin/product/(:any)'] = 'backend/Product/edit/$1';
$route['admin/delete/product/(:any)']="backend/Product/delete/$1";

$route['admin/clients'] = 'backend/Client/index';
/*backend routes*/


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
