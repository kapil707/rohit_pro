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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'home';
//$route['add']='usermanage/add';

$route['admin']='admin/admin';
$route['admin/register']='admin/admin/register';
$route['admin/logout']='admin/admin/logout';

$route['about_us']='home/about_us';
$route['contact_us']='home/contact_us';
$route['privacy_policy']='home/privacy_policy';
$route['term_and_condition']='home/term_and_condition';

$route['products/(:any)']='products/index/$1';
$route['product/(:any)']='products/product/$1';

$route['company/(:any)']='company/index/$1';
$route['contact_us/(:any)']='contact_us/index/$1';
$route['media/(:any)']='media/index/$1';$route['project/(:any)']='project/index/$1';$route['product/(:any)']='product/index/$1';$route['features']='features/index';$route['overview']='overview/index';$route['floor_plan']='floor_plan/index';$route['master_plan']='master_plan/index';$route['construction1']='construction1/index';$route['construction2']='construction2/index';
$route['blog']='blog/index/';
$route['career']='career/index/';


$route['android']='android';
$route['home']='home';
$route['login']='login';
$route['user']='user';
$route['cart']='cart';
$route['payu']='payu';
$route['Json_call']='Json_call';
$route['myadndroid/cart']='myadndroid/cart';
$route['(:any)']='page/single/$1';


//$route['admin/manger-manage/add']='admin/admin/manger_manage/add';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
