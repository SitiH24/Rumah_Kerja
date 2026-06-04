<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePekerjaTable extends Migration
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
            'user_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'kategori_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'deskripsi_jasa' => [
                'type' => 'TEXT',
            ],
            'harga_mulai' => [
                'type' => 'DECIMAL',
                'constraint' => '12,2',
            ],
            'alamat' => [
                'type' => 'TEXT',
            ],
            'foto_profil' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'status_verifikasi' => [
                'type' => 'ENUM',
                'constraint' => ['menunggu', 'disetujui', 'ditolak'],
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
        $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('kategori_id', 'kategori_jasa', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('pekerja');
    }

    public function down()
    {
        $this->forge->dropTable('pekerja');
    }
}
