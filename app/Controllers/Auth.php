<?php

namespace App\Controllers;

use App\Models\UserModel;

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
        $userModel = new UserModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $userModel->where('email', $email)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'Email tidak ditemukan');
        }

        if (!password_verify($password, $user['password'])) {
            return redirect()->back()->with('error', 'Password salah');
        }

        session()->set([
            'user_id'    => $user['id'],
            'nama'       => $user['nama'],
            'email'      => $user['email'],
            'role'       => $user['role'],
            'isLoggedIn' => true
        ]);

        return redirect()->to($user['role'] === 'admin' ? '/admin' : '/user');
    }

    public function prosesRegister()
    {
        $userModel = new UserModel();

        $data = [
            'nama'     => $this->request->getPost('nama'),
            'email'    => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role'     => 'user'
        ];

        $userModel->insert($data);

        // login otomatis setelah register
        $user = $userModel->where('email', $data['email'])->first();
        session()->set([
            'user_id'    => $user['id'],
            'nama'       => $user['nama'],
            'email'      => $user['email'],
            'role'       => $user['role'],
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