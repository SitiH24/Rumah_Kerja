<?php

namespace App\Controllers;

use App\Models\ProfilPekerjaModel;

class ProfilPekerja extends BaseController
{
    protected $pekerjaModel;

    public function __construct()
    {
        $this->pekerjaModel = new ProfilPekerjaModel();
    }

    public function index()
    {
        $data['pekerja'] = $this->pekerjaModel->findAll();

        return view('pekerja/index', $data);
    }

    public function store()
    {
        $this->pekerjaModel->save([
            'user_id'            => $this->request->getPost('user_id'),
            'kategori_id'        => $this->request->getPost('kategori_id'),
            'deskripsi_jasa'     => $this->request->getPost('deskripsi_jasa'),
            'harga_mulai'        => $this->request->getPost('harga_mulai'),
            'alamat'             => $this->request->getPost('alamat'),
            'status_verifikasi'  => 'menunggu'
        ]);

        return redirect()->to('/profil-pekerja');
    }

    public function delete($id)
    {
        $this->pekerjaModel->delete($id);

        return redirect()->to('/profil-pekerja');
    }
}
