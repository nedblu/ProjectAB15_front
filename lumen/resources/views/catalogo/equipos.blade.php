@extends('templates.main')
	@section('customStyles')
		{!! Html::style('css/catalogo.css') !!}
	@endsection

        @section('content')
                @include('default.header')
                @include('default.title')
                @include('default.slider')
                <section id="catalogo">
                        <h3>{!! $title !!}</h3>                        

                        <div class="catItemSec"><a href="{!! route('impresoras') !!}">{!! Html::image('img/ABnoDisponible.png') !!} <span>Impresoras</span></a></div>
                        <div class="catItemSec"><a href="{!! route('planchas') !!}">{!! Html::image('img/ABnoDisponible.png') !!} <span>Planchas</span></a></div>
                        <div class="catItemSec"><a href="{!! route('vynil') !!}">{!! Html::image('img/ABnoDisponible.png') !!} <span>Vynil</span></a></div> 
                </section> 
                @include('default.footer')
        @endsection

