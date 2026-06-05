<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $data['users'] = $this->userModel->findAll();

        return view('user/index', $data);
    }

    public function create()
    {
        return view('user/create');
    }

    public function store()
    {
        $this->userModel->save([
            'nama'     => $this->request->getPost('nama'),
            'email'    => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'no_hp'    => $this->request->getPost('no_hp'),
            'role'     => $this->request->getPost('role')
        ]);

        return redirect()->to('/user');
    }

    public function edit($id)
    {
        $data['user'] = $this->userModel->find($id);

        return view('user/edit', $data);
    }

    public function update($id)
    {
        $this->userModel->update($id, [
            'nama'  => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'no_hp' => $this->request->getPost('no_hp'),
            'role'  => $this->request->getPost('role')
        ]);

        return redirect()->to('/user');
    }

    public function delete($id)
    {
        $this->userModel->delete($id);

        return redirect()->to('/user');
    }
}
