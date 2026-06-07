<?php

namespace App\Controllers;

class Beranda extends BaseController
{
    public function user()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        return Views('Beranda/user');
    }

    public function admin()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        if (session()->get('role') !== 'admin') {
            return redirect()->to('/user');
        }

        return Views('Beranda/admin');
    }
}