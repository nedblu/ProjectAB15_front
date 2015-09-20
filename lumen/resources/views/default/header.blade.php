<div id="bg-header" class="container-fluid">
    <div class="logo-float pull-left">
        {!! Html::image('img/ABlogo.png') !!}
    </div>
    <nav id="menu" class="container">
        <ul>
            <li><a href="{!! route('home') !!}" title="Inicio"><i class="fa fa-home"></i> <span class="it-test">Inicio<span></a></li>
            <li><a href="{!! route('acerca') !!}" title="Acerca"><i class="fa fa-user"></i> <span class="it-test">Acerca</span></a></li>
            <li><a href="{!! route('reqCatalogo') !!}" title="Catálogo"><i class="fa fa-th"></i> <span class="it-test">Catálogo</span></a></li>
            <li><a href="{!! route('reqTecnicas') !!}" title="Técnicas"><i class="fa fa-magic"></i> <span class="it-test">Técnicas</span></a></li>
            <li><a href="{!! route('sucursales') !!}" title="Sucursales"><i class="fa fa-building"></i> <span class="it-test">Sucursales</span></a></li>
            <li><a href="{!! route('contacto') !!}" title="Contacto"><i class="fa fa-paper-plane-o"></i> <span class="it-test">Contacto</span></a></li>    
        </ul>
    </nav>
</div>


