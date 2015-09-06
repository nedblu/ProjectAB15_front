<?php namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirect;
use Mail;
use DB;
use Session;

class MailController extends Controller {

  public function index(){

    $banners = $this->_getSlider();
  
    return view('contacto', ['title' => 'Contacto','banners' => $banners]);

  }

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
      'telefono'  => 'numeric',
      'correo'    => 'required|email',
      'mensaje'   => 'required|min:5'
      
    );

    $validator = Validator::make( $datos, $rules );

    if( $validator->fails() ) {
      
      return redirect()->route('contacto')->withErrors( $validator->errors() )->withInput();

    }

    else {

      $recipients = DB::table('emailcontacts')->select('name','email')->get();

      foreach ($recipients as $recipient) {

        Mail::send( 'email.template', $datos, function( $message ) use ( $datos, $recipient ) {
        
          $message->from( $datos['correo'], $datos['nombre'] . ' ' . $datos['apellido'] );
          $message->to( $recipient->email , $recipient->name );
          $message->subject( $datos['nombre'] . ' ' . $datos['apellido'] . ' quiere contactar con AlphaBeta' );

        });
        
      }

      return redirect()->route('contacto')->with('flash_success' , 'Su mensaje se ha enviado correctamente, en breve nos contactaremos con usted.');

    }

  }

}
                                    
