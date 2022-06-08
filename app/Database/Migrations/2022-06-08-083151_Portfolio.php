<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Portfolio extends Migration
{
    public function up()
    {
        //id,nama,username,email,password,foto,is_active,role,created_at,updated_at

        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
            ],
            'nama'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '128'
            ],
            'deskripsi'       => [
                'type'           => 'TEXT',
                'constraint'     => '225'
            ],
            'jenis'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '128'
            ],
            'gambar'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '128'
            ],
            'link'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '128'
            ]
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('portfolio');
    }

    public function down()
    {
        $this->forge->dropTable('portfolio');
    }
}
