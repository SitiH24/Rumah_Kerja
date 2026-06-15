<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Auth extends BaseController
{
    // =========================
    // HALAMAN LOGIN
    // =========================
    public function login()
    {
        return view('Auth/login');
    }

    // =========================
    // HALAMAN REGISTER
    // =========================
    public function register()
    {
        return view('Auth/register');
    }

    // =========================
    // PROSES REGISTER
    // =========================
    public function store()
    {
        $model = new UsersModel();

        // Cek password dan konfirmasi password
        if (
            $this->request->getPost('password') !=
            $this->request->getPost('password_confirm')
        ) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Konfirmasi password tidak cocok');
        }

        // Cek email sudah terdaftar
        $cekEmail = $model
            ->where('email', $this->request->getPost('email'))
            ->first();

        if ($cekEmail) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Email sudah terdaftar');
        }

        // Simpan data ke database
        $model->save([
            'nama'     => $this->request->getPost('nama'),
            'email'    => $this->request->getPost('email'),
            'no_hp'    => $this->request->getPost('no_hp'),
            'password' => password_hash(
                $this->request->getPost('password'),
                PASSWORD_DEFAULT
            ),
            'role'     => $this->request->getPost('role')
        ]);

        return redirect()->to('/login')
            ->with('success', 'Registrasi berhasil, silakan login');
    }

    // =========================
    // PROSES LOGIN
    // =========================
    public function prosesLogin()
    {
        $model = new UsersModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $model
            ->where('email', $email)
            ->first();

        // Email tidak ditemukan
        if (!$user) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Email tidak ditemukan');
        }

        // Password salah
        if (!password_verify($password, $user['password'])) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Password salah');
        }

        // Simpan session
        session()->set([
            'user_id'    => $user['id'],
            'nama'       => $user['nama'],
            'email'      => $user['email'],
            'role'       => $user['role'],
            'isLoggedIn' => true
        ]);

        // Redirect berdasarkan role
        if ($user['role'] == 'pekerja') {
            return redirect()->to('/pekerja');
        }

        return redirect()->to('/user');
    }

    // =========================
    // LOGOUT
    // =========================
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}