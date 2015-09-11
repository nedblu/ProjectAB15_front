<div id="bg-header" class="container-fluid">
    <div class="logo-float pull-left">
        {!! Html::image('img/ABlogo.png') !!}
    </div>
    <nav id="menu" class="container">
        <ul>
            <li><a href="{!! route('home') !!}" title="Inicio"><i class="fa fa-home"></i> Inicio</a></li>
            <li><a href="{!! route('acerca') !!}" title="Acerca"><i class="fa fa-user"></i> Acerca</a></li>
            <li><a href="{!! route('reqCatalogo') !!}" title="Catálogo"><i class="fa fa-th"></i> Catálogo</a></li>
            <li><a href="{!! route('reqTecnicas') !!}" title="Técnicas"><i class="fa fa-magic"></i> Técnicas</a></li>
            <li><a href="{!! route('sucursales') !!}" title="Sucursales"><i class="fa fa-building"></i> Sucursales</a></li>
            <li><a href="{!! route('contacto') !!}" title="Contacto"><i class="fa fa-paper-plane-o"></i> Contacto</a></li>    
        </ul>
    </nav>
</div>


