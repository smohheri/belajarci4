<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admin extends Migration
{
    public function up()
    {

        // Uncomment below if want config
        $this->forge->addField([
            'id'                  => [
                'type'           => 'INT',
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
            ],
            'username'               => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'password'              => [
                'type'          => 'VARCHAR',
                'constraint'    => '256',
            ],
            'create_at'     => [
                'type'      => 'DATETIME'
            ],
            'update_at'     => [
                'type'      => 'DATETIME'
            ]
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('admin');
    }

    public function down()
    {
        $this->forge->dropTable('admin');
    }
}
