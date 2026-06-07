<?php

namespace App\Controllers;

class Beranda extends BaseController
{
    public function user()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        return view('Beranda/user'); // HARUS pakai view(), bukan Views()
    }

    public function admin()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        if (session()->get('role') !== 'admin') {
            return redirect()->to('/user');
        }

        return view('Beranda/admin'); // HARUS pakai view()
    }
}