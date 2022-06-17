<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['login'] = 'Auth/index';
$route['logout'] = 'Auth/logout';

// karyawan
$route['tambah_anggota'] = 'karyawan/create';
$route['tambah_jabatan'] = 'jabatan/create';
$route['tambah_shift'] = 'shift/create';
$route['tambah_shift'] = 'shift/create';
$route['tambah_gajiagt'] = 'Gaji_agt/create';
$route['tambah_lokasi'] = 'lokasi/create';
$route['tambah_menu'] = 'menu/create';
$route['tambah_grup'] = 'groups/create';
$route['tambah_user'] = 'auth/create_user';
$route['karyawan/lihat/(:num)'] = 'karyawan/rd/$1';
$route['jabatan/lihat/(:num)'] = 'jabatan/rd/$1';
$route['shift/lihat/(:num)'] = 'shift/rd/$1';
$route['lokasi/lihat/(:num)'] = 'lokasi/rd/$1';
$route['presensi/lihat/(:num)'] = 'presensi/rd/$1';
$route['audit/data'] = 'user_audit_trails/data';

