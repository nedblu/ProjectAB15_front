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
      $sender = $request->all();
      foreach ($recipients as $recipient) {
        Mail::send( 'email.template', $request->all(), function( $message ) use ( $sender, $recipient ) {
        
          $message->from( $sender['correo'], $sender['nombre'] . ' ' . $sender['apellido'] );
          $message->to( $recipient->email , $recipient->name );
          $message->subject( $sender['nombre'] . ' ' . $sender['apellido'] . ' quiere contactar con AlphaBeta' );
        });
        
      }
      return redirect()->route('contacto')->with('flash_success' , 'Su mensaje se ha enviado correctamente, en breve nos contactaremos con usted.')
                                          ->with('title', 'Contacto');
    }
  }
}