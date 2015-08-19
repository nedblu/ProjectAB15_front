<!doctype html>
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>AlphaBeta ®|{!! $title !!}</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {!! Html::style('//fonts.googleapis.com/css?family=Raleway:400,300,600|Allura') !!}
        {!! Html::style('//fonts.googleapis.com/css?family=Muli:400,300italic,300,400italic') !!}
        {!! Html::favicon('img/ABfavicon.png') !!}
        {!! Html::style('css/normalize.css') !!}
        {!! Html::style('css/skeleton.css') !!}
        {!! Html::style('css/font-awesome.css') !!}
        {!! Html::style('css/main.css') !!}

        @yield('customStyles')
        {!! Html::script('js/vendor/jquery-1.11.3.min.js') !!}
        {!! Html::script('js/vendor/modernizr-2.8.3.min.js'); !!}
        @yield('customScript')
        
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        @yield('content')

    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>
</html>
