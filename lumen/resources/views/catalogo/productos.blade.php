@extends('templates.main')

        @section('content')
                @include('default.header')
                
                @include('default.title')

                <div class="container">
                    <section class="twelve columns row" id="breadcrumb">
                        <ul class="breadcrumb">
                            <li><a href="{!! route('reqCatalogo') !!}" title="Catálogo" >Catálogo</a></li>
                            <li><a href="{{ $breadcrumb[0]['link'] }}" title="{{ $breadcrumb[0]['name'] }}" >{{ $breadcrumb[0]['name'] }}</a></li>
                            <li class="active">{{ $title }}</li>
                        </ul>
                    </section>


                    <section class="twelve columns row" id="catalogo">
                    	
                        <h3>{{ $title }}</h3>

                        @foreach ($products as $product)
                                
                            <div class="product-card four columns">

                                <a class="product-card-clic" href="{!! route('producto', ['parent' => str_slug($title),'category' => str_slug($product->parent_id), 'item' => $product->id]) !!}" title="{{ $product->name }}">

                                    <div class="product-card-image six columns">
                                        @if ($product->image == 'na.png')
                                            {!! Html::image('http://placehold.it/150x150/A0D2F2/2980b9/?text=150x150',$product->name,['class' => 'img-responsive']) !!}
                                        @else
                                            {!! Html::image('img/'.$products->image, $product->name,['class' => 'img-responsive']) !!} 
                                        @endif
                                    </div>

                                    <div class="product-card-info six columns">
                                        <h5>{{ $product->name }}</h5>
                                        <p>{!! $product->parent_id !!}</p>
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