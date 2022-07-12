<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Daftarpaket extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
            ],
            'namapaket'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '128'
            ],
            'hargapaket' => [
                'type'           => 'VARCHAR',
                'constraint'     => '128'
            ],
            'deskripsi1'       => [
                'type'           => 'TEXT',
                'constraint'     => '225'
            ],
            'deskripsi2'       => [
                'type'           => 'TEXT',
                'constraint'     => '225'
            ],
            'deskripsi3'       => [
                'type'           => 'TEXT',
                'constraint'     => '225'
            ],
            'deskripsi4'       => [
                'type'           => 'TEXT',
                'constraint'     => '225'
            ],
            'deskripsi5'       => [
                'type'           => 'TEXT',
                'constraint'     => '225'
            ],
            'deskripsi6'       => [
                'type'           => 'TEXT',
                'constraint'     => '225'
            ],
            'deskripsi7'       => [
                'type'           => 'TEXT',
                'constraint'     => '225'
            ],
            'deskripsi8'       => [
                'type'           => 'TEXT',
                'constraint'     => '225'
            ],
            'deskripsi9'       => [
                'type'           => 'TEXT',
                'constraint'     => '225'
            ]
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('daftarpaket');
    }

    public function down()
    {
        $this->forge->dropTable('daftarpaket');
    }
}
