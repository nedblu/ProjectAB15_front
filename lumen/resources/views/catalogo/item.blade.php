@extends('templates.main')
	@section('customStyles')
		{!! Html::style('css/catalogo.css') !!}
	@endsection

        @section('content')
                @include('default.header')
                @include('default.title')
                <div class="container">

                    <!--<section class="twelve columns row" id="breadcrumb">
                        <ul class="breadcrumb">
                            <li><a href="{!! route('reqCatalogo') !!}" title="Catálogo" >Catálogo</a></li>
                            <li><a href="{!! route('productos') !!}" title="Catálogo" >Catálogo</a></li>
                            <li class="active">{{ $title }}</li>
                        </ul>
                    </section>-->

                    <section class="twelve columns row" id="producto">

                            <div class="five columns">
                                @if ($product[0]->image == 'na.png')
                                    <img src="holder.js/350x300" alt="300x200">
                                @else
                                    {!! Html::image('img/'.$product[0]->image,'image',['class' => 'mainImage']) !!} 
                                @endif
                            </div>

                            <div class="seven columns">
                                <h4>{{ $title }} </h4>
                                <div id="producto-desc">
                                    <p>
                                        <strong>CÓDIGO: </strong>{{ $product[0]->sku }}<br>
                                        
                                    </p>
                                    <p>
                                        <strong>DESCRIPCIÓN DETALLADA: </strong><br><span>{!! $product[0]->description_id !!}</span>
                                    </p>

                                    @if ($product[0]->ink)
                                    <p>
                                        <strong>TINTAS: </strong>{{ $product[0]->ink }}
                                    </p>
                                    @endif

                                    @if ($product[0]->equipment)
                                    <p>
                                        <strong>EQUIPO: </strong>{{ $product[0]->equipment }}
                                    </p>
                                    @endif

                                    @if ($product[0]->colors)
                                    <p>
                                        <strong>COLORES DISPONIBLES: </strong><br>
                                        @foreach ($colors as $color)
                                            {!! Html::image('content/colors/'.$color->image, $color->name, ['class' => 'img-circle color-img tooltip','title' => $color->name]) !!}
                                        @endforeach
                                    </p>
                                    @endif
                                </div>
                            
                            </div>
                             <div class="clearfix"></div>      
                    </section>
                </div>
                
                @include('default.footer')
        @endsection

