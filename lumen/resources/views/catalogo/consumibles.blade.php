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

                        <div class="catItemSec"><a href="{!! route('tintas') !!}">{!! Html::image('img/ABnoDisponible.png') !!} <span>Tintas</span></a></div>
                        <div class="catItemSec"><a href="{!! route('papeles') !!}">{!! Html::image('img/ABnoDisponible.png') !!} <span>Papeles</span></a></div>
                        <div class="catItemSec"><a href="{!! route('rollos') !!}">{!! Html::image('img/ABnoDisponible.png') !!} <span>Rollos</span></a></div> 
                </section>
                    <?php
                    //             echo '<pre>';
                    //             print_r($data);
                    //             echo '</pre>';
                    ?> 
                @include('default.footer')
        @endsection

