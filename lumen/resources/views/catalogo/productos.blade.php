@extends('templates.main')
	@section('customStyles')
		{!! Html::style('css/catalogo.css') !!}
	@endsection

        @section('content')
                @include('default.header')
                
                @include('default.title')

                <section id="catalogo">
                	<h3>{!! $title !!}</h3>
                        @foreach ($products as $producto)
                                <div class="catItemItem">
                                        <a href="{!! route('producto', ['item' => 6]) !!}">{!! Html::image('img/no.png') !!} 
                                        <br/><p>{!! $producto->name !!}<br/>{!! $producto->parent_id !!}</p></a>
                                </div>
                        @endforeach
                    </div>
                </section>      
                @include('default.footer')
        @endsection