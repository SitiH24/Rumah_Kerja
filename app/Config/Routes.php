<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/tentang', 'Home::tentang');

$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::processLogin');

$routes->get('/register', 'Auth::register');
$routes->post('/register', 'Auth::processRegister');

$routes->get('/logout', 'Auth::logout');

$routes->get('/kategori', 'Kategori::index');
$routes->get('/kategori/(:num)', 'Kategori::detail/$1');

$routes->get('/pekerja', 'Pekerja::index');
$routes->get('/pekerja/(:num)', 'Pekerja::detail/$1');

$routes->get('/pekerja/profil', 'Pekerja::profil');
$routes->post('/pekerja/profil/update', 'Pekerja::update');

$routes->get('/cari-pekerja', 'Pekerja::cari');

$routes->get('/pesan/(:num)', 'Pesanan::create/$1');
$routes->post('/pesanan/store', 'Pesanan::store');

$routes->get('/pesanan', 'Pesanan::index');
$routes->get('/pesanan/detail/(:num)', 'Pesanan::detail/$1');

$routes->get('/pesanan/batal/(:num)', 'Pesanan::batal/$1');

$routes->get('/dashboard', 'Dashboard::pelanggan');
$routes->get('/dashboard-pekerja', 'Dashboard::pekerja');
$routes->get('/admin', 'Admin::dashboard');

$routes->get('/pesanan-masuk', 'Pesanan::pesananMasuk');

$routes->get('/pesanan/terima/(:num)', 'Pesanan::terima/$1');
$routes->get('/pesanan/tolak/(:num)', 'Pesanan::tolak/$1');
$routes->get('/pesanan/selesai/(:num)', 'Pesanan::selesai/$1');

$routes->get('/ulasan/create/(:num)', 'Ulasan::create/$1');
$routes->post('/ulasan/store', 'Ulasan::store');

$routes->get('/notifikasi', 'Notifikasi::index');

$routes->group('admin', function($routes){

    $routes->get('/', 'Admin::dashboard');

    $routes->get('users', 'Admin::users');
    $routes->get('pekerja', 'Admin::pekerja');
    $routes->get('kategori', 'Admin::kategori');
    $routes->get('pesanan', 'Admin::pesanan');
    $routes->get('ulasan', 'Admin::ulasan');

});