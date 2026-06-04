<?php

namespace App\Controllers;

use App\Models\KategoriJasaModel;

class KategoriJasa extends BaseController
{
    protected $kategoriModel;

    public function __construct()
    {
        $this->kategoriModel = new KategoriJasaModel();
    }

    public function index()
    {
        $data['kategori'] = $this->kategoriModel->findAll();

        return view('kategori/index', $data);
    }

    public function store()
    {
        $this->kategoriModel->save([
            'nama_kategori' => $this->request->getPost('nama_kategori')
        ]);

        return redirect()->to('/kategori-jasa');
    }

    public function delete($id)
    {
        $this->kategoriModel->delete($id);

        return redirect()->to('/kategori-jasa');
    }
}