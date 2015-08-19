@extends('templates.main')
	@section('customStyles')
		{!! Html::style('css/sucursales.css') !!}
	@endsection
      @section('content')
            @include('default.header')
            @include('default.title')
            @include('default.slider')
            <section id="sucursales">
            	<h3>Sucursales</h3>
            	<div class="sucursal">
            		<h5>Oficina Central</h5>
            		<a href="https://www.google.com.mx/maps/place/Los+Arcos+791,+Jardines+del+Bosque,+44520+Guadalajara,+Jal./@20.6645959,-103.3854246,15.74z/data=!4m2!3m1!1s0x8428ae750ec10b7d:0xb8d7a903ad08460a" target="_blank">{!! Html::image('img/ABoficinaCentral.png') !!} <span>Av. Arcos #791, Col. Jardines del bosque, Guadalajara, Jal., México; C.P. 44520 .Tel. (33) 364 745 30.</span></a>
            	</div>

            	<div class="sucursal">
            		<h5>Sucursal Moroleon</h5>
            		<a href="https://www.google.com.mx/maps/place/Puebla+722,+El+Progreso,+38823+Morole%C3%B3n,+Gto./@20.1254604,-101.1823887,16.22z/data=!4m2!3m1!1s0x842cfadd0f214847:0x663ce25ec8b318bd" target="_blank">{!! Html::image('img/ABsucursalMoroleon.png') !!} <span>Av. Puebla # 722A , Col El Progreso , Moroleon, Guanajuato, MéxicoC.P. 038823, Tel. (445) 45 80 050.</span></a>
            	</div>

            	<div class="sucursal">
            		<h5>Sucursal México</h5>
            		<a href="https://www.google.com.mx/maps/place/Av+Universidad+1134,+Xoco,+03100+Ciudad+de+M%C3%A9xico,+D.F./@19.3634465,-99.1704365,15.94z/data=!4m2!3m1!1s0x85d1ff950b69e437:0x2a2e8d762319c06" target="_blank">{!! Html::image('img/ABsucursalMexico.png') !!} <span>Av. Universidad # 1134-1, Col. Xoco, Delegación Benito Juarez, Ciudade de México, Distrito Federal ;C.P. 03330. Tel. (55) 443 340 65.</span></a>
            	</div>
            </section>
            @include('default.footer')
      @endsection

            {{-- Oficina central:
            Av. Arcos #791, Col. Jardines del bosque, Guadalajara, Jal., México; C.P. 44520 .Tel. (33) 364 745 30
            https://www.google.com.mx/maps/place/Los+Arcos+791,+Jardines+del+Bosque,+44520+Guadalajara,+Jal./@20.6645959,-103.3854246,15.74z/data=!4m2!3m1!1s0x8428ae750ec10b7d:0xb8d7a903ad08460a

            Sucursal Moroleon:
            Av. Puebla # 722A , Col El Progreso , Moroleon, Guanajuato, MéxicoC.P. 038823, Tel. (445) 45 80 050 
            https://www.google.com.mx/maps/place/Puebla+722,+El+Progreso,+38823+Morole%C3%B3n,+Gto./@20.1254604,-101.1823887,16.22z/data=!4m2!3m1!1s0x842cfadd0f214847:0x663ce25ec8b318bd
			
			Sucursal México:
			Av. Universidad # 1134-1, Col. Xoco, Delegación Benito Juarez, Ciudade de México, Distrito Federal ;C.P. 03330. Tel. (55) 443 340 65 
            https://www.google.com.mx/maps/place/Av+Universidad+1134,+Xoco,+03100+Ciudad+de+M%C3%A9xico,+D.F./@19.3634465,-99.1704365,15.94z/data=!4m2!3m1!1s0x85d1ff950b69e437:0x2a2e8d762319c06
             --}}

