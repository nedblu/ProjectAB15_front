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
            <section class="container">
            	<h3>{!! $title !!}</h3>	
            	<article class="twelve columns section">
            		<p>
                        En <span>AlphaBeta®</span> lo más importante es saber tu opinión, por eso abrimos el espacio para que puedas enviarnos tus sugerencias, inquietudes, preguntas y cualquier otra cosa respecto a nuestra empresa.
                    </p>
            		<form method="POST" action="{!! route('enviar') !!}" accept-charset="UTF-8" class="form">

            			<div class="six columns">
            				<div class="row group-form" >
	            				<label for="nombre">Nombre(s)</label>
	            				<input type="text" placeholder="Nombre(s)" name="nombre" required>	
            				</div>
            				<div class="row group-form">
	            				<label for="telefono">Teléfono [10 dígitos]</label>
	            				<input type="text" placeholder="0123456789" name="telefono" required>	
            				</div>
            			</div>

            			<div class="six columns">
            				<div class="row group-form">
	            				<label for="apellido">Apellidos</label>
	            				<input type="text" placeholder="Apellidos" name="apellido" required>	
            				</div>
            				<div class="row group-form">
	            				<label for="correo">Correo</label>
	            				<input type="email" placeholder="correo@dominio.com" name="correo" required>	
            				</div>
            			</div>
            			<div class="twelve columns">
            				<div class="row group-form">
	            				<label for="mensaje">Mensaje <span id="info">(500)</span></label>
            					<textarea name="mensaje" maxlength="500" onkeyup="actualizaInfo(500, mensaje)" id="mensaje" required></textarea>	
            				</div>
            				<div class="row confirmation">
	            				<input type="checkbox" name="terminos" required><span> He leído el</span> <a class="link" href="{!! route('aviso') !!}" title="Aviso de Privacidad">aviso de privacidad</a>
	            				<p class="note">
			                		Todos los campos son obligatorios, y el mensaje no se enviará hasta que no sean completados.
			                	</p>	
            				</div>
            				<div class="row text-center">
	            				<button type="submit" class="button button-default"><i class="fa fa-paper-plane"></i> ENVIAR MENSAJE</button>
	            				<button type="reset" class="button button-reset"><i class="fa fa-trash"></i> REINICIAR FORM</button>
            				</div>
            			</div>
		            </form>
            	</article>
            </section>
            @include('default.footer')
   			@endsection

