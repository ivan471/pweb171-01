<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['home'] = 'home';
$route['pelangi'] = 'home/pelangi';
$route['kereta'] = 'home/kereta';
$route['cicak'] = 'home/cicak';
$route['kebun'] = 'home/kebun';
$route['balon'] = 'home/balon';


$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
