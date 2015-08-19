@extends('templates.main')
	@section('customStyles')
		{!! Html::style('css/catalogo.css') !!}
	@endsection

        @section('content')
                @include('default.header')
                @include('default.title')
               {{--  @include('default.slider') --}}
                <section id="catalogo">
                    <h3>{!! $title !!}</h3>   
                    @if ($title == 'Planchas'|| $title == 'Tintas' || $title == 'Papeles')
                        @foreach ($data as $myData)
                            <div class="catItemItem"><a href="#">{!! Html::image('img/ABnoDisponible.png') !!} <p>{!!$myData->NOMBRE!!}<br/>{!!$myData->SECCION!!}</p></a></div>
                        @endforeach
                    @else
                        @foreach ($data as $myData)
                            <div class="catItemItem"><a href="#">{!! Html::image('img/ABnoDisponible.png') !!} <p>{!!$myData->NOMBRE!!}<br/>{!!$myData->SUBSECCION!!}</p></a></div>
                        @endforeach
                    @endif            
                </section>
                @include('default.footer')
        @endsection

