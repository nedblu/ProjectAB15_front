@extends('templates.main')
	@section('customStyles')
		{!! Html::style('css/catalogo.css') !!}
	@endsection

        @section('content')
                @include('default.header')
                @include('default.title')
                <section id="catalogo">
                        <div class="producto">
                            <h4>{!! $title !!} <span class="sku">({!! $product[0]->sku !!})</span></h4>

                            @if ($product[0]->image == 'na.png')
                                {!! Html::image('img/no.png', 'image',['class' => 'mainImage']) !!} 
                                 <br/>
                            @else
                                {!! Html::image('img/'.$product[0]->image,'image',['class' => 'mainImage']) !!} 
                                 <br/>
                            @endif
                            
                            @if ($product[0]->ink)
                                <span class="ink">TINTA: {!! $product[0]->ink !!}</span>
                                <br/>
                            @endif

                            @if ($product[0]->equipment)
                                <span class="ink">EQUIPO: {!! $product[0]->equipment !!}</span>
                                 <br/>
                            @endif

                            @if ($product[0]->colors)
                                @foreach ($colors as $color)
                                    {!! Html::image('content/colors/'.$color->image, $color->name, ['class' => 'color']) !!}
                                @endforeach
                                 <br/>
                            @endif
                            <p>
                                {!! $product[0]->description_id !!}
                            </p>

                        </div>          
                </section>
                @include('default.footer')
        @endsection

