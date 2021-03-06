<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;
use App\product;
use App\categoria;
use App\tipo_product;
use Illuminate\Support\Facades\DB;

class CargarProductosController extends Controller
{
    public function index()
    {   
        $productos = product::select('*')
                                    ->join('tipo_products','tipo_products.id_tipo','=','products.id_tipo')
                                    ->join('categoria','categoria.id_cat','=','products.id_cat')
                                    ->where('b_activo','=',1)->orderby('id_producto','DESC')->get();
        $categoria = categoria::select('*')->get();
        $tipo_product = tipo_product::select('*')->get();
        return view('carga',['productos'=> $productos,'categoria'=> $categoria,'tipo_product'=> $tipo_product]);
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
        
        if($request->hasFile('url_imagen')){
            $destino_path = 'public/images/productos';
            $image = $request->file('url_imagen');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('url_imagen')->storeAs($destino_path,$image_name);
            
            $producto['url_imagen'] =  $image_name;
            
            try{
                DB::beginTransaction();
                    product::where('id_producto','=', $producto['id_producto'])->update(['nombre' => $producto['Enombre']
                                                                                            ,'marca' => $producto['Emarca']
                                                                                            ,'descripcion' => $producto['Edescripcion']
                                                                                            ,'codigo' => $producto['Ecodigo']
                                                                                            ,'UM' => $producto['Eum']
                                                                                            ,'url_imagen' => $producto['url_imagen']
                                                                                            ,'tiempo_entrega' => $producto['Eentrega']
                                                                                            ,'id_tipo' => $producto['id_tipo']
                                                                                            ,'id_cat' => $producto['id_cat']]);
                DB::commit();
                return redirect()->action('CargarProductosController@index')->with(['Mensaje'=>'Producto guardado correctamente.','TipoMensaje'=>'bg-success']);
            }catch(\Exception $e){
                DB::rollback();
                return redirect()->action('CargarProductosController@index')->with('Mensaje','Error :(  intentalo mas tarde..')->with('TipoMensaje','bg-danger');
            }

        }else{
            try{
                DB::beginTransaction();
                    product::where('id_producto','=', $producto['id_producto'])->update(['nombre' => $producto['Enombre']
                                                                                            ,'marca' => $producto['Emarca']
                                                                                            ,'descripcion' => $producto['Edescripcion']
                                                                                            ,'codigo' => $producto['Ecodigo']
                                                                                            ,'UM' => $producto['Eum']
                                                                                            ,'tiempo_entrega' => $producto['Eentrega']
                                                                                            ,'id_tipo' => $producto['id_tipo']
                                                                                            ,'id_cat' => $producto['id_cat']]);
                DB::commit();
                return redirect()->action('CargarProductosController@index')->with(['Mensaje'=>'Producto guardado correctamente.','TipoMensaje'=>'bg-success']);
            }catch(\Exception $e){
                DB::rollback();
                return redirect()->action('CargarProductosController@index')->with('Mensaje','Error :(  intentalo mas tarde..')->with('TipoMensaje','bg-danger');
            }
        }

        
    }

    public function insert(Request $request)
    {
        $producto = request()->except('_token');
        if($request->hasFile('url_imagen')){
            $destino_path = 'public/images/productos';
            $image = $request->file('url_imagen');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('url_imagen')->storeAs($destino_path,$image_name);            
            $producto['url_imagen'] =  $image_name;
        }
        
        try{

            product::insert($producto);

            return redirect()->action('CargarProductosController@index')->with(['Mensaje'=>'Producto agregado correctamente.','TipoMensaje'=>'bg-success']);
        }catch(\Exception $e){
            DB::rollback();
            return redirect()->action('CargarProductosController@index')->with('Mensaje','Error :(  intentalo mas tarde..')->with('TipoMensaje','bg-danger');
        }
    }

    public function sendMail(){

        $email = 'isc.efrenchavez@gmail.com';

		$subject = "Prueba";
        $data = array('name'=>"Virat Gandhi");
        Mail::send('mail', $data, function ($mail) use ($email,$subject)/*($pdf,$email,$subject)*/ {
            $mail->from('contacto@iknelia-soluciones.com', 'IKNELIA');
            $mail->to($email)->subject($subject);
            //$mail->attachData($pdf->output(), 'reconocimiento_360.pdf');
        });

        return "Enviado";
    }
}
