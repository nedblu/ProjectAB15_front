@extends('templates.main')
	@section('customStyles')
		{!! Html::style('css/catalogo.css') !!}
	@endsection

        @section('content')
                @include('default.header')
                @include('default.title')
                @include('default.slider')
                <section id="catalogo">
                	<h3>Catálogo</h3>
                	<div class="catItem"><a href="{!! route('equipos') !!}"><img src="img/ABnoDisponible.png"> <span>Equipos</span></a></div>
                	<div class="catItem"><a href="{!! route('consumibles') !!}"><img src="img/ABnoDisponible.png"> <span>Consumibles</span></a></div>
                </section>
                @include('default.footer')
        @endsection

