<?php

namespace App\Controllers;

use App\Models\NotifikasiModel;

class Notifikasi extends BaseController
{
    protected $notifikasiModel;

    public function __construct()
    {
        $this->notifikasiModel = new NotifikasiModel();
    }

    public function index()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        $data['notifikasi'] = $this->notifikasiModel->findAll();

        return view('notifikasi/index', $data);
    }

    public function tandaiDibaca($id)
    {
        $this->notifikasiModel->update($id, [
            'status_baca' => 'sudah_dibaca'
        ]);

        return redirect()->to('/notifikasi');
    }
}