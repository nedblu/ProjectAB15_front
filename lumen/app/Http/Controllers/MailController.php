<?php namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirect;
use Mail;
use DB;

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

      $recipients = DB::table('emailcontacts')->select('id','name','email')->get();

      foreach ($recipients as $recipient) {

        Mail::send( 'email.template', $datos, function( $message ) use ( $datos, $recipient ) {
        
          $message->from($datos['correo'], $datos['nombre'] . ' ' . $datos['apellido']);
          $message->to( $recipient->email , $recipient->name );
          $message->subject($datos['nombre'] . ' quiere contactar con AlphaBeta');

        });
        
      }

      //Return to the contact view with errors
      //return redirect()->route('contacto');

    }

  }

}
                                    
