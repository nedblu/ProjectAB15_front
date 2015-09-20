@extends('templates.main')

      @section('content')
            @include('default.header')
            @include('default.title')
            @include('default.slider')

            <div class="container">
                <section class="section-text  twelve columns" id="sucursales">
                        <h3>{!! $title !!}</h3>
                        <article class="row">
                              <div class="five columns">
                                    <h5>Oficina Central</h5>
                                    <p>
                                          <i class="fa fa-building"></i> Av. Arcos #791, Jardines del bosque, <br>Guadalajara, Jal., México; C.P. 44520. <br><strong><i class="fa fa-phone"></i> Tel. (33) 364 745 30</strong>
                                    </p>
                                    <p>
                                          <a href="https://goo.gl/maps/WZJu3" target="_blank" title="Oficina General Map" class="button"><i class="fa fa-map-marker"></i> Ver en Google Maps</a>
                                    </p>
                              </div>
                              <div class="seven columns">
                                    <img src="http://maps.googleapis.com/maps/api/staticmap?center=20.664656,-103.384309&amp;zoom=15&amp;size=1000x300&amp;markers=color:blue%7Clabel:S%7C20.664656,-103.384309&amp;sensor=false" class="img-responsive img-thumbnail">
                              </div>       
                        </article>
                        <article class="row">
                              <div class="five columns">
                                    <h5>Sucursal Moroleon</h5>
                                    <p>
                                         <i class="fa fa-building"></i> Puebla # 722-A, El Progreso,<br>Moroleon, Guanajuato, México C.P. 038823. <br><strong><i class="fa fa-phone"></i> Tel. (445) 45 80 050</strong>
                                    </p>
                                    <p>
                                          <a href="https://goo.gl/maps/Z1Oex" target="_blank" title="Oficina General Map" class="button"><i class="fa fa-map-marker"></i> Ver en Google Maps</a>
                                    </p>
                              </div>
                              <div class="seven columns">
                                    <img src="http://maps.googleapis.com/maps/api/staticmap?center=20.125813,-101.182217&amp;zoom=15&amp;size=1000x300&amp;markers=color:blue%7Clabel:S%7C20.125813,-101.182217&amp;sensor=false" class="img-responsive img-thumbnail">
                              </div>       
                        </article>
                        <article class="row">
                              <div class="five columns">
                                    <h5>Sucursal México DF</h5>
                                    <p>
                                         <i class="fa fa-building"></i> Av. Universidad #1134-1, Xoco, Del. Benito Juárez,<br>Ciudad de México, Distrito Federal, C.P. 03330. <br><strong><i class="fa fa-phone"></i> Tel. (55) 443 340 65</strong>
                                    </p>
                                    <p>
                                          <a href="https://goo.gl/maps/AsxOZ" target="_blank" title="Oficina General Map" class="button"><i class="fa fa-map-marker"></i> Ver en Google Maps</a>
                                    </p>
                              </div>
                              <div class="seven columns">
                                    <img src="http://maps.googleapis.com/maps/api/staticmap?center=19.363264,-99.169235&amp;zoom=15&amp;size=1000x300&amp;markers=color:blue%7Clabel:S%7C19.363264,-99.169235&amp;sensor=false" class="img-responsive img-thumbnail">
                              </div>       
                        </article>
                </section> 
            </div>

      @include('default.footer')
      @endsection
