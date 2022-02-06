<?php 
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Siswa extends Migration{
    public function up(){

        // Uncomment below if want config
        $this->forge->addField([
        		'id'          		=> [
        				'type'           => 'VARCHAR',
                        'constraint'     => '100',
        				'auto_increment' => FALSE
        		],
        		'title'       		=> [
        				'type'           => 'VARCHAR',
        				'constraint'     => '256',
        		],
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('siswa');
    }

    public function down(){
        $this->forge->dropTable('siswa');
    }
}