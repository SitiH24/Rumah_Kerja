<?php

namespace App\Controllers;

use App\Models\PemesananJasaModel;

class PemesananJasa extends BaseController
{
    protected $pemesananJasaModel;

    public function __construct()
    {
        $this->pemesananJasaModel = new PemesananJasaModel();
    }

    public function index()
    {
        $data['pemesanan'] = $this->pemesananJasaModel->findAll();

        return view('pemesanan-jasa/index', $data);
    }

    public function store()
    {
        $this->pemesananJasaModel->save([
            'pelanggan_id'         => $this->request->getPost('pelanggan_id'),
            'pekerja_id'           => $this->request->getPost('pekerja_id'),
            'alamat_kerja'         => $this->request->getPost('alamat_kerja'),
            'deskripsi_pekerjaan'  => $this->request->getPost('deskripsi_pekerjaan'),
            'total_biaya'          => $this->request->getPost('total_biaya'),
            'status'               => 'menunggu'
        ]);

        return redirect()->to('/pemesanan-jasa');
    }
}
