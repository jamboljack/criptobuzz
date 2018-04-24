<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller']            = 'home';
$route['menu/(:any)']                   = "menu/post/$1";
$route['info/(:any)']                   = "info/post/$1";
$route['category/(:any)']               = "category/index/$1"; // Main Category
$route['category/(:any)/(:any)']        = "category/subcategory/$2"; // Category Level 1
$route['category/(:any)/(:any)/(:any)'] = "category/tricategory/$3"; // Category Level 2
$route['article/post/(:any)']           = "article/detail/$1";
$route['404_override']                  = 'my_error';
$route['translate_uri_dashes']          = false;