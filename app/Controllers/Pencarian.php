<?php

namespace App\Controllers;

class Pencarian extends BaseController
{
    public function cari()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        return view('Pencarian/cari');
    }
}