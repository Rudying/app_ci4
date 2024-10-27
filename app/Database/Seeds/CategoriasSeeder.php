<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nombre' => 'Deportes'
            ],
            [
                'nombre' => 'Accesorios'
            ],
            [
                'nombre' => 'Electronica'
            ],
            ];
            $this->db->table('categorias')->insertBatch($data);
        
    }
}
