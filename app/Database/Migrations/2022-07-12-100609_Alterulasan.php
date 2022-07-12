<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Alterulasan extends Migration
{
    public function up()
    {
        $fields = [
            'created_at' => [
                'type'           => 'DATETIME',
                'null'           => TRUE
            ],
            'updated_at' => [
                'type'           => 'DATETIME',
                'null'           => TRUE
            ],
        ];
        $this->forge->addColumn('ulasan', $fields);
    }

    public function down()
    {
        //
    }
}
