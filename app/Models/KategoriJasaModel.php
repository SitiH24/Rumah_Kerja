<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriJasaModel extends Model
{
    protected $table      = 'kategori_jasa';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $protectFields = true;

    protected $allowedFields = [
        'nama_kategori'
    ];

    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}