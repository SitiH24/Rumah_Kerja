<?php

namespace App\Controllers;

use App\Models\UlasanModel;

class Ulasan extends BaseController
{
    protected $ulasanModel;

    public function __construct()
    {
        $this->ulasanModel = new UlasanModel();
    }

    public function index()
    {
        $data['ulasan'] = $this->ulasanModel->findAll();

        return view('ulasan/index', $data);
    }

    public function store()
    {
        $this->ulasanModel->save([
            'pemesanan_id' => $this->request->getPost('pemesanan_id'),
            'rating'       => $this->request->getPost('rating'),
            'komentar'     => $this->request->getPost('komentar')
        ]);

        return redirect()->to('/ulasan');
    }
}