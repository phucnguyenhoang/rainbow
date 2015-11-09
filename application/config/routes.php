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
$route['ca'] = 'pages/home/ca';

$route['en/home'] = 'pages/home/en';
$route['ca/home'] = 'pages/home/ca';

$route['rainbow-system'] = 'pages/rainbowSystem/en';
$route['en/rainbow-system'] = 'pages/rainbowSystem/en';
$route['ca/rainbow-system'] = 'pages/rainbowSystem/ca';

$route['rainbow-cambodia'] = 'pages/rainbowCambodia/en';
$route['en/rainbow-cambodia'] = 'pages/rainbowCambodia/en';
$route['ca/rainbow-cambodia'] = 'pages/rainbowCambodia/ca';

$route['full-time-opportunity'] = 'pages/fullTime/en';
$route['en/full-time-opportunity'] = 'pages/fullTime/en';
$route['ca/full-time-opportunity'] = 'pages/fullTime/ca';

$route['part-time-opportunity'] = 'pages/partTime/en';
$route['en/part-time-opportunity'] = 'pages/partTime/en';
$route['ca/part-time-opportunity'] = 'pages/partTime/ca';

$route['college-university-student'] = 'pages/university/en';
$route['en/college-university-student'] = 'pages/university/en';
$route['ca/college-university-student'] = 'pages/university/ca';

$route['our-product'] = 'pages/product/en';
$route['en/our-product'] = 'pages/product/en';
$route['ca/our-product'] = 'pages/product/ca';

$route['contact'] = 'pages/contact/en';
$route['en/contact'] = 'pages/contact/en';
$route['ca/contact'] = 'pages/contact/ca';

$route['request-demonstration'] = 'pages/demo/en';
$route['en/request-demonstration'] = 'pages/demo/en';
$route['ca/request-demonstration'] = 'pages/demo/ca';

$route['send-mail'] = 'pages/sendMail';