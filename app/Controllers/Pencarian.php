<?php

namespace App\Controllers;

class Pencarian extends BaseController
{
    public function cari()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        return view('Pencarian/cari');
    }

    public function detail($id)
    {
        $dataPekerja = [
            1 => [
                'nama' => 'Budi',
                'foto' => 'bangunan.jpeg',
                'profesi' => 'Tukang Bangunan',
                'kota' => 'Jakarta Selatan',
                'usia' => 34,
                'pengalaman' => '5+ Tahun',
                'harga' => 'Rp200 rb/hari',
                'rating' => '5.0',
                'ulasan' => '1 ulasan',
                'keahlian' => 'Tukang Bangunan, Renovasi, Plester, Pengecatan',
                'deskripsi' => 'Budi adalah tukang bangunan berpengalaman yang siap membantu renovasi rumah, plester dinding, pengecatan, dan pekerjaan bangunan lainnya.'
            ],
            2 => [
                'nama' => 'Lala',
                'foto' => 'ART.jpeg',
                'profesi' => 'ART Rumah Tangga',
                'kota' => 'Palu',
                'usia' => 29,
                'pengalaman' => '4+ Tahun',
                'harga' => 'Rp150 rb/hari',
                'rating' => '4.8',
                'ulasan' => '3 ulasan',
                'keahlian' => 'Bersih-bersih, Memasak, Mencuci, Merapikan Rumah',
                'deskripsi' => 'Lala adalah ART rumah tangga yang ramah, telaten, dan berpengalaman membantu pekerjaan rumah harian.'
            ],
            3 => [
                'nama' => 'Andi',
                'foto' => 'sopir.jpeg',
                'profesi' => 'Sopir Pribadi',
                'kota' => 'Makassar',
                'usia' => 38,
                'pengalaman' => '10+ Tahun',
                'harga' => 'Rp180 rb/hari',
                'rating' => '4.9',
                'ulasan' => '2 ulasan',
                'keahlian' => 'Sopir Pribadi, Antar Jemput, Luar Kota',
                'deskripsi' => 'Andi adalah sopir pribadi yang sopan, tepat waktu, dan berpengalaman untuk perjalanan harian maupun luar kota.'
            ],
            4 => [
                'nama' => 'Ina',
                'foto' => 'babysitter.jpeg',
                'profesi' => 'Baby Sitter',
                'kota' => 'Bandung',
                'usia' => 27,
                'pengalaman' => '3+ Tahun',
                'harga' => 'Rp170 rb/hari',
                'rating' => '4.7',
                'ulasan' => '4 ulasan',
                'keahlian' => 'Mengasuh Anak, Menemani Anak, Menyiapkan Makan Anak',
                'deskripsi' => 'Ina adalah babysitter berpengalaman yang sabar, ramah, dan terbiasa menjaga anak dengan aman.'
            ],
        ];

        if (!isset($dataPekerja[$id])) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Pekerja tidak ditemukan');
        }

        return view('Pencarian/detail_pekerja', [
            'pekerja' => $dataPekerja[$id]
        ]);
    }
}

