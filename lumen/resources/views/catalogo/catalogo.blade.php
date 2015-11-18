@extends('templates.main')

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

                        <div class="row twelve columns items">

                            @foreach ($mainCategories as $categories)

                                <div class="row" id="{!! str_slug($categories[0]->parent_id) !!}">
                                    <h4>{!! $categories[0]->parent_id !!}</h4>

                                    @foreach ($categories as $category)
                                        <div class="product-card four columns">
                                            <a class="product-card-clic" href="{{ route('productos', ['category' => $category->id]) }}" title="{{ $category->name }}">
                                                <div class="product-card-image six columns">
                                                    @if ($category->image === null)
                                                        {!! Html::image('http://placehold.it/150x150/A0D2F2/2980b9/?text=150x150',$category->name,['class' => 'img-responsive']) !!}
                                                    @else
                                                        {!! Html::image('content/category-images/'.$category->image,$category->name,['class' => 'img-responsive']) !!}
                                                    @endif
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
