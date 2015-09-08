@extends('templates.main')
	@section('customStyles')
		{!! Html::style('css/catalogo.css') !!}
	@endsection

        @section('content')
                @include('default.header')
                
                @include('default.title')

                <div class="container">
                    <section class="twelve columns row" id="breadcrumb">
                        <ul class="breadcrumb">
                            <li><a href="{!! route('reqCatalogo') !!}" title="Catálogo" >Catálogo</a></li>
                            <li><a href="{!! route('reqCatalogo') !!}" title="Consumibles" >Consumibles</a></li>
                            <li class="active">{{ $title }}</li>
                        </ul>
                    </section>

                    <section class="twelve columns row" id="catalogo">
                    	
                        <h3>{{ $title }}</h3>

                        @foreach ($products as $producto)
                                
                            <div class="product-card">
                                <a class="product-card-clic" href="{!! route('producto', ['item' => $producto->id]) !!}" title="{{ $producto->name }}">
                                    <div class="product-card-image six columns">
                                        {!! Html::image('img/no.png') !!}
                                    </div>
                                    <div class="product-card-info six columns">
                                        <h5>{{ $producto->name }}</h5>
                                        <p>Lorem ipsum doloLorem ipsum dolo Lorem ipsum dolo</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </a>
                            </div>
                        @endforeach
                        </div>
                    </section>

                </div>

                @include('default.footer')

        @endsection