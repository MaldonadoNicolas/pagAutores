<header id="header">

<nav class="navbar navbar-inverse sombra-caja" role="banner">
    <div class="container ">
        <div class="navbar-header">
            <a type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
        </div>
        <div class="collapse navbar-collapse navbar-right">
            <ul id="nav-top" class="nav navbar-nav">
                <li><a href="index.php?action=index"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a></li>
                <li><a href="index.php?action=nuevo"><i class="fa fa-users" aria-hidden="true"></i> Nuevo</a></li>
                <li><a href="index.php?action=gestion"><i class="fa fa-users" aria-hidden="true"></i> Gestion</a></li>
            </ul>
        </div>
    </div><!--/.container-->
</nav><!--/nav-->

<!--Barra superior que se muestra al hacer scroll (escondida al principio)-->
<nav id="navbar-fixed" class="hide navbar navbar-inverse sombra-caja" role="banner">
    <div class="container ">
        <div class="navbar-header">
            <a type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
                <a class="navbar-brand" href="index.php?action=index"><img id="logo"src="images/logos/logo_nuevo_2.png" class="img-responsive"alt="logo"></a>
            <!--<a class="navbar-brand" href="index.php?action=index"style="color:#434A54;font-size: 2em;padding-bottom: 10px;">MAXIMO VIAJES</a>-->
        </div>
        <div class="collapse navbar-collapse navbar-right">
            <ul id="nav-mini"  class="nav navbar-nav">
                <li><a href="index.php?action=index"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a></li>
                <li><a href="index.php?action=nosotros"><i class="fa fa-users" aria-hidden="true"></i> Nosotros</a></li>
                <li><a href="index.php?action=servicios"><i class="fa fa-users" aria-hidden="true"></i> Servicios</a></li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-car" aria-hidden="true"></i> Vehiculos</a>
                  <ul class="dropdown-menu">
                    <li style="width:10px!important;"><a href="index.php?action=vehiculos-combi12">Combi</a></li>
                    <li style="width:10px!important;"><a href="index.php?action=vehiculos-van">Van Ejecutiva</a></li>
                    <li style="width:10px!important;"><a href="index.php?action=vehiculos-bus64">Bus</a></li>
                  </ul>
                </li>
                <li><a href="index.php?action=galeria"><i class="fa fa-camera" aria-hidden="true"></i> Galeria</a></li>
                <!--<li><a href="index.php?action=seguridad"><i class="fa fa-lock" aria-hidden="true"></i> Seguridad</a></li>-->
                <li><a id="contacto" href="#mapa-contacto"><i class="fa fa-envelope" aria-hidden="true"></i> Contacto</a></li>

            </ul>
        </div>
    </div><!--/.container-->
</nav><!--/nav-->

</header><!--/header-->