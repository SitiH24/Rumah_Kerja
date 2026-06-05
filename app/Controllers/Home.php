<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('awalan');
    }

    public function tentangKami()
    {
        return view('tentang_kami');
    }
}
