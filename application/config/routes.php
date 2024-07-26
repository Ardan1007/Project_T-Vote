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
$route['default_controller'] = 'Dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Route Auth
$route['pertanyaan'] = 'auth/pertanyaan'; 
$route['register'] = 'auth/register'; 
$route['login'] = 'auth/login'; 
$route['logout'] = 'auth/logout';
$route['login_admin'] = 'auth/login_admin'; 

// Route Pembelian Token
$route['beli-token'] = 'pembelian/beli_token'; 
$route['konfirmasi-pembayaran'] = 'pembelian/konfirmasi_pembayaran'; 

// Route Kandidat
$route['kandidat'] = 'kandidat/index'; 
$route['kandidat/tambah'] = 'kandidat/tambah'; 
$route['kandidat/edit/(:num)'] = 'kandidat/edit/$1'; 
$route['kandidat/hapus/(:num)'] = 'kandidat/hapus/$1'; 

// Route Event Vote
$route['EventVote'] = 'EventVote/index'; 
$route['EventVote/tambah'] = 'EventVote/tambah'; 
$route['EventVote/edit/(:num)'] = 'EventVote/edit/$1'; 
$route['EventVote/hapus/(:num)'] = 'EventVote/hapus/$1'; 

// Route Kandidat Event Vote
// $route['KandidatEventVote'] = 'KandidatEventVote/index'; 
$route['KandidatEventVote/tambah'] = 'KandidatEventVote/tambah'; 
$route['KandidatEventVote/edit/(:num)'] = 'KandidatEventVote/edit/$1'; 
$route['KandidatEventVote/hapus/(:num)'] = 'KandidatEventVote/hapus/$1'; 

// Route Voting
$route['vote'] = 'voting/index'; 
$route['vote/proses'] = 'voting/proses_vote';
$route['vote-end'] = 'voting/selesai';

// Route Admin
$route['admin'] = 'admin/dashboard';
$route['admin/kandidat'] = 'admin/kandidat'; 
$route['admin/pembelian'] = 'admin/pembelian'; 
$route['admin/admin-user'] = 'admin/admin_user';
$route['admin/hasil-voting'] = 'admin/hasil_voting';
$route['admin/validasi_pembayaran/(:num)'] = 'admin/validasi_pembayaran/$1'; 

//route landing page
// $route['landing_page'] = 'landing_controller/index';

// $route['vote'] = 'landing_controller/index';
