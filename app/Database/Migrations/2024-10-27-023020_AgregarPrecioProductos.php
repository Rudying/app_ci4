<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AgregarPrecioProductos extends Migration
{
    public function up()
    {
        $campos = [
            'precio' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
                'after' => 'nombre',
                'null' => false,
            ]
            ];
            $this->forge->addColumn('productos', $campos);
    }

    public function down()
    {
        $this->forge->dropColumn('productos', 'precio');
    }
}
