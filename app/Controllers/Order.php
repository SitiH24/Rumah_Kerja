<?php

namespace App\Controllers;

class Order extends BaseController
{
    public function pesanan()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        return view('Order/pesanan');
    }
}