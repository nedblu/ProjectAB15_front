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
                                          <h4 class="techniqe-title" onclick="collapseExpand('{!! $i !!}','icon{!! $i !!}')"><i class="fa fa-minus-square" id="icon{!! $i !!}"></i> {!! $technique->title !!}</h4>
                                          <div class="content showing" id="{!! $i !!}">
                                    @else
                                          <h4 class="techniqe-title" onclick="collapseExpand('{!! $i !!}','icon{!! $i !!}')"><i class="fa fa-plus-square" id="icon{!! $i !!}"></i> {!! $technique->title !!}</h4>
                                          <div class="content hidden" id="{!! $i !!}">
                                    @endif
                                          @if ($technique->image != null)
                                                <div class="subHeader"> 
                                                      {!! Html::image('content/techniques/' . $technique->image, $technique->title,['class' => 'img-responsive']) !!}<p class="about">{!! $technique->about !!}</p> 
                                                </div>
                                                <hr>
                                                <br/>
                                                <br/>
                                                {!! $technique->detail !!}
                                          @else
                                                 <div class="subHeader"> 
                                                      {!! Html::image('http://placehold.it/150x150/F3F3F3/F3F3F3/?text=150x150',$technique->title,['class' => 'img-responsive']) !!}
                                                     <p class="about">{!! $technique->about !!}</p> 
                                                </div>
                                                <hr>
                                                <br/>
                                                <br/>
                                                {!! $technique->detail !!}
                                          @endif
                                                
                                         
                                    </div>
                              </div>
                        @endforeach
                  </div>
            </div>

            @include('default.footer')
            @endsection

