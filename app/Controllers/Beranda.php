<?php

namespace App\Controllers;

class Beranda extends BaseController
{
    public function user()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        return view('Beranda/user');
    }

    public function admin()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        if (session()->get('role') !== 'admin') {
            return redirect()->to('/user');
        }

        return view('Beranda/admin');
    }

    public function ulasan()
    {
    return view('Beranda/ulasan');
    }

    

    // Method halaman Tentang Kami
    public function tentangKami()
    {
        return view('Beranda/tentangkami'); // pastikan file berada di app/Views/Beranda/tentangkami.php
    }

    public function logout()
{
    // Hapus session
    session()->destroy();

    // Redirect ke halaman logout dengan tampilan
    return view('Beranda/logout');
}
 public function pekerja()
    {
    return view('Beranda/pekerja');
    }
}

   