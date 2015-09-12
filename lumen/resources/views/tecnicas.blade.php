@extends('templates.main')
      @section('customStyles')
            {!! Html::style('css/tecnicas.css') !!}
      @endsection
      @section('customScript')
            {!! HTML::script('js/function.js'); !!}
      @endsection
      @section('content')
            @include('default.header')
            @include('default.title')
            @include('default.slider')

            <div class="container">
            	<div class="text-center">
            		<h3 class="title-main">{{ $title }}</h3>
            	</div>
                  <div class="table">
                        @foreach ($techniques as $technique)
                              <div class="technique">
                                    <h4 class="techniqe-title">{!! $technique->title !!}</h4>
                                    <div class="content">
                                          <h6>¿Qué es?</h6>
                                          <p>
                                                {!! $technique->about !!}
                                          </p>
                                          <h6>¿Dónde lo aplico?</h6>
                                          <p>
                                                {!! $technique->detail !!}
                                          </p>
                                          <h6>¿Qué se necesita?</h6>
                                          <p>
                                                Algo :c
                                          </p>
                                    </div>
                              </div>
                        @endforeach
                  </div>
            </div>
            <pre>
                  <?php 
                        var_dump($techniques)
                  ?>
            </pre>
            @include('default.footer')
            @endsection

