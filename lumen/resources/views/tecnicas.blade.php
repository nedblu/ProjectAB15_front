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
                        @foreach ($techniques as $technique)
                              <div class="tecnica">
                                    <div class="title"></div>
                                    <div class="content">
                                          <h5>¿Qué es?</h5>
                                          <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                          </p>
                                          <h5>¿Dónde lo aplico?</h5>
                                          <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                          </p>
                                          <h5>¿Qué se necesita?</h5>
                                          <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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

