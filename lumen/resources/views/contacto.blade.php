@extends('templates.main')
        @section('content')
            @include('default.header')
            @include('default.title')
            @include('default.slider')
			<form method="POST" action="{!! route('enviar') !!}">
				<label>Nombre(s)*</label>
				<input class="text" type="text" placeholder="Nombre(s)" name="nombre"/>
				<label>Apellidos*</label>
				<input class="text" type="text" placeholder="Apellido(s)"/>
				<label>Correo electrónico*</label>
				<input class="text" type="text" placeholder="ejemplo@midominio.com"/>

				<input class="text" type="text" placeholder=""/>



				<input type="submit" value="enviar" />

			</form>
            @include('default.footer')
            @endsection

