<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "dashboard";
$route['404_override'] = '';

$route['cron_punchout'] = 'absen/cron_punchout';
$route['cron_add_jumlah_cuti'] = 'cuti/cron_add_jumlah_cuti';
$route['cron_min_jumlah_cuti'] = 'cuti/cron_min_jumlah_cuti';


/*$route['change-password'] = "account/setting";
$route['profile'] = "account/profile";
$route['login'] = "account/login";
$route['logout'] = "account/logout";
$route['forgot-password'] = "account/forgot_password";
$route['reset-password'] = "account/reset_password";

$route['notfound'] = "home/notfound";
$route['member'] = "home/member";
$route["preference"] = "home/preference";

$route['punch-in'] = "today/punch_in";
$route['punch-out'] = "today/punch_out";
$route['punch-reason'] = "today/punch_reason";
$route['punch-ip'] = "today/punch_ip";*/

/* End of file routes.php */
/* Location: ./application/config/routes.php */