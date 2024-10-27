<?php

namespace App\Controllers;

use Throwable;

class Home extends BaseController
{
    public function index()
    {
        //echo "hola ci4 ruta automatica";

        /*$migrate = \config\Services::migrations();

        try {
            $migrate->latest();
            //$migrate->regress(-1);
        } catch(Throwable $e) {
            echo $e;
        }*/

        /*$seeder = \Config\Database::seeder();
        $seeder->call('CategoriasSeeder');*/

        helper('util_helper');
        
        echo generaToken();
    }
}
