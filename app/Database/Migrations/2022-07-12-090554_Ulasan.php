<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ulasan extends Migration
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
                'constraint'     => '128'
            ],
            'email' => [
                'type'           => 'VARCHAR',
                'constraint'     => '128'
            ],
            'deskripsiulasan'       => [
                'type'           => 'TEXT',
                'constraint'     => '225'
            ]
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('ulasan');

    }

    public function down()
    {
        $this->forge->dropTable('ulasan');
    }
}
