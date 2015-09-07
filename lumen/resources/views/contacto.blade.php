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
            <section class="container section-contacto">

                  @if (Session::has('title'))
                        <h3>{{ Session::get('title') }}</h3>
                  @else
                        <h3>{{ ( isset($title) ) ? $title : false }}</h3>
                  @endif
            		
            	<article class="twelve columns section">

                        @if (count($errors) > 0)
                              <div class="box box-danger">
                                    <ul>
                                          @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                          @endforeach
                                    </ul>
                              </div>
                        @endif

                        @if (Session::has('flash_success'))
                              <div class="box box-success">
                                    <p>{{ Session::get('flash_success') }}</p>
                              </div>
                        @endif

                        <p>
                              En <span>AlphaBeta</span> lo más importante es saber tu opinión, por eso abrimos el espacio para que puedas enviarnos tus sugerencias, inquietudes, preguntas y cualquier otra cosa respecto a nuestra empresa.
                        </p>

            		<form method="POST" action="{!! route('contacto_enviar') !!}" accept-charset="UTF-8" class="form">

            			<div class="six columns">
            				<div class="row group-form" >
	            				<label for="nombre">Nombre(s)</label>
	            				<input type="text" placeholder="Nombre(s)" name="nombre" value="{{ old('nombre') }}" tabindex="1" required>	
            				</div>
            				<div class="row group-form">
	            				<label for="telefono">Teléfono [10 dígitos] (Opcional)</label>
	            				<input type="text" placeholder="0123456789" name="telefono" value="{{ old('telefono') }}" tabindex="3" maxlength="10">	
            				</div>
            			</div>

            			<div class="six columns">
            				<div class="row group-form">
	            				<label for="apellido">Apellidos</label>
	            				<input type="text" placeholder="Apellidos" name="apellido" value="{{ old('apellido') }}" tabindex="2" required>	
            				</div>
            				<div class="row group-form">
	            				<label for="correo">Correo</label>
	            				<input type="email" placeholder="correo@dominio.com" name="correo" value="{{ old('correo') }}" tabindex="4" required>	
            				</div>
            			</div>
            			<div class="twelve columns">
            				<div class="row group-form">
	            				<label for="mensaje">Mensaje <span id="info">(500)</span></label>
            					<textarea name="mensaje" maxlength="500" onkeyup="actualizaInfo(500, mensaje)" id="mensaje" tabindex="5" required >{{ old('mensaje') }}</textarea>	
            				</div>
            				<div class="row confirmation">
	            				<input type="checkbox" name="terminos" tabindex="6" required><span> He leído el</span> <a class="link" href="{{ route('aviso') }}" title="Aviso de Privacidad">aviso de privacidad</a>
	            				<p class="note">
			                		Todos los campos son obligatorios, y el mensaje no se enviará hasta que no sean completados.
			                	</p>	
            				</div>
            				<div class="row text-center">
	            				<button type="submit" class="button button-default" tabindex="7"><i class="fa fa-paper-plane"></i> ENVIAR MENSAJE</button>
	            				<button type="reset" class="button button-reset"><i class="fa fa-trash"></i> REINICIAR FORM</button>
            				</div>
            			</div>
		            </form>
            	</article>
            </section>
            @include('default.footer')
@endsection

