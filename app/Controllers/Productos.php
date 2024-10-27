<?php

namespace App\Controllers;

use App\Models\ProductosModel;

class Productos extends BaseController
{
    private $productoModel;

    public function __construct() 
    {
        $this->productoModel = new ProductosModel();
    }
    public function index()
    {
        helper('form');
        $db = \config\Database::connect();

        

        /*$query = $db->table('productos')
        ->selec('id, codigo, nombre, stock')
        ->where('estatus', 1)
        ->where('stock >',4)
        ->orderBy('nombre', 'desc')
        ->limit(1)
        ->get(); */

        $sql = $db->table('productos');
        $sql->select('productos.id, productos.codigo, productos.nombre, productos.stock, almacen.nombre AS
        almacen');
        $sql->join('almacen', 'productos.id_almacen= almacen.id', 'left');
        $query= $sql->get();
        $resultado = $query->getResultArray();
        echo $db->getLastQuery();

        /*$productoModel = new ProductosModel();
        $resultado = $productoModel->where('estatus', 1)->findAll();*/

        $data=['titulo' => 'Catalogo de Productos', 'productos'=> $resultado];
       return view('productos/index', $data);
        /* return view('plantilla/header', $data)
             . view('productos/index', $data) 
            .view('plantilla/footer',['copy'=> "2023"]);*/
            //return view ('productos/index', $data);
    }

    public function nuevo()
    {
        helper('form');
        return view('productos/nuevo');
    }

    public function show($id)
    {
        $productoModel = new ProductosModel();
        $producto = $productoModel->find($id);

        $data=['titulo' => 'Catalogo de Productos', 
        'producto' => $producto
    ];
    
    return view('productos/show', $data);


        /*return view('plantilla/header', $data)
             . view('productos/show', $data) 
            .view('plantilla/footer',['copy'=> "2023"]);*/
    }

    public function transaccion()
    {
        $data = [
            'estatus' => 0
            
        ];

        echo $this->productoModel->purgeDeleted([1, 4]); 
        //echo $this->productoModel->getInsertID();
    }

    public function cat($categoria,$id){
        return "<h2>Categoria: $categoria <br> Producto $id</h2>";
    }
}