<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="{!! asset('dash/img/favicon.ico') !!}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Special Vans - Pasto</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{!! asset('dash/css/bootstrap.min.css') !!}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{!! asset('dash/css/animate.min.css') !!}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{!! asset('dash/css/light-bootstrap-dashboard.css?v=1.4.0') !!}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{!! asset('dash/css/demo.css') !!}" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{!! asset('dash/css/pe-icon-7-stroke.css') !!}" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="{!! asset('dash/img/sidebar-5.jpg') !!}">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{ url('dashboard-index') }}" class="simple-text">
                    SPECIAL VANS
                </a>
            </div>
            
            <ul class="nav">
                <li class="active" style="margin-left: -5%;">
                    <a href="{{ url('dashboard-index') }}">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li style="margin-left: -5%;">
                    <a>
                        <i class="pe-7s-map-2"></i>
                        <p>tours</p>
                    </a>
                <li style="margin-left: 12%;">
                    <i class="fa fa-map-marker"></i>
                    <a href="{{ url('registro-tour') }}">REGISTRAR TOUR</a>
                </li>
                <li style="margin-left: 12%;">
                    <i class="fa fa-list"></i>
                    <a href="{{ url('lista-tours') }}">LISTAR TOURS</a>
                </li>
                </li>

                <li style="margin-left: -5%;">
                    <a>
                        <i class="pe-7s-news-paper"></i>
                        <p>Publicidad</p>
                    </a>
                <li style="margin-left: 11%;">
                    <i class="fa fa-file-image-o"></i>
                    <a href="{{ url('agregar-publicidad') }}">AÑADIR PUBLICIDAD</a>
                <li style="margin-left: 11%;">
                    <i class="fa fa-list"></i>
                    <a href="{{ url('listar-publicidad') }}">LISTAR PUBLICIDAD</a>
                </li>
                </li>
                </li>

                <li style="margin-left: -5%;">
                    <a>
                        <i class="fa fa-file-image-o"></i>
                        <p>GALERÍA</p>
                    </a>
                <li style="margin-left: 11%;">
                    <i class="fa fa-camera-retro "></i>
                    <a href="{{ url('agregar-imagenes') }}">AÑADIR IMAGEN</a>
                <li style="margin-left: 11%;">
                    <i class="fa fa-list"></i>
                    <a href="{{ url('listar-imagenes') }}">LISTAR IMAGENES</a>
                </li>
                </li>
                </li>

                <li style="margin-left: -5%;">
                    <a href="notifications.html">
                        <i class="pe-7s-bell"></i>
                        <p>Notificaciones</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-lg hidden-md"></b>
									<p class="hidden-lg hidden-md">
										5 Notifications
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{ route('index')}}" >
                                <p>Cerrar Sesión</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Secciones Personalizadas Aquí -->
        @yield('contenido')
        <!--Final  Secciones Personalizadas Aquí -->

        <footer class="footer">
            <!--
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                -->
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="enlace">Special Vans</a>, Diseño e implementación Hache | Solutions Pasto
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="{!! asset('dash/js/jquery.3.2.1.min.js') !!}" type="text/javascript"></script>
	<script src="{!! asset('dash/js/bootstrap.min.js') !!}" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="{!! asset('dash/js/chartist.min.js') !!}"></script>

    <!--  Notifications Plugin    -->
    <script src="{!! asset('dash/js/bootstrap-notify.js') !!}"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="{!! asset('dash/js/light-bootstrap-dashboard.js?v=1.4.0') !!}"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="{!! asset('dash/js/demo.js') !!}"></script>


</html>
