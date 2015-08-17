@extends('templates.main')
		@section('customStyles')
			{!! Html::style('css/contacto.css') !!}
		@endsection
        @section('content')
            @include('default.header')
            @include('default.title')
            @include('default.slider')
            <section id="formulario">
	            <h3>Contacto</h3>
				<form method="POST" action="{!! route('enviar') !!}" accept-charset="UTF-8">				
					<section>
						<p>
	                        En AlphaBeta® lo más importante es saber tu opinión, por eso abrimos el espacio para que puedas enviarnos tus sugerencias, inquietudes, preguntas y cualquier otra cosa respecto a nuestra empresa.
	                    </p>
	            
                    	<label for="nombre">Nombre(s)*</label>
                    	<input class="nombre" placeholder="Nombre(s)" type="text" name="nombre" id="nombre" > 

                    	<label for="apellido">Apellidos*</label> 
                    	<input class="apellido" placeholder="Apellidos" type="text" name="apellido" id="apellido" >                            

                    	<label for="telefono">Tel&eacute;fono [10 d&iacute;gitos]</label> 
                    	<input class="telefono" placeholder="0123456789" maxlength="10" type="text" name="telefono" id="telefono">                            
                   
                    	<label for="correo">Correo*</label> 
                    	<input class="correo" placeholder="Correo Electr&oacute;nico" type="text" name="correo" id="correo" >                            
                   
                        <label>Mensaje* <span id="info">(500)</span></label> 
                        <textarea rows=10 cols=10 name="mensaje" class="mensaje" id="mensaje" maxlength="250" onkeyup="actualizaInfo(500, mensaje)"></textarea>
                  
                        <label for="verify" class="verify">Verification_bot</label>
                        <input name="verify" class="verify" />
					</section>

					<aside>
		                <article>
							<p>
								<br><input type="checkbox" required name="terminos"> He leído el <a class="link" href="" title="Aviso de Privacidad">aviso de privacidad</a>
							</p>
		                	<input class="" type="submit" value="ENVIAR MENSAJE">                            <p>
		                        Todos los campos que tengan un asterisco (*) son obligatorios, y el mensaje no se enviará hasta que no sean completados.
		                    </p>
		                </article>
	                </aside>
	            </form>
            </section>
            {!! HTML::script('js/function.js'); !!}
            @include('default.footer')
   			@endsection

