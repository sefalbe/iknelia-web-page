<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class WelcomeController extends Controller
{
    public function index()
    {
        $productos = product::select('*')->get();
        return view('welcome',['productos'=> $productos]);
    }
}
