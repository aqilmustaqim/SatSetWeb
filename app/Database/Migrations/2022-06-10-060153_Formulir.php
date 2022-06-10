<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Formulir extends Migration
{
    public function up()
    {
        //nama,email,jenis paket,created_at,updated_at

        $this->forge->addField([
            'email' => [
                'type'           => 'VARCHAR',
                'constraint'     => '128'
            ],
            'nama'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '50'
            ],
            'nomor_wa' => [
                'type'           => 'INT',
                'constraint'     => '15'
            ],
            'jenis_paket' => [
                'type'           => 'VARCHAR',
                'constraint'     => '30'
            ],
            'created_at' => [
                'type'           => 'DATETIME',
                'null'             => TRUE
            ],
            'updated_at' => [
                'type'           => 'DATETIME',
                'null'             => TRUE
            ],
        ]);
        $this->forge->addKey('email', TRUE);
        $this->forge->createTable('formulir');
    }

    public function down()
    {
        $this->forge->dropTable('formulir');
    }
}
