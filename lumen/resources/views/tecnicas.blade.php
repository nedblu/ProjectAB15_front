@extends('templates.main')

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
                                          <h6 class="techniqe-title" onclick="collapseExpand('{!! $i !!}','icon{!! $i !!}')"><i class="fa fa-minus-square" id="icon{!! $i !!}"></i> {!! $technique->title !!}</h6>
                                          <div class="content showing" id="{!! $i !!}">
                                    @else
                                          <h6 class="techniqe-title" onclick="collapseExpand('{!! $i !!}','icon{!! $i !!}')"><i class="fa fa-plus-square" id="icon{!! $i !!}"></i> {!! $technique->title !!}</h6>
                                          <div class="content hidden" id="{!! $i !!}">
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

