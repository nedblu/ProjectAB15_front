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
                        {{-- */ $i = count($techniques) /* --}}
                        @foreach ($techniques as $technique)
                              <div class="technique">
                                    @if (--$i == count($techniques)-1)
                                          <h6 class="techniqe-title"><i class="fa fa-plus-square"></i> {!! $technique->title !!}</h6>
                                          <div class="content showing">
                                    @else
                                          <h6 class="techniqe-title"><i class="fa fa-minus-square"></i> {!! $technique->title !!}</h6>
                                          <div class="content hidden">
                                    @endif
                                    
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
                                                {!! $technique->detail !!}
                                          </p>
                                    </div>
                              </div>
                        @endforeach
                  </div>
            </div>
            
            @include('default.footer')
            @endsection

