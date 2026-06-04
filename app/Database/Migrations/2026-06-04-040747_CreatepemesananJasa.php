<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePemesananTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'pelanggan_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'pekerja_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'alamat_kerja' => [
                'type' => 'TEXT',
            ],
            'deskripsi_pekerjaan' => [
                'type' => 'TEXT',
            ],
            'total_biaya' => [
                'type' => 'DECIMAL',
                'constraint' => '12,2',
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => [
                    'menunggu',
                    'diterima',
                    'dikerjakan',
                    'selesai',
                    'dibatalkan'
                ],
                'default' => 'menunggu',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('pemesanan');
    }

    public function down()
    {
        $this->forge->dropTable('pemesanan');
    }
}