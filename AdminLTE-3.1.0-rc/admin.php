<!DOCTYPE html>
<html lang="en">
<?php
ob_start();
session_start();

if (isset($_SESSION['usuario'])) {
    $usuarioingresado = $_SESSION['usuario'];
    $rol = $_SESSION['rol'];
}
?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>TechnoShop | Admin-Panel</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css" />
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css" />
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css" />
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css" />
    <link rel="shortcut icon" href="assets/favalogo.png" />
</head>

<body class="hold-transition sidebar-mini layout-fixed sidebar-collapse">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white justify-content-center">
            <!-- Left navbar links -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-12">
                        <div>
                            <h1>Panel de Administraci√≥n</h1>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>

            <!-- Right navbar links -->
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4 ">
            <!-- Brand Logo -->
            <a href="admin.php" class="brand-link">
                <img src="/AdminLTE-3.1.0-rc/assets/index/miniLogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8" />
                <span class="brand-text font-weight-light">TechnoShop</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" />
                    </div>
                    <div class="info">

                        <a href="" class="d-block"><?php echo $usuarioingresado; ?></a>
                        <a class="d-block"><?php echo $rol; ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="admin.php" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Resumen
                                    <i class="right fas "></i>
                                </p>
                            </a>

                        </li>




                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Formularios
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="cliente.html" class="nav-link">
                                        <i class="far fa-user nav-icon"></i>
                                        <p>Cliente</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="empleado.html" class="nav-link">
                                        <i class="far fa-id-card nav-icon"></i>
                                        <p>Empleado</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="laptop.html" class="nav-link">
                                        <i class="fas fa-laptop nav-icon"></i>
                                        <p>Laptop</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="descuento.html" class="nav-link">
                                        <i class="fas fa-dollar-sign nav-icon"></i>
                                        <p>Descuento</p>
                                    </a>
                                </li>

                              


                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Tablas
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/tables/TablaCliente.php" class="nav-link">
                                        <i class="far fa-user nav-icon"></i>
                                        <p>Cliente</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/tables/TablaEmpleado.php" class="nav-link">
                                        <i class="far fa-id-card nav-icon"></i>
                                        <p>Empleado</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/tables/TablaLaptop.php" class="nav-link">
                                        <i class="fas fa-laptop nav-icon"></i>
                                        <p>Laptop</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/tables/TablaDescuento.php" class="nav-link ">
                                        <i class="fas fa-dollar-sign nav-icon"></i>
                                        <p>Descuento</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Informes
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../../chart.html" class="nav-link">
                                        <i class="fas fa-tasks nav-icon"></i>
                                        <p>Ordenes</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../chart.html" class="nav-link">
                                        <i class="far fa-smile nav-icon"></i>
                                        <p>Visitantes</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="pages/tables/bitacora.php" class="nav-link ">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Bit√°cora
                                    <i class="right fas "></i>
                                </p>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="pages/tables/ordenes.php" class="nav-link ">
                                <i class="nav-icon fas fa-box"></i>
                                <p>
                                    √ďrdenes
                                    <i class="right fas "></i>
                                </p>
                            </a>
                        </li>



                        <footer class="footer">
                            <div class="container">

                                <form method="POST">
                                    <tr>
                                        <button type="submit" name="btncerrar" class="btn btn-primary">Cerrar sesi√≥n</button>
                                    </tr>
                                </form>
                                <?php
                                if (isset($_POST['btncerrar'])) {

                                    session_destroy();
                                    header('location: pages/examples/login-v2.html');
                                }
                                ?>
                            </div>
                        </footer>


                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Resumen:</h1>
                        </div>

                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <?php
                                    include('pages/tables/database.php');
                                    $numc = new Database();
                                    $listadop = $numc->countPedido();
                                    ?>
                                    <h3><?php echo $listadop; ?></h3 <p>Ordenes</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">M√°s informaci√≥n <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>568</h3>

                                    <p>Visitantes</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer">M√°s informaci√≥n <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-teal">
                                <div class="inner">
                                    <?php

                                    $listado = $numc->countCliente();
                                    ?>
                                    <h3><?php echo $listado; ?></h3>

                                    <p>Clientes</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="pages/tables/TablaCliente.php" class="small-box-footer">M√°s informaci√≥n<i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <?php
                                    $listadol = $numc->countLaptop();
                                    ?>
                                    <h3><?php echo $listadol; ?></h3>

                                    <p>Productos</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="pages/tables/TablaLaptop.php" class="small-box-footer">M√°s informaci√≥n<i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->
                    <!-- Main row -->

                    <!-- /.row (main row) -->
                </div>
                <!-- /.container-fluid -->
            </section>

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Resumen:</h1>
                        </div>


                        <!-- /.col -->

                    </div>
                    <!-- /.row -->

                    <div class="card bg-gradient-info">
                        <div class="card-header border-0">
                            <h3 class="card-title">
                                <i class="fas fa-th mr-1"></i>
                                Sales Graph
                            </h3>

                            <div class="card-tools">
                                <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn bg-info btn-sm" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas class="chart" id="line-chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer bg-transparent">
                            <div class="row">
                                <div class="col-4 text-center">
                                    <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60" data-fgColor="#39CCCC">

                                    <div class="text-white">Mail-Orders</div>
                                </div>
                                <!-- ./col -->
                                <div class="col-4 text-center">
                                    <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60" data-fgColor="#39CCCC">

                                    <div class="text-white">Online</div>
                                </div>
                                <!-- ./col -->
                                <div class="col-4 text-center">
                                    <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgColor="#39CCCC">

                                    <div class="text-white">In-Store</div>
                                </div>
                                <!-- ./col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.card-footer -->
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>

            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">

        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark fixed">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>

    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge("uibutton", $.ui.button);
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>