@extends('templates.main')
	@section('customStyles')
		{!! Html::style('css/catalogo.css') !!}
	@endsection

        @section('content')
                @include('default.header')
                
                @include('default.title')

                <div class="container">
                    <section  class="twelve columns row" id="catalogo">

                        <h3>{!! $title !!}</h3>
                            
                        <div class="row twelve columns text-left">

                            @foreach ($mainCategories as $categories)

                                <a href="#{!! str_slug($categories[0]->parent_id) !!}" class="button button-primary"> {{ $categories[0]->parent_id }} </a>

                            @endforeach
                            
                        </div>


                        {{-- */ $i = count($mainCategories) /* --}}

                        <div class="row twelve columns items">

                            @foreach ($mainCategories as $categories)

                                <div class="row" id="{!! str_slug($categories[0]->parent_id) !!}">
                                    <h4>{!! $categories[0]->parent_id !!}</h4>

                                    @foreach ($categories as $category)
                                        <div class="product-card">
                                            <a class="product-card-clic" href="{{ route('productos', ['category' => $category->id]) }}" title="{{ $category->name }}">
                                                <div class="product-card-image six columns">
                                                    {!! Html::image('img/'.$category->image) !!}
                                                </div>
                                                <div class="product-card-info six columns">
                                                    <h5>{{ $category->name }}</h5>
                                                    <p>No disponible</p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                                
                            @endforeach

                        </div>
                        
                    </section> 
                </div>     
                @include('default.footer')
        @endsection