<?php include('../../app/config/config.php');

session_start();
if(isset($_SESSION['u_usuario'])) {
    $user = $_SESSION['u_usuario'];
    //echo "session de ".$user; ///////////para comprobar sesion

    ?>
<!DOCTYPE html>
<html>

<head>
    <?php //include('../../layout/head.php');?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="<?php echo $URL;?>/app/templeates/AdminLTE-3.0.5/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet"
        href="<?php echo $URL;?>/app/templeates/AdminLTE-3.0.5/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?php echo $URL;?>/app/templeates/AdminLTE-3.0.5/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $URL;?>/app/templeates/AdminLTE-3.0.5/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <title>Imprimir Reporte</title>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php include('../../layout/menu.php');?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="container">
                        <br>
                        <span
                            style="font-size: 35px; font-weight: bold; color: #1E90FF; display: block; text-align: center;">
                            RESPORTES DE PEDIDOS FINALIZADOS
                        </span>
                        <br>

                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title"><span class="fa fa-store"></span><b>Lista de productos vendidos</b></h3>
                            </div> <!-- /.card-body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <?php
                                            $fechaInit = date("Y-m-d", strtotime($_POST['f_ingreso']));
                                            $fechaFin  = date("Y-m-d", strtotime($_POST['f_fin']));
                                            $producto = $_POST['producto'];
                                            if($producto === 'todas') {
                                                $sqlSolicitudes = $pdo->prepare("SELECT * FROM tb_ventas WHERE (fecha_venta BETWEEN ('$fechaInit') AND ('$fechaFin'))");
                                            } else {
                                                $sqlSolicitudes = $pdo->prepare("SELECT * FROM tb_ventas WHERE (fecha_venta BETWEEN ('$fechaInit') AND ('$fechaFin')) AND producto = '$producto'");
                                            }
                                            $sqlSolicitudes->execute();
                                            $total = $sqlSolicitudes->rowCount();
                                        ?>


                                        <h4 class="mb-0 text-gray-800">Reporte de
                                            <?php echo $fechaInit; ?> a <?php echo $fechaFin; ?>
                                            <!-- de <?php echo $producto; ?> -->
                                        </h4><br>
                                        <?php
                                        if ($producto !== 'todas') {
                                        ?>
                                        <div style="display:flex; justify-content: center">
                                            <h3><?php echo $producto; ?> </h3>
                                        </div>

                                        <?php
                                        } else {
                                        ?>
                                        <div style="display:flex; justify-content: center">
                                            <h3><b>Todos Los Productos</b></h3>
                                        </div>
                                        <?php
                                        }
                                        ?>


                                        <form method="Post"
                                            action="descargar.php?f_ingreso=<?php echo $fechaInit ?>&f_fin=<?php echo $fechaFin ?>&producto=<?php echo $producto ?>">
                                            <button class="btn btn-danger" type="submit"><b>IMPRIMIR REPORTE EN
                                                PDF</b></button>
                                        </form>
                                        <?php echo '<strong>Total: </strong> ('. $total .')';?>
                                        <table class="table table-hover table-bordered" style="width: 100%;">
                                            <thead style="background: #00BFFF;">
                                                <tr>
                                                    <th>Producto</th>
                                                    <th>Fecha</th>
                                                    <th>Vendedor</th>
                                                    <th>Cliente</th>
                                                    <th>Cantidad</th>
                                                    <th>Precio Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $usuarios = $sqlSolicitudes->fetchAll(PDO::FETCH_ASSOC);
                                                foreach ($usuarios as $usuario) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $usuario['producto']; ?></td>
                                                    <td><?php echo $usuario['fecha_venta']; ?></td>
                                                    <td><?php echo $usuario['email_vendedor']; ?></td>
                                                    <td><?php echo $usuario['email_cliente']; ?></td>
                                                    <td><?php echo $usuario['cantidad']; ?></td>
                                                    <td><?php echo $usuario['precio_total']; ?></td>

                                                </tr>
                                                <?php } ?>
                                                <tr>
                                                    <td style="font-weight: bold;" colspan="5">Total:</td>
                                                    <td style="
                                                    background: red;
                                                    color: white;
                                                    font-weight: bold;
                                                    ">
                                                        <?php 
                                                    $totalPrecio = array_sum(array_column($usuarios, 'precio_total'));
                                                    echo $totalPrecio. ' Bs';
                                                    ?>
                                                    </td>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- /.card-body -->
                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php include('../../layout/footer.php');?>
    </div>
    <?php //include('../../layout/footer_link.php');?>
    <!-- jQuery -->
    <script src="<?php echo $URL;?>/app/templeates/AdminLTE-3.0.5/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo $URL;?>/app/templeates/AdminLTE-3.0.5/plugins/bootstrap/js/bootstrap.bundle.min.js">
    </script>
    <!-- DataTables -->
    <script src="<?php echo $URL;?>/app/templeates/AdminLTE-3.0.5/plugins/datatables/jquery.dataTables.min.js"></script>
    <script
        src="<?php echo $URL;?>/app/templeates/AdminLTE-3.0.5/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js">
    </script>
    <script
        src="<?php echo $URL;?>/app/templeates/AdminLTE-3.0.5/plugins/datatables-responsive/js/dataTables.responsive.min.js">
    </script>
    <script
        src="<?php echo $URL;?>/app/templeates/AdminLTE-3.0.5/plugins/datatables-responsive/js/responsive.bootstrap4.min.js">
    </script>
    <!-- AdminLTE App -->
    <script src="<?php echo $URL;?>/app/templeates/AdminLTE-3.0.5/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo $URL;?>/app/templeates/AdminLTE-3.0.5/dist/js/demo.js"></script>
    <!-- page script -->
    <script>
    $(function() {
        $('#example1').DataTable({
            "responsive": true,
            "autoWidth": false,
            "pageLength": 5,
            "language": {
                "decimal": "",
                "emptyTable": "No hay información",
                "warning": "Mostrando _START_ a _END_ de _TOTAL_ Pedidos",
                "infoEmpty": "Mostrando 0 a 0 de 0 Pedidos",
                "infoFiltered": "(Filtrado de _MAX_ total Pedidos)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Pedidos",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscador de Pedidos:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            }
        });
    });
    </script>
</body>

</html>
<?php
}else{
    header("Location: $URL/login");
}
?>