@extends('templates.main')
        @section('content')
            @include('default.header')
            @include('default.title')
            @include('default.slider')

            <div class="container">
                <section class="section-text twelve columns">
                    <h3>{!! $title !!}</h3>

                    <h5>Misión</h5>
                    <article>
                        <p>
                            En Grupo AlphaBeta nuestra misión es el compromiso de proporcionar a nuestros clientes soluciones integrales a sus necesidades de impresión digital, y las artes gráficas, con equipos de la más alta tecnología y reconocimiento a nivel internacional.
                        </p>
                    </article>

                    <h5>Valores</h5>

                    <article id="values">
                        <div class="four columns">
                            <div data-type="figure-abt"><i class="fa fa-lightbulb-o"></i></div>
                            <h6>Innovación</h6>
                            <p>
                                Buscamos la manera de mejorar nuestros servicios y crear nuevas oportunidades de negocio, dando soluciones novedosas a nuestros clientes.
                            </p>
                        </div>

                        <div class="four columns">
                            <div data-type="figure-abt"><i class="fa fa-users"></i></div>
                            <h6>Servicio</h6>
                            <p>
                                Conocemos las necesidades y expectativas de nuestros clientes para desarrollar y aplicar soluciones que aumente su satisfacción, con atención de manera eficiente en todo momento, con comportamiento ágil y efectivo.
                            </p>
                        </div>
                        <div class="four columns">
                            <div data-type="figure-abt"><i class="fa fa-comments"></i></div>
                            <h6>Escucha</h6>
                            <p>
                                Escuchamos con atención a nuestros clientes para conocer con exactitud sus necesidades y proponer soluciones adecuadas, escuchando con actitud abierta y respetuosa la opinión de todas las partes implicadas en alguna situación.
                            </p>
                        </div>
                    </article>
                </section> 
            </div>
            @include('default.footer')
            @endsection

