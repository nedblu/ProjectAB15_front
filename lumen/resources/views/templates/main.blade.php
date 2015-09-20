<!doctype html>
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        @if (Session::has('title'))
            <title>AlphaBeta | {{ Session::get('title') }}</title>
        @else
            <title>AlphaBeta | {{ ( isset($title) ) ? $title : false }}</title>
        @endif
        <meta name="description" content="Grupo Alpha Beta es una compañía con más de 20 años de experiencia que inicio con la distribución autorizada de los productos Epson y con el objetivo de brindarles a los clientes la mejor calidad y el mejor servicio.">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {!! Html::style('//fonts.googleapis.com/css?family=Raleway:400,300,600|Allura|Muli:400,300italic,300,400italic') !!}
        {!! Html::favicon('img/ABfavicon.png') !!}
        {!! Html::style('css/normalize.css') !!}
        {!! Html::style('css/skeleton.css') !!}
        {!! Html::style('css/font-awesome.css') !!}
        {!! Html::style('css/app.css') !!}
        {!! Html::style('css/tooltipster.css') !!}
        {!! Html::style('js/vendor/flexslider/flexslider.css') !!}
        {!! Html::script('js/vendor/modernizr-2.8.3.min.js'); !!}

        @if (Session::has('title'))
            <meta property="og:title" content="{{ Session::get('title') }}"/>
        @else
            <meta property="og:title" content="{{ ( isset($title) ) ? $title : false }}"/>
        @endif
        <meta property="og:description" content="Grupo Alpha Beta es una compañía con más de 20 años de experiencia que inicio con la distribución autorizada de los productos Epson y con el objetivo de brindarles a los clientes la mejor calidad y el mejor servicio."/>
        <meta property="og:type" content="article"/>
        
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        @yield('content')

    </body>
    {!! Html::script('js/vendor/jquery-1.11.3.min.js') !!}
    {!! Html::script('js/vendor/flexslider/jquery.flexslider-min.js'); !!}
    {!! Html::script('http://imsky.github.io/holder/holder.js'); !!}
    {!! Html::script('js/vendor/jquery.tooltipster.min.js'); !!}
    {!! Html::script('js/plugins.js'); !!}
    {!! Html::script('js/main.js'); !!}
    @yield('customScript')
    

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <!--<script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>-->
</html>
