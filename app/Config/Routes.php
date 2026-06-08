<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

// HOME
$routes->get('/', 'Home::index');
$routes->get('/beranda', 'Beranda::user');

// AUTH
$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::prosesLogin');

$routes->get('/register', 'Auth::register');
$routes->post('/register', 'Auth::prosesRegister');

$routes->get('/logout', 'Auth::logout');

// BERANDA
$routes->get('/user', 'Beranda::user');
$routes->get('/admin', 'Beranda::admin');

// FITUR
$routes->get('/cari', 'Pencarian::cari');
$routes->get('/pesanan', 'Order::pesanan');
$routes->get('/notifikasi', 'Notifikasi::index');
$routes->get('/notifikasi/dibaca/(:num)', 'Notifikasi::tandaiDibaca/$1');

$routes->get('/ulasan', 'Beranda::ulasan');
// TENTANG KAMI
$routes->get('/tentang-kami', 'Beranda::tentangKami');

$routes->get('/logout', 'Auth::logout');