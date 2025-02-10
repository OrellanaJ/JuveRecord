<?php include('../../app/config/config.php');

session_start();
if(isset($_SESSION['u_usuario'])) {
    $user = $_SESSION['u_usuario'];
    //echo "session de ".$user; ///////////para comprobar sesion probar esto

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
        $link="clientes";
    }
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <?php include('../../layout/head.php');?>
        <title>Lista | Clientes</title>

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
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title"><span class="fa fa-users"></span><b>Listado de Clientes</b></h3>
                                <div style="float:right;">
                                <a href="create.php" class="btn btn-primary pull-right"> <span class="fa fa-user-plus"></span> Nuevo Cliente</a>
                                </div>
                                
                            </div> <!-- /.card-body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <table id="example1" class="table table-bordered table-sm">
                                        <thead>
                                        <th style="background: #87CEFA"><b>N°</b></th>
                                            <th style="background: #87CEFA"><b>Nombre Completo</b></th>
                                            <th style="background: #87CEFA"><b>Identidad</b></th>
                                            <th style="background: #87CEFA"><b>Celular</b></th>
                                            <th style="background: #87CEFA"><b>Correo</b></th>
                                            <th style="background: #87CEFA"><b>Direcciones</b></th>
                                            <th style="background: #87CEFA"><b>ACCIONES</b></th>
                                        </thead>  
                                        <tbody id="usuarios-tbody">
                                        <?php
                                            $contador = 0;
                                            $query2 = $pdo->prepare("SELECT * FROM tb_usuarios WHERE cargo = 'CLIENTE' AND estado ='1'");
                                            $query2->execute();
                                            $usuarios2 = $query2->fetchAll(PDO::FETCH_ASSOC);
                                            foreach ($usuarios2 as $usuario2) {
                                                $id_usuario = $usuario2['id'];
                                                $ap_paterno = $usuario2['ap_paterno'];
                                                $ap_materno = $usuario2['ap_materno'];
                                                $nombres = $usuario2['nombres'];
                                                $ci = $usuario2['ci'];
                                                $genero = $usuario2['genero'];
                                                $celular = $usuario2['celular'];
                                                $email = $usuario2['email'];
                                                $fecha_nacimiento = $usuario2['fecha_nacimiento'];
                                                $cargo = $usuario2['cargo'];
                                                $foto_perfil = $usuario2['foto_perfil'];
                                                $contador = $contador + 1;
                                                ?>
                                                <tr>
                                                    <td><?php echo $contador;?></td>
                                                    <td><?php echo $nombres." ".$ap_paterno." ".$ap_materno;?></td>
                                                    <td><?php echo $ci;?></td>
                                                    <td>
                                                        <a href="<?php echo "https://api.whatsapp.com/send?phone=591".$celular  ;?>"
                                                         class="btn btn-success btn-xs" target="_blank">
                                                            <i class="fab fa-whatsapp"></i>
                                                            <?php echo $celular;?>
                                                        </a>
                                                    </td>
                                                    <td><?php echo $email;?></td>

                                                    <td>
                                                        <?php
                                                        $contador_de_direciones = 0;
                                                        $query3 = $pdo->prepare("SELECT * FROM tb_mis_direcciones WHERE email = '$email' AND estado ='1'");
                                                        $query3->execute();
                                                        $dires = $query3->fetchAll(PDO::FETCH_ASSOC);
                                                        foreach ($dires as $dire) {
                                                            $id_dire = $dire['id'];
                                                            $nombre_direccion = $dire['nombre_direccion'];
                                                            $direccion = $dire['direccion'];
                                                            $referencia = $dire['referencia'];
                                                            $contador_de_direciones = $contador_de_direciones + 1;
                                                            ?>
                                                            <div class=""
                                                                 style="font-size: 12px;
                                                                 background: rgba(40,145,238,0.22);border-radius: 10px">
                                                                <h6 class="alert-heading" style="
                                                                margin-left: 10px;margin-right: 10px">
                                                                   <i class="fa fa-map-marked-alt"></i> <b><?php echo $nombre_direccion;?></b>
                                                                </h6>
                                                                <p style="margin-left: 10px">
                                                                    <?php echo $direccion;?> <br>
                                                                    <span style="margin-top: 5px;color: #bc32ee">Ref. <?php echo $referencia;?></span>
                                                                    <span style="text-align: right;color: #0f2d54"> - Dirección <?php echo $contador_de_direciones;?></span>
                                                                </p>

                                                                <td>
                                                                <a href="update.php?id=<?php echo $id_usuario;?>" class="btn btn-success btn-xs">
                                                                <span class="fa fa-pen"></span> EDITAR</a>
                                                                <a href="delete.php?id=<?php echo $id_usuario;?>" class="btn btn-danger btn-xs">
                                                                <span class="fa fa-trash"></span> ELIMINAR</a>
                                                                </td>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>
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
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

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
        <?php include('../../layout/footer.php');?>
    </div>
    <?php include('../../layout/footer_link.php');?>
    </body>
    </html>
    <?php
}else{
    header("Location: $URL/login");
}
?>