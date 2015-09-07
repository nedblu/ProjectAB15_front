@extends('templates.main')
	@section('customStyles')
		{!! Html::style('css/catalogo.css') !!}
	@endsection

        @section('content')
                @include('default.header')
                
                @include('default.title')

                <section id="catalogo">
                	<h3>{!! $title !!}</h3>
                        {{-- */ $i = count($mainCategories) /* --}}
                        @foreach ($mainCategories as $categories)
                                @if (--$i == count($mainCategories)-1)
                                       {{-- <div class="showing"> --}}
                                       <div>
                                @else
                                        {{-- <div class="hidden"> --}}
                                        <div>
                                @endif
                                
                                        <h4>{!! $categories[0]->parent_id !!}</h4>
                                        @foreach ($categories as $category)
                                                <div class="catItem">
                                                        <a href="{!! route('productos', ['category' => $category->id]) !!}">{!! Html::image('img/'.$category->image) !!} 
                                                        <br/><span>{!! $category->name !!}</span></a>
                                                </div>
                                        @endforeach
                                </div>
                        @endforeach
                </section>      
                @include('default.footer')
        @endsection