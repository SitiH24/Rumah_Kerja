<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfilPekerjaModel extends Model
{
    protected $table      = 'pekerja';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $protectFields = true;

    protected $allowedFields = [
        'user_id',
        'kategori_id',
        'deskripsi_jasa',
        'harga_mulai',
        'alamat',
        'foto_profil',
        'status_verifikasi'
    ];

    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}