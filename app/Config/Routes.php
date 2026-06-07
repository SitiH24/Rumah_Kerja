<?php

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

// HOME
$routes->get('/', 'Home::index');

// AUTH
$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::prosesLogin');
$routes->get('/register', 'Auth::register');
$routes->post('/register', 'Auth::prosesRegister');
$routes->get('/logout', 'Auth::logout');

// BERANDA
$routes->get('/user', 'Beranda::user'); // halaman user
$routes->get('/admin', 'Beranda::admin'); // halaman admin

// FITUR
$routes->get('/cari', 'Pencarian::cari');
$routes->get('/pesanan', 'Order::pesanan');
$routes->get('/profil-pekerja/(:num)', 'ProfilPekerja::detail/$1');