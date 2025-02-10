<?php 
include('../../app/config/config.php'); 
session_start();

if (isset($_SESSION['u_usuario'])) {
    $user = $_SESSION['u_usuario'];

    $query = $pdo->prepare("SELECT * FROM tb_usuarios WHERE email = '$user' AND estado ='1'");
    $query->execute();
    $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach ($usuarios as $usuario) {
        $id_usuario_s = $usuario['id'];
        $ap_paterno_s = $usuario['ap_paterno'];
        $ap_materno_s = $usuario['ap_materno'];
        $nombres_s = $usuario['nombres'];
        $ci_s = $usuario['ci'];
        $cargo_s = $usuario['cargo'];
        $foto_perfil_s = $usuario['foto_perfil'];
        $link = "usuarios";
    }

    $emailP = $_GET["email"];
?>
<!DOCTYPE html>
<html>
<head>
    <?php include('../../layout/head.php'); ?>
    <title>Actualizar | Direcciones</title>
    <!-- jQuery y jQuery UI para autocompletado -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo $URL;?>/app/templeates/AdminLTE-3.0.5/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo $URL;?>/app/templeates/AdminLTE-3.0.5/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo $URL;?>/app/templeates/AdminLTE-3.0.5/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $URL;?>/app/templeates/AdminLTE-3.0.5/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <style>
        .highlight {
            background-color: yellow; /* Color de resaltado */
            transition: background-color 0.5s ease;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <?php include('../../layout/menu.php'); ?>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="container">
                    <br>
                    <div class="card card-primary card-outline">
                    <div class="card-header">
                                <h3 class="card-title"><span class="fa fa-location-arrow"></span><b>ACTUALIZAR DIRECCIONES</b></h3>
                                <div style="float:right;">
                                    <!-- <a href="create.php" class="btn btn-primary pull-right"> <span class="fa fa-user"></span> Nuevo Cliente</a> -->
                                </div>
                            </div> <!-- /.card-body -->
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-12">
                                    <table id="example1" class="table table-bordered table-sm">
                                        <thead>
                                        <tr>
                                            <th style="background: #87CEFA"><b>Zona</b></th>
                                            <th style="background: #87CEFA"><b>Direccion / Calle</b></th>
                                            <th style="background: #87CEFA"><b>Referencia</b></th>
                                            <th style="background: #87CEFA"><b>Acciones</b></th>
                                        </tr>
                                        </thead>
                                        <tbody id="usuarios-tbody">
                                        <?php
                                            $contador = 0;
                                            $query2 = $pdo->prepare("SELECT * FROM tb_direcciones WHERE email = '$emailP'");
                                            $query2->execute();
                                            $usuarios2 = $query2->fetchAll(PDO::FETCH_ASSOC);
                                            foreach ($usuarios2 as $usuario2) {
                                                $zona = $usuario2['zona'];
                                                $calle = $usuario2['calle'];
                                                $referencia = $usuario2['referencia'];
                                                $id = $usuario2['id'];
                                                $contador = $contador + 1;
                                                ?>
                                            <tr id="row-<?php echo $id_usuario; ?>">
                                                    <td><?php echo $zona;?></td>
                                                    <td><?php echo $calle;?></td>
                                                
                                                    <td><?php echo $referencia;?></td>

                                                    
                                                    <td style="width: 200px;">
                                                        <div style="display: flex; justify-content: center; gap: 5px; width: auto;">
                                                        <a href="editar-direcciones.php?id=<?php echo $id;?>" class="btn btn-success btn-xs">
                                                                <span class="fa fa-pen"></span> EDITAR</a>
                                                                <a href="controlador-direcciones.php?id=<?php echo $id;?>&estado=borrar" class="btn btn-danger btn-xs">
                                                                <span class="fa fa-trash"></span> ELIMINAR</a>
                                                        </div>
                                                    </td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- /.card-body -->
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include('../../layout/footer.php'); ?>
</div>
<?php include('../../layout/footer_link.php'); ?>
<!-- jQuery -->
<script src="<?php echo $URL;?>/app/templeates/AdminLTE-3.0.5/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo $URL;?>/app/templeates/AdminLTE-3.0.5/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables -->
    <script src="<?php echo $URL;?>/app/templeates/AdminLTE-3.0.5/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo $URL;?>/app/templeates/AdminLTE-3.0.5/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo $URL;?>/app/templeates/AdminLTE-3.0.5/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo $URL;?>/app/templeates/AdminLTE-3.0.5/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo $URL;?>/app/templeates/AdminLTE-3.0.5/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo $URL;?>/app/templeates/AdminLTE-3.0.5/dist/js/demo.js"></script>
    <!-- page script -->
    <script>
        $(function () {
            $('#example1').DataTable( {
                "responsive": true,
                "autoWidth": false,
                "pageLength": 5,
                "language":{
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "warning": "Mostrando _START_ a _END_ de _TOTAL_ Pedidos",
                    "infoEmpty": "Mostrando 0 a 0 de 0 Pedidos",
                    "infoFiltered": "(Filtrado de _MAX_ total Pedidos)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_ Direcciones",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar  Direccion:",
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
} else {
    header("Location: $URL/login");
}
?>
