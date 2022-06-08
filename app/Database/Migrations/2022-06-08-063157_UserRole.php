<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserRole extends Migration
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
            'role'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '30'
            ]
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('user_role');
    }

    public function down()
    {
        $this->forge->dropTable('user_role');
    }
}
