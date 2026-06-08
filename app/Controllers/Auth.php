<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        return view('Auth/login');
    }

    public function register()
    {
        return view('Auth/register');
    }

    public function prosesLogin()
    {
        session()->set([
            'user_id' => 1,
            'nama' => 'User Demo',
            'role' => 'user',
            'isLoggedIn' => true
        ]);

        return redirect()->to('/user');
    }

    public function prosesRegister()
    {
        session()->set([
            'user_id' => 1,
            'nama' => $this->request->getPost('nama'),
            'role' => 'user',
            'isLoggedIn' => true
        ]);

        return redirect()->to('/user');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}