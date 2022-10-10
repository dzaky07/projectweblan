<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Barang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'brgkode' => [
                'type' => 'char',
                'constraint' => '10',
            ],
            'brgnama' => [
                'type' => 'varchar',
                'constraint' => '100'
            ],
            'brgkatid' => [
                'type' => 'int',
                'unsigned' => true
            ],
            'brgharga' => [
                'type' => 'double',
            ],
            'brggambar' => [
                'type' => 'varchar',
                'constraint' => 200
            ],
            'brgsatuan' => [
                'type' => 'varchar',
                'constraint' => '25'
            ]
        ]);
 
        $this->forge->addPrimaryKey('brgkode');
        $this->forge->addForeignKey('brgkatid', 'kategori', 'katid');
 
        $this->forge->createTable('barang');
    }
 
    public function down()
    {
        $this->forge->dropTable('barang');
    }
}
