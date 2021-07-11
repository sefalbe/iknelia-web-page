<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class CargarProductosController extends Controller
{
    public function index()
    {   
        $productos = product::select('*')->where('b_activo','=',1)->orderBy('id_producto','DESC')->get();
        return view('carga',['productos'=> $productos]);
    }
    public function cuenta()
    {
        return "Estoy en cuenta";
    }

    public function delete()
    {

    }
    public function update()
    {
        
    }
    public function insert()
    {
        
    }
}
