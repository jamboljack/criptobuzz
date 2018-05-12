<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller']                        = 'home';
$route['menu/(:any)']                               = "menu/post/$1";
$route['info/(:any)']                               = "info/post/$1";
$route['category/(:any)']                           = "category/index/$1"; // Main Category
$route['category/(:any)/page']                      = "category/index/$1"; // Main Category
$route['category/(:any)/page/(:num)']               = "category/index/$1/$2"; // Main Category
$route['category/(:any)/(:any)']                    = "category/subcategory/$2"; // Category Level 1
$route['category/(:any)/(:any)/page']               = "category/subcategory/$2"; // Category Level 1
$route['category/(:any)/(:any)/page/(:num)']        = "category/subcategory/$2/$3"; // Category Level 1
$route['category/(:any)/(:any)/(:any)']             = "category/tricategory/$3"; // Category Level 2
$route['category/(:any)/(:any)/(:any)/page']        = "category/tricategory/$3"; // Category Level 2
$route['category/(:any)/(:any)/(:any)/page/(:num)'] = "category/tricategory/$3/$4"; // Category Level 2
$route['article/post/(:any)']                       = "article/detail/$1";
$route['tags/(:any)']                               = "tags/category/$1"; // Tags
$route['404_override']                              = 'my_error';
$route['ico-calendar']                              = 'ico';
$route['translate_uri_dashes']                      = false;
