<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreaTablaCategorias extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true
                ],
                'nombre' => [
                    'type' => 'VARCHAR',
                    'constraint' => 100
                ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('categorias');
    }

    public function down()
    {
        $this->forge->dropTable('categorias');
    }
}
