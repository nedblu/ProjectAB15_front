<?php namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirect;
use Mail;
// app()['mailer'];

class MailController extends Controller {

  public function getForm(Request $request){
    $datos = array(
      'nombre' => $request->input('nombre'), 
      'apellido' => $request->input('apellido'), 
      'telefono' => $request->input('telefono'), 
      'correo' => $request->input('correo'), 
      'mensaje' => $request->input('mensaje')
    );

    $rules = array(
      'nombre' => 'required',
      'apellido' => 'required',
      'correo' => 'required|email',
      'mensaje' => 'required|min:5'
    );
    echo '<br/>Done::::Rules';

    $validator = Validator::make($datos, $rules);
    echo '<br/>Done::::Validator';

    if($validator->fails()){
      echo '<br/>Done::::IfFails()';
      //Return to the contact view with errors
      // return Redirect::route('failOrSuccess', array('type' => 0, 'errors' => $errors));
      return redirect()->route('failOrSuccess', array('type' => 0, 'errors' => $errors));
    }else{
      echo '<br/>Done::::passes()';
      Mail::send('emailView', $datos, function( $message) use ($datos){
        $message->from($datos['correo'], $datos['nombre'] . ' ' . $datos[apellido]);
        $message->to('contacto@alphabeta.com.mx', 'Contacto AlphaBeta®');
        $message->subject($datos['name'] . ' quiere contactar con AlphaBeta®');
      });
      // echo '<script type="text/javascript">
      //           window.location = "'. route('home').'"
      //       </script>';

      //Return to the contact view with errors
      // return Redirect::route('failOrSuccess', array('type' => '1', 'success' => 'Tu mensaje se ha enviado. !Gracias¡'));
      return redirect()->route('failOrSuccess', array('type' => '1', 'success' => 'Tu mensaje se ha enviado. !Gracias¡'));
    }

  }
}
                                    
