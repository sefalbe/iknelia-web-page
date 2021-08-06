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
        $code = rand();
        Arr::set($datosEncuesta,'code',$code);

        customer::insert($usuario);

        //recipient
        $to = $usuario['correo'];

        //sender
        $from = 'leonel_rodriguez@iknelia-soluciones.com';
        $fromName = 'www.iknelia-soluciones.com';

        //email subject
        $subject = '10% Descuento IKNELIA'; 

        //attachment file path
        $file = "../../../public/doc/Rethinking_Hand_Safety-Manuscript.pdf";

        //email body content
        $htmlContent = '<h4>Codigo de descuento: <strong>'.$code.'</strong></h4>
            <p>Queremos darte un trato personalizado, por favor comunicate con nostros al 442 187 9448 o por correo 
            electronico a leonel_rodriguez@iknelia-soluciones.com </p>';

        //header for sender info
        $headers = "From: $fromName"." <".$from.">";

        //boundary 
        $semi_rand = md5(time()); 
        $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 

        //headers for attachment 
        $headers .='nMIME-Version: 1.0n'.'Content-Type: multipart/mixed;n'.' boundary="{$mime_boundary}"'; 

        //multipart boundary 
        $message = '--{$mime_boundary}n'.' Content-Type: text/html; charset="UTF-8"n'.
        ' Content-Transfer-Encoding: 7bitnn'.$htmlContent.'nn'; 

        //preparing attachment
        if(!empty($file) > 0){
            if(is_file($file)){
                $message .= "--{$mime_boundary}n";
                $fp =    @fopen($file,"rb");
                $data =  @fread($fp,filesize($file));

                @fclose($fp);
                $data = chunk_split(base64_encode($data));
                $message .= 'Content-Type: application/octet-stream; name=""'.basename($file).'n'. 
                'Content-Description:' .basename($files[$i]).'n'.
                'Content-Disposition: attachment;n'.'filename='.basename($file).'; size='.filesize($file).';n'. 
                'Content-Transfer-Encoding: base64nn' . $data . 'nn';
            }
        }else{
            dd("error del archivo");
        }

        $message .= "--{$mime_boundary}--";
        $returnpath = "-f" . $from;

        //send email
        $mail = @mail($to, $subject, $message, $headers, $returnpath); 

        //email sending status
        $mns = $mail?'Enviamos tu libro al correo '.$usuario['correo']: 'Mail sending failed. :(';
        
        return redirect()->action('WelcomeController@index')->with(['Mensaje'=>$mns]);
    }
}
