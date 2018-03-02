<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-icon" sizes="120x120" href="/apple-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/ms-icon-150x150.png" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    
    <!-- Bootstrap v4.0.0-beta -->
    <link href="{{ asset('assets/vendor_components/bootstrap/dist/css/bootstrap.css', \App::environment() == 'production') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('assets/vendor_components/font-awesome/css/font-awesome.css', \App::environment() == 'production') }}" rel="stylesheet">
    <!-- Ionicons -->
    <link href="{{ asset('assets/vendor_components/Ionicons/css/ionicons.css', \App::environment() == 'production') }}" rel="stylesheet">
    <!-- jvectormap -->
    <link href="{{ asset('assets/vendor_components/jvectormap/jquery-jvectormap.css', \App::environment() == 'production') }}" rel="stylesheet">

    <!-- Theme style -->
    <link href="{{ asset('css/master_style.css', \App::environment() == 'production') }}" rel="stylesheet">
    <!-- Maximum Admin Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link href="{{ asset('css/skins/skin-green.css', \App::environment() == 'production') }}" rel="stylesheet">
    <!-- Custom style -->
    <link href="{{ asset('css/custom.css', \App::environment() == 'production') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <style type="text/css">
        .user-panel{background-image: url("/images/user-bg/user-bg-green.jpg")}
    </style>

    @yield('page_css');

</head>

<body class="hold-transition skin-green sidebar-mini fixed">
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="{{ route('map') }}" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">Visión Digital</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Visión Digital</b></span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="d-none d-sm-inline-block">{{ Auth::user()->NOMBRE }}&nbsp; &nbsp;<i class="fa fa-caret-down"></i></span>
                        </a>
                        <ul class="dropdown-menu scale-up">
                          <!-- Menu Footer-->
                          <div class="user-footer">
                            <div class="pull-right">
                              <a href="{{ route('logout') }}" class="btn btn-default btn-flat">Cerrar sesión</a>
                            </div>
                          </div>
                        </ul>
                    </li>
                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class="dropdown notifications-menu hide">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell"></i>
                        <span class="label label-warning">3</span>
                        </a>
                        <ul class="dropdown-menu scale-up">
                          <li class="header">Tienes 3 eventos</li>
                          <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu inner-content-div">
                              <li>
                                <a href="#">
                                <i class="fa fa-users text-aqua"></i> Evento 1.
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                <i class="fa fa-users text-aqua"></i> Evento 2.
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                <i class="fa fa-users text-aqua"></i> Evento 3.
                                </a>
                              </li>
                            </ul>
                          </li>
                          <li class="footer"><a href="#">Ver todos</a></li>
                        </ul>
                    </li>
                </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="image">
                      <img src="{{ Auth::user()->URLAVATAR }}" class="rounded-circle" alt="User Image">
                    </div>
                    <div class="info">
                      <p>{{ Auth::user()->NOMBRE }}</p>
                      <a href="#">{{ Auth::user()->DESCRIPCION_ROL }}</a>
                      <span id="id_user" style="display: none">{{ Auth::user()->IDUSUARIO }}</span>
                    </div>
                </div>
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MENÚ DEL SISTEMA</li>
                    @if( Auth::user()->IDROL == 1)
                        <!-- Menú solo para Administradoes -->
                        <li class="<?php echo (strpos(Request::url(), 'calendario')) ? 'active' : '' ?>">
                          <a href="{{ route('calendar') }}">
                            <i class="fa fa-calendar"></i> <span>Calendario</span>
                          </a>
                        </li>
                        <li class="treeview <?php if( strpos(Request::url(), 'mapa-eventos') || strpos(Request::url(), 'mapa-usuarios')  )  {echo "menu-open";}?>">
                          <a href="#">
                            <i class="fa fa-map-o"></i> <span>Mapas</span>
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                          </a>
                          <ul class="treeview-menu" style="display: <?php if( strpos(Request::url(), 'mapa-eventos') || strpos(Request::url(), 'mapa-usuarios')  )  {echo "block";} else {echo "none";}?> ">
                            <li class="<?php echo (strpos(Request::url(), 'mapa-eventos')) ? 'active' : '' ?>">
                                <a href="{{ route('map') }}"><i class="fa fa-calendar"></i> Mapa Eventos</a>
                            </li>
                            <li class="<?php echo (strpos(Request::url(), 'mapa-usuarios')) ? 'active' : '' ?>">
                                <a href="{{ route('usermap') }}"><i class="fa  fa-home"></i> Mapa Escuelas</a>
                            </li>
                          </ul>
                        </li>
                        <li class="treeview <?php if( strpos(Request::url(), 'usuarios') || strpos(Request::url(), 'categorias') || strpos(Request::url(), 'actividades')  )  {echo "menu-open";}?>">
                          <a href="#">
                            <i class="fa fa-cog"></i> <span>Configuración</span>
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                          </a>
                          <ul class="treeview-menu" style="display: <?php if( strpos(Request::url(), 'usuarios') || strpos(Request::url(), 'categorias') || strpos(Request::url(), 'actividades')  )  {echo "block";} else {echo "none";}?>">
                            <li class="<?php echo (strpos(Request::url(), 'usuarios')) ? 'active' : '' ?>">
                                <a href="{{ route('users') }}"><i class="fa fa-users"></i> Usuarios</a>
                            </li>
                            <li class="<?php echo (strpos(Request::url(), 'categorias')) ? 'active' : '' ?>">
                                <a href="{{ route('categories') }}"><i class="fa fa-list-alt"></i> Categorías</a>
                            </li>
                            <li class="<?php echo (strpos(Request::url(), 'actividades')) ? 'active' : '' ?>">
                                <a href="{{ route('activities') }}"><i class="fa fa-tasks"></i> Actividades</a>
                            </li>
                          </ul>
                        </li>
                        <li class="<?php echo (strpos(Request::url(), 'chat')) ? 'active' : '' ?>">
                          <a href="{{ route('chat') }}">
                            <i class="fa fa-wechat"></i> <span>Chat</span>
                          </a>
                        </li>
                        <!-- Termina Menú de Administradores -->
                    @endif
                    <!-- Menú de Analistas -->
                    <li class="treeview <?php if( strpos(Request::url(), 'estadisticas') || strpos(Request::url(), 'operacion') || strpos(Request::url(), 'eventos')  )  {echo "menu-open";}?>">
                      <a href="#">
                      <i class="fa fa-bar-chart"></i> <span>Reportes</span>
                      <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                      </span>
                      </a>
                      <ul class="treeview-menu" style="display: <?php if( strpos(Request::url(), 'estadisticas') || strpos(Request::url(), 'operacion') || strpos(Request::url(), 'eventos') )  {echo "block";} else {echo "none";}?>">
                        <li class="<?php echo (strpos(Request::url(), 'estadisticas')) ? 'active' : '' ?>"><a href="{{ route('statistics') }}"><i class="fa fa-line-chart"></i> Estadísticas</a></li>
                        <li class="<?php echo (strpos(Request::url(), 'operacion')) ? 'active' : '' ?>"><a href="{{ route('operation') }}"><i class="fa fa-users"></i> Operación</a></li>
                        <li class="<?php echo (strpos(Request::url(), 'eventos')) ? 'active' : '' ?>"><a href="{{ route('events') }}"><i class="fa fa-calendar"></i> Eventos</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="{{ route('logout') }}">
                        <i class="fa fa-sign-out"></i> <span>Salir</span>
                      </a>
                    </li>
                    <!-- Termina Menú de Analistas -->
                </ul>
            </section>
            <!-- /.sidebar -->
            <div class="sidebar-footer">
              <div class="pull-right">
                <a href="/logout" class="link" data-toggle="tooltip" title="" data-original-title="Cerrar sesión"><i class="fa fa-power-off"></i></a>
              </div>
            </div>
        </aside>


        @yield('content')


        <footer class="main-footer">
            FOM 2018 | &copy; Derechos Reservados.
        </footer>

        <div id="modal" class="loader-modal hide">
            <div class="loader">
                <span class="dot dot_1"></span>
                <span class="dot dot_2"></span>
                <span class="dot dot_3"></span>
                <span class="dot dot_4"></span>
            </div>
            <p id="loaderText" class="loader-text"></p>
        </div>

        <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- Scripts -->
    
    <!-- jQuery 3 -->
    <script src="{{ asset('assets/vendor_components/jquery/dist/jquery.js', \App::environment() == 'production') }}"></script>
    <!-- popper -->
    <script src="{{ asset('assets/vendor_components/popper/src/popper.min.js', \App::environment() == 'production') }}"></script>
    <!-- Bootstrap v4.0.0-beta -->
    <script src="{{ asset('assets/vendor_components/bootstrap/dist/js/bootstrap.js', \App::environment() == 'production') }}"></script>
    <!-- DataTables -->
    <script src="{{ asset('assets/vendor_components/datatables.net/js/jquery.dataTables.min.js', \App::environment() == 'production') }}"></script>
    <script src="{{ asset('assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js', \App::environment() == 'production') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('assets/vendor_components/fastclick/lib/fastclick.js', \App::environment() == 'production') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('assets/vendor_components/jquery-sparkline/dist/jquery.sparkline.js', \App::environment() == 'production') }}"></script>
    <!-- jvectormap  -->
    <script src="{{ asset('assets/vendor_plugins/jvectormap/jquery-jvectormap-1.2.2.min.js', \App::environment() == 'production') }}"></script>
    <script src="{{ asset('assets/vendor_plugins/jvectormap/jquery-jvectormap-world-mill-en.js', \App::environment() == 'production') }}"></script>
    <!-- SlimScroll -->
    <script src="{{ asset('assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js', \App::environment() == 'production') }}"></script>
    
    <!-- Maximum_admin App -->
    <script src="{{ asset('js/template.js', \App::environment() == 'production') }}"></script>
    
    <!-- Maximum_admin for demo purposes -->
    <script src="{{ asset('js/demo.js', \App::environment() == 'production') }}"></script>
    <!-- This is data table -->
    <!-- script src="assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js', \App::environment() == 'production') }}"></script -->
    <!-- maximum_admin for Data Table -->
    <script src="{{ asset('js/pages/data-table.js', \App::environment() == 'production') }}"></script>

    <!-- Custom functions -->
    <script src="{{ asset('js/custom.js', \App::environment() == 'production') }}"></script>

    @yield('page_js')

    

</body>
</html>

<?php if( strpos(Request::url(), 'URL1') || strpos(Request::url(), 'URL2')  )  {echo "menu-open";}?>