@extends('templates.main')
	@section('customStyles')
		{!! Html::style('css/catalogo.css') !!}
	@endsection

        @section('content')
                @include('default.header')
                @include('default.title')
                <section id="catalogo">
                        <div class="producto">
                            <h4>{!! $title !!}</h4>
                            {!! Html::image('img/no.png') !!} 
                        </div>          
                </section>

            <?php
            echo '<pre> PRODUCTO:::::::::::::::<br>';
            var_dump($product);
            echo "</pre>";
            ?>
                @include('default.footer')
        @endsection

