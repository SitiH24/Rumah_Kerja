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
$routes->get('/user', 'Beranda::user', ['filter' => 'auth']);
$routes->get('/admin', 'Beranda::admin', ['filter' => 'auth']);

// FITUR
$routes->get('/cari', 'Pencarian::cari', ['filter' => 'auth']);
$routes->get('/pesanan', 'Order::pesanan', ['filter' => 'auth']);
$routes->get('/profil-pekerja/(:num)', 'ProfilPekerja::detail/$1', ['filter' => 'auth']);