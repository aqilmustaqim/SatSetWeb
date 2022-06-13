<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Formulir extends Migration
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
        'nama'       => [
            'type'           => 'VARCHAR',
            'constraint'     => '50'
        ],
        'email' => [
            'type'           => 'VARCHAR',
            'constraint'     => '128'
        ],
        'nomor_wa' => [
            'type'           => 'VARCHAR',
            'constraint'     => '20'
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
        ]
    ]);
    $this->forge->addKey('id', TRUE);
    $this->forge->createTable('formulir');
    }

    public function down()
    {
        $this->forge->dropTable('formulir');
    }
}
