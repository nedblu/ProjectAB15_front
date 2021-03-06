@extends('templates.main')


        @section('content')
                @include('default.header')
                @include('default.title')
                <div class="container">

                    <section class="twelve columns row" id="breadcrumb">
                        <ul class="breadcrumb">
                            <li><a href="{!! route('reqCatalogo') !!}" title="Catálogo" >Catálogo</a></li>
                            <li><a href="{{ $breadcrumb[0]['link'] }}" title="{{ $breadcrumb[0]['name'] }}" >{{ $breadcrumb[0]['name'] }}</a></li>
                            <li><a href="{{ $breadcrumb[1]['link'] }}" title="{{ $breadcrumb[1]['name'] }}" >{{ $breadcrumb[1]['name'] }}</a></li>
                            <li class="active">{{ $title }}</li>
                        </ul>
                    </section>

                    <section class="twelve columns row" id="producto">

                            <div class="five columns">
                                @if ($product[0]->image === null)
                                    {!! Html::image('http://placehold.it/350x300/A0D2F2/2980b9/?text=350x300', $title, ['class' => 'img-responsive img-thumbnail']) !!}
                                @else
                                    {!! Html::image('content/products/'.$product[0]->image, $title, ['class' => 'img-responsive img-thumbnail']) !!} 
                                @endif
                            </div>

                            <div class="seven columns">
                                <h4>{{ $title }}</h4>
                                <div id="producto-desc">
                                    <p>
                                        <strong>CÓDIGO: </strong>{{ $product[0]->sku }}<br>
                                        
                                    </p>
                                    <p>
                                        <strong>DESCRIPCIÓN DETALLADA: </strong><br><span>{!! $product[0]->description !!}</span>
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

