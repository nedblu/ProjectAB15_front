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

    $rules = array(
      'nombre'    => 'required',
      'apellido'  => 'required',
      'telefono'  => 'numeric',
      'correo'    => 'required|email',
      'mensaje'   => 'required|min:5'
    );
    $validator = Validator::make( $request->all(), $rules );
    if( $validator->fails() ) {
      
      return redirect()->route('contacto')->withErrors( $validator->errors() )->withInput();
    }
    else {
      $recipients = DB::table('emailcontacts')->select('name','email')->get();

      $data = $request->all();

      foreach ($recipients as $recipient) {
        
        Mail::send( 'email.emailView', $data, function( $message ) use ( $data, $recipient ) {
        
          $message->from( $data['correo'], $data['nombre'] . ' ' . $data['apellido'] );
          $message->to( $recipient->email , $recipient->name );

          $message->bcc('carlosaguilarnet@gmail.com', 'David - Customer Support');
          $message->bcc('perez.camargo7@gmail.com', 'Felipe - Customer Support');

          $message->replyTo($data['correo'], $data['nombre'] . ' ' . $data['apellido']);
          $message->subject( $data['nombre'] . ' ' . $data['apellido'] . ' quiere contactar con AlphaBeta' );
        });
        
      }
      return redirect()->route('contacto')->with('flash_success' , 'Su mensaje se ha enviado correctamente, en breve nos contactaremos con usted.')
                                          ->with('title', 'Contacto');
    }
  }
}