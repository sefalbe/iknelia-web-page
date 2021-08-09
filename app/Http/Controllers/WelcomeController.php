<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\customer;
use Illuminate\Support\Arr;

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
    public function registro(Request $request)
    {   
        $usuario = request()->except('_token');
        $code = rand(1000,9999);
        Arr::set($usuario,'code',$code);

        customer::insert($usuario);
        
        $filename = "Rethinking_Hand_Safety-Manuscript.pdf";
        $path = storage_path()."/app/";
        
        
        $file      = $path . $filename;
        $file_size = filesize($file);
        $handle    = fopen($file, "r");
        $content   = fread($handle, $file_size);
        fclose($handle);
        
        $content = chunk_split(base64_encode($content));
        $uid     = md5(uniqid(time()));
        $name    = basename($file);
        
        $eol     = PHP_EOL;
        $subject = "Iknelia 10%-Descuento";
        $message = '<h1>Codigo de descuento: <strong>'.$code.'</strong></h1>
            <h3>Queremos darte un trato personalizado, por favor comunicate con nostros al 442 187 9448 o por correo 
            electronico a leonel_rodriguez@iknelia-soluciones.com </h3>';
        
        $from_name = "Iknelia-soluciones";
        $from_mail = "leonel_rodriguez@iknelia-soluciones.com";
        $replyto   = $usuario['correo']."";
        $mailto    = $usuario['correo']."";
        $header    = "From: " . $from_name . " <" . $from_mail . ">\n";
        $header .= "Reply-To: " . $replyto . "\n";
        $header .= "MIME-Version: 1.0\n";
        $header .= "Content-Type: multipart/mixed; boundary=\"" . $uid . "\"\n\n";
        $emessage = "--" . $uid . "\n";
        $emessage .= "Content-type:text/html; charset=iso-8859-1\n";
        $emessage .= "Content-Transfer-Encoding: 7bit\n\n";
        $emessage .= $message . "\n\n";
        $emessage .= "--" . $uid . "\n";
        $emessage .= "Content-Type: application/octet-stream; name=\"" . $filename . "\"\n"; // use different content types here
        $emessage .= "Content-Transfer-Encoding: base64\n";
        $emessage .= "Content-Disposition: attachment; filename=\"" . $filename . "\"\n\n";
        $emessage .= $content . "\n\n";
        $emessage .= "--" . $uid . "--";
        
        $mail = mail($mailto, $subject, $emessage, $header);
        
        $mns = $mail?'Enviamos tu libro al correo '.$usuario['correo']: 'Mail sending failed. :(';
        
        return redirect()->action('WelcomeController@index')->with(['Mensaje'=>$mns]);
        
    }
}
