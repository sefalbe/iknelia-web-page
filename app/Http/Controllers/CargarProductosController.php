<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use Illuminate\Support\Facades\DB;

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

    public function delete(Request $request)
    {
        $producto = request()->except('_token');
        try{
            DB::beginTransaction();
                product::where('id_producto','=', $producto['id_producto'])->update(['b_activo' => 0]);
            DB::commit();
            return redirect()->action('CargarProductosController@index')->with(['Mensaje'=>'Producto eliminado.','TipoMensaje'=>'bg-success']);
        }catch(\Exception $e){
            DB::rollback();
            return redirect()->action('CargarProductosController@index')->with('Mensaje','Error :(  intentalo mas tarde..')->with('TipoMensaje','bg-danger');
        }
    }

    public function update(Request $request)
    {
        $producto = request()->except('_token');
        try{
            DB::beginTransaction();
                product::where('id_producto','=', $producto['id_producto'])->update(['nombre' => $producto['Enombre']
                                                                                        ,'marca' => $producto['Emarca']
                                                                                        ,'descripcion' => $producto['Edescripcion']
                                                                                        ,'codigo' => $producto['Ecodigo']
                                                                                        ,'UM' => $producto['Eum']
                                                                                        ,'tiempo_entrega' => $producto['Eentrega']]);
            DB::commit();
            return redirect()->action('CargarProductosController@index')->with(['Mensaje'=>'Producto guardado correctamente.','TipoMensaje'=>'bg-success']);
        }catch(\Exception $e){
            DB::rollback();
            return redirect()->action('CargarProductosController@index')->with('Mensaje','Error :(  intentalo mas tarde..')->with('TipoMensaje','bg-danger');
        }
    }

    public function insert(Request $request)
    {
        $producto = request()->except('_token');
        try{

            product::insert($producto);

            return redirect()->action('CargarProductosController@index')->with(['Mensaje'=>'Producto agregado correctamente.','TipoMensaje'=>'bg-success']);
        }catch(\Exception $e){
            DB::rollback();
            return redirect()->action('CargarProductosController@index')->with('Mensaje','Error :(  intentalo mas tarde..')->with('TipoMensaje','bg-danger');
        }
    }
}
