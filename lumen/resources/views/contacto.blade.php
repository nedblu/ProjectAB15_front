@extends('templates.main')
		@section('customStyles')
			{!! Html::style('css/contacto.css') !!}
		@endsection
		@section('customScript')
			{!! HTML::script('js/function.js'); !!}
		@endsection
        @section('content')
            @include('default.header')
            @include('default.title')
            @include('default.slider')
            <section id="formulario">
	            
				<form method="POST" action="{!! route('enviar') !!}" accept-charset="UTF-8">
					<h3>{!! $title !!}</h3>				
					<div id="left">
						<p>
	                        En <span>AlphaBeta®</span> lo más importante es saber tu opinión, por eso abrimos el espacio para que puedas enviarnos tus sugerencias, inquietudes, preguntas y cualquier otra cosa respecto a nuestra empresa.
	                    </p>
	            
                    	<label for="nombre">Nombre(s)<span class="star">*</span></label>
                    	<input class="nombre text" placeholder="Nombre(s)" type="text" name="nombre" id="nombre" > 

                    	<label for="apellido">Apellidos<span class="star">*</span></label> 
                    	<input class="apellido text" placeholder="Apellidos" type="text" name="apellido" id="apellido" >                            
                    	<label for="telefono">Tel&eacute;fono [10 d&iacute;gitos]</label> 
                    	<input class="telefono text" placeholder="0123456789" maxlength="10" type="tel" name="telefono" id="telefono">                            
                   
                    	<label for="correo">Correo<span class="star">*</span></label> 
                    	<input class="correo text" placeholder="Correo Electr&oacute;nico" type="text" name="correo" id="correo" >                            
                   
                        <label>Mensaje<span class="star">*</span> <span id="info">(500)</span></label> 
                        <textarea name="mensaje" class="mensaje" id="mensaje" maxlength="500" onkeyup="actualizaInfo(500, mensaje)"></textarea>
					</div>
					<div id="right">
						<input type="checkbox" name="terminos" required><span> He leído el</span> <a class="link" href="{!! route('aviso') !!}" title="Aviso de Privacidad">Aviso de Privacidad</a>
	                	<input class="" type="submit" value="ENVIAR MENSAJE">                            
	                	<p>
		                	Todos los campos que tengan un asterisco (<span class="star">*</span>) son obligatorios, y el mensaje no se enviará hasta que no sean completados.
		                </p>
	                </div>
	            </form>
            </section>
            @include('default.footer')
   			@endsection

