<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

$routes->get('/', 'Home::index');
$routes->get('/tentang', 'Home::tentang');

$routes->get('/login', 'Login::index');
$routes->post('/login', 'Login::auth');
$routes->get('/logout', 'Login::logout');

$routes->get('/kategori', 'KategoriJasa::index');
$routes->get('/kategori/(:num)', 'KategoriJasa::detail/$1');

$routes->get('/pekerja', 'ProfilPekerja::index');
$routes->get('/pekerja/(:num)', 'ProfilPekerja::detail/$1');

$routes->get('/pekerja/profil', 'ProfilPekerja::profil');
$routes->post('/pekerja/profil/update', 'ProfilPekerja::update');

$routes->get('/cari-pekerja', 'ProfilPekerja::cari');

$routes->get('/pesanan', 'PemesananJasa::index');

$routes->get('/pesan/(:num)', 'PemesananJasa::create/$1');
$routes->post('/pesanan/store', 'PemesananJasa::store');

$routes->get('/pesanan/detail/(:num)', 'PemesananJasa::detail/$1');

$routes->get('/pesanan/batal/(:num)', 'PemesananJasa::batal/$1');

$routes->get('/pesanan-masuk', 'PemesananJasa::pesananMasuk');

$routes->get('/pesanan/terima/(:num)', 'PemesananJasa::terima/$1');
$routes->get('/pesanan/tolak/(:num)', 'PemesananJasa::tolak/$1');
$routes->get('/pesanan/selesai/(:num)', 'PemesananJasa::selesai/$1');

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