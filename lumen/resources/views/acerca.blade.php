@extends('templates.main')
        @section('content')
            @include('default.header')
            @include('default.title')
            @include('default.slider')
            <section class="section-text">
                <h3>{!! $title !!}</h3>

                <h5>Misión</h5>
                <p>
                    En Grupo AlphaBeta nuestra misión es el compromiso de proporcionar a nuestros clientes soluciones integrales a sus necesidades de impresión digital, y las artes gráficas, con equipos de la más alta tecnología y reconocimiento a nivel internacional.
                </p>

                <h5>Valores</h5>
                <h6>Innovación</h6>
                <p>
                    Buscamos la manera de mejorar nuestros servicios y crear nuevas oportunidades de negocio, dando soluciones novedosas a nuestros clientes .
                </p>

                <h6>Servicio</h6>
                <p>
                    Conocemos las necesidades y expectativas de nuestros clientes para desarrollar y aplicar soluciones que aumente su satisfacción, con atención de manera eficiente en todo momento, con comportamiento ágil y efectivo.
                </p>

                <h6>Escucha</h6>
                <p>
                    Escuchamos con atención a nuestros clientes para conocer con exactitud sus necesidades y proponer soluciones adecuadas, escuchando con actitud abierta y respetuosa la opinión de todas las partes implicadas en alguna situación.
                </p>

                <h6 id="signature">Atentamente: AlphaBeta®</h6>    
            </section>
            @include('default.footer')
            @endsection

