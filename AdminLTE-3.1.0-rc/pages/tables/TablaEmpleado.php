<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | DataTables</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

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
                            <h1>Registros de la Tabla Cliente</h1>
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
            <a href="../../admin.html" class="brand-link">
                <img src="/AdminLTE-3.1.0-rc/assets/index/miniLogo.png" alt="TechnoShop Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8" />
                <span class="brand-text font-weight-light">TechnoShop</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="/AdminLTE-3.1.0-rc/assets/index/avatar.png" class="img-circle elevation-2" alt="User Image" />
                    </div>
                    <div class="info">
                        <a href="" class="d-block">Iamwicho_o</a>
                        <a class="d-block">Admin</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="../../admin.html" class="nav-link">
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
                                    <a href="../../cliente.html" class="nav-link">
                                        <i class="far fa-user nav-icon"></i>
                                        <p>Cliente</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../empleado.html" class="nav-link">
                                        <i class="far fa-id-card nav-icon"></i>
                                        <p>Empleado</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../laptop.html" class="nav-link">
                                        <i class="fas fa-laptop nav-icon"></i>
                                        <p>Laptop</p>
                                    </a>
                                </li>


                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Tablas
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../tables/TablaCliente.php" class="nav-link ">
                                        <i class="far fa-user nav-icon"></i>
                                        <p>Cliente</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../tables/TablaEmpleado.php" class="nav-link active">
                                        <i class="far fa-id-card nav-icon"></i>
                                        <p>Empleado</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../tables/TablaLaptop.php" class="nav-link ">
                                        <i class="fas fa-laptop nav-icon"></i>
                                        <p>Laptop</p>
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
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">


            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">

                            <!-- /.card -->

                            <div class="card">

                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="TEmpleado" class="table table-bordered ">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Rol</th>
                                                <th>Nombre</th>
                                                <th>Apellidos</th>
                                                <th>Edad</th>
                                                <th>Sexo</th>
                                                <th>Usuario</th>
                                                <th>Correo</th>
                                                <th>Teléfono</th>
                                                <th>Dirección</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            <?php
                                            include('database.php');
                                            $empleado = new Database();
                                            $listado = $empleado->readEmpleado();
                                            ?>
                                            <?php
                                            while ($row = mysqli_fetch_object($listado)) {
                                                $id_Empleado = $row->id_Empleado;
                                                $tipo = $row->tipo;
                                                $nombres = $row->nombres;
                                                $apellidos = $row->apellidos;
                                                $edad = $row->edad;
                                                $sexo = $row->sexo;
                                                $usuario = $row->usuario;
                                                $telefono = $row->telefono;
                                                $direccion = $row->direccion;
                                                $correo = $row->correo
                                            ?>
                                                <tr>
                                                    <td><?php echo $id_Empleado; ?></td>
                                                    <td><?php echo $tipo; ?></td>
                                                    <td><?php echo $nombres; ?></td>
                                                    <td><?php echo $apellidos; ?></td>
                                                    <td><?php echo $edad; ?></td>
                                                    <td><?php echo $sexo; ?></td>
                                                    <td><?php echo $usuario; ?></td>
                                                    <td><?php echo $correo; ?></td>
                                                    <td><?php echo $telefono; ?></td>
                                                    <td><?php echo $direccion; ?></td>
                                                    <td>
                                                        
                                                        <a  class="edit-btnE" data-toggle="modal"><i class="fas fa-pencil-alt">&#xE254;</i></a>
                                                        <a  class="delete-btnE" title="Eliminar" data-toggle="modal"><i class="fas fa-trash">&#xE872;</i></a>
                                                    </td>
                                                </tr>
                                            <?php
                                            }

                                            include 'MUEmpleado.php'


                                            ?>
                                           
                                           <div id="MDEmpleado" class="modal fade">
                                               <div class="modal-dialog">
                                                   <div class="modal-content">
                                                       <form action="deleteEmpleado.php" method="POST">
                                                           <div class="modal-body">
                                                               <input type="hidden" name="delete_idE" id="delete_idE"> 
                                                            
                                                            </input>
                                                               <p>Estas seguro que deseas borrar este elemento?</p>
                                                               <p>
                                                                   
                                                               </p>
                                                           </div>
                                                           <div class="modal-footer">
                                                               <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                                                               <input type="submit" name="deleteEmpleado" class="btn btn-danger" value="Eliminar">
                                                           </div>
       
                                                       </form>
                                                   </div>
                                               </div>
                                           </div>


                                        </tbody>
                                    </table>



                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">

        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../plugins/jszip/jszip.min.js"></script>
    <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {

            $('#TEmpleado').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": false,
                "autoWidth": true,
                "responsive": true,
            });
        });
    </script>
    <script>
        $(document).ready (function(){
            $('.delete-btnE').on('click',function(){
                
                $('#MDEmpleado').modal('show');
                $tr=$(this).closest('tr');
                var data=$tr.children("td").map(function(){
                    return $(this).text();
                }
                ).get();
                console.log(data);
                $('#delete_idE').val(data[0]);
            })
        }

        )
    </script>
    <script>
        $(document).ready (function(){
            $('.edit-btnE').on('click',function(){
                
                $('#MUEmpleado').modal('show');
                $tr=$(this).closest('tr');
                var data=$tr.children("td").map(function(){
                    return $(this).text();
                }
                ).get();
                console.log(data);
                $('#update_idE').val(data[0]);
                $('#nombres').val(data[2]);
                $('#apellidos').val(data[3]);
                $('#usuario').val(data[6]);
                $('#correo').val(data[7]);
                $('#telefono').val(data[8]);
                $('#direccion').val(data[9]);
                
            })
        }

        )
    </script>

</body>

</html>