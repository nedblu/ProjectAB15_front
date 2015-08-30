<?php namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirect;
use Mail;

class MailController extends Controller {

  public function getForm( Request $request ){

    $datos = array(

      'nombre'    => $request->input('nombre'), 
      'apellido'  => $request->input('apellido'), 
      'telefono'  => $request->input('telefono'), 
      'correo'    => $request->input('correo'), 
      'mensaje'   => $request->input('mensaje')

    );

    $rules = array(

      'nombre'    => 'required',
      'apellido'  => 'required',
      'correo'    => 'required|email',
      'mensaje'   => 'required|min:5'
      
    );

    $validator = Validator::make( $datos, $rules );

    if( $validator->fails() ){
      
      //Return to the contact view with errors
      return redirect()->route('failOrSuccess', array('type' => 0, 'errors' => $errors));

    }
    else{

      Mail::send( 'emailView', $datos, function( $message ) use ( $datos ) {
        
        $message->from($datos['correo'], $datos['nombre'] . ' ' . $datos['apellido']);
        $message->to('contacto@alphabeta.com.mx', 'Contacto AlphaBeta');
        $message->subject($datos['name'] . ' quiere contactar con AlphaBeta®');

      });

      //Return to the contact view with errors
      return redirect()->route('failOrSuccess', array('type' => '1', 'success' => 'Tu mensaje se ha enviado. !Gracias¡'));

    }

  }

}
                                    
