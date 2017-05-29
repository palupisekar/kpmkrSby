<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'welcome';
$route['admin'] = 'logadmin/index';
$route['login'] = 'Login';
$route['loginProc'] = 'Login/loginuser';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
