<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Procinema - ADMIN</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="images/favicon.png">
    <link rel="shortcut icon" href="images/favicon.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php"><i class="menu-icon fa fa-laptop"></i>Inicio</a>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tablas</a>
                        <ul class="sub-menu children dropdown-menu">
                          <li><i class="fa fa-columns"></i><a href="tickets.php">Tickets</a></li>
                          <li><i class="fa fa-users"></i><a href="usuarios.php">Usuarios</a></li>
                          <li><i class="fa fa-users"></i><a href="clientes.php">Clientes</a></li>
                          <li><i class="fa fa-shopping-cart"></i><a href="confiteria.php">Confiteria</a></li>
                          <li><i class="fa fa-film"></i><a href="peliculas.php">Películas</a></li>
                          <li><i class="ti-layout-grid3-alt"></i><a href="salas.php">Salas</a></li>
                          <li><i class="fa fa-calendar"></i><a href="asignaciones.php">Asignaciones</a></li>
                          <li><i class="fa fa-book"></i><a href="auditoria.php">Auditoria</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-print"></i>Reportes</a>
                         <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-book"></i><a href="clientesMasPuntos">Clientes con más puntos</a></li>
                            <li><i class="fa fa-book"></i><a href="ventas.php">Reporte de ventas</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="widgets.html"> <i class="menu-icon fa fa-sign-out"></i>Salir</a>
                    </li>


                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php"><img src="images/logoC.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>

        </header>
        <!-- /#header -->


        <?php


        $codigo=$_GET["codigo"];
        $nombre=$_GET["nombre"];
        $correo=$_GET["correo"];
        $puntos=$_GET["puntos"];


        ?>

        <!-- Content -->
        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Procinema</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Procinema</a></li>
                                    <li><a href="#">Formulario</a></li>
                                    <li class="active">Editar Cliente</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">


                <div class="row">
                    <!--/.col-->



                    <div class="medio">
                        <div class="card">
                            <div class="card-header">
                                <strong>Editar Cliente</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="editarClienteSubmit.php?codigo=<?php echo $codigo ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nombre</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="nombre" value=<?php echo $nombre ?> class="form-control"><small class="form-text text-muted">Ingrese el nombre del cliente</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Correo electrónico</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="correo" value=<?php echo $correo ?> class="form-control"><small class="form-text text-muted">Ingrese el correo electrónico del cliente</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Puntos</label></div>
                                        <div class="col-12 col-md-9"><input type="number" id="text-input" name="puntos"  value=<?php echo $puntos ?> class="form-control"><small class="form-text text-muted">Ingrese la cantidad de puntos del cliente</small></div>
                                    </div>

                                    <div class="form-actions form-group">
                                      <button type="submit" class="btn btn-outline-success btn-sm">
                                          <i class="fa fa-floppy-o"></i> Guardar
                                      </button>
                                        <button type="return" class="btn btn-danger btn-sm">
                                            <i class="fa fa-times"></i> Cancelar
                                        </button>
                                        </div>

                                </form>

                            </div>

                        </div>

                    </div>



            </div>


        </div><!-- .animated -->
    </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2020 ProCinema
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by SS-Entertainment
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
