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
|	http://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'pages/home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['en'] = 'pages/home/en';
$route['kh'] = 'pages/home/kh';

$route['en/home'] = 'pages/home/en';
$route['kh/home'] = 'pages/home/kh';

$route['rainbow-system'] = 'pages/rainbowSystem/en';
$route['en/rainbow-system'] = 'pages/rainbowSystem/en';
$route['kh/rainbow-system'] = 'pages/rainbowSystem/kh';

$route['rainbow-cambodia'] = 'pages/rainbowCambodia/en';
$route['en/rainbow-cambodia'] = 'pages/rainbowCambodia/en';
$route['kh/rainbow-cambodia'] = 'pages/rainbowCambodia/kh';

$route['full-time-opportunity'] = 'pages/fullTime/en';
$route['en/full-time-opportunity'] = 'pages/fullTime/en';
$route['kh/full-time-opportunity'] = 'pages/fullTime/kh';

$route['part-time-opportunity'] = 'pages/partTime/en';
$route['en/part-time-opportunity'] = 'pages/partTime/en';
$route['kh/part-time-opportunity'] = 'pages/partTime/kh';

$route['college-university-student'] = 'pages/university/en';
$route['en/college-university-student'] = 'pages/university/en';
$route['kh/college-university-student'] = 'pages/university/kh';

$route['our-product'] = 'pages/product/en';
$route['en/our-product'] = 'pages/product/en';
$route['kh/our-product'] = 'pages/product/kh';

$route['contact'] = 'pages/contact/en';
$route['en/contact'] = 'pages/contact/en';
$route['kh/contact'] = 'pages/contact/kh';

$route['request-demonstration'] = 'pages/demo/en';
$route['en/request-demonstration'] = 'pages/demo/en';
$route['kh/request-demonstration'] = 'pages/demo/kh';

$route['send-mail'] = 'pages/sendMail';