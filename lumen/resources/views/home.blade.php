@extends('templates.main')
        @section('content')
            @include('default.header')
            @include('default.title')
            @include('default.slider')

            <div class="container">
                <section class="section-text  twelve columns">
                    <h3>{!! $title !!}</h3>
                    <article>
                        <p>
                                Grupo Alpha Beta es una compañía con más de 20 años de experiencia que inicio con la distribución autorizada de los productos Epson y con el objetivo de brindarles a los clientes la mejor calidad y el mejor servicio.
                        </p>
                        <p>
                                Con el paso de los años Alpha Beta fue evolucionando hasta convertirse en una empresa de alto nivel nacional la cual brinda a sus clientes los mejores productos en los ámbitos: fotográficos,impresión digital, impresión textil, sublimación e impresión LED.
                        </p>
                        <p>
                                Alpha Beta es una empresa dispuesta a guiarlo en el proceso de aprendizaje, compra y venta de equipos, consumibles, entre otros con el fin de hacer que cada venta sea más que una simple compra.
                         </p>
                        <p id="signature">Atentamente: AlphaBeta</p>  
                    </article>
                </section> 
            </div>

        @include('default.footer')
        @endsection

