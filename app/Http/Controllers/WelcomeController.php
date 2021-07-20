<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class WelcomeController extends Controller
{
    public function index()
    {
        $industriales = product::select('*')
                            ->join('tipo_products','tipo_products.id_tipo','=','products.id_tipo')
                            ->where('id_cat','=',1)->where('b_activo','=',1)->get();
        $residenciales = product::select('*')
                            ->join('tipo_products','tipo_products.id_tipo','=','products.id_tipo')
                            ->where('id_cat','=',2)->where('b_activo','=',1)->get();
        return view('welcome',['residenciales'=>$residenciales, 'industriales' => $industriales]);
    }
}
