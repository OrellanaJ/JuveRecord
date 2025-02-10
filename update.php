<?php 
include('../../app/config/config.php');
include('../../modelos/usuario.modelo.php');


$id_usuario = $_GET['id'];


session_start();
if(isset($_SESSION['u_usuario'])) {
    ?>
<!DOCTYPE html>
<html>

<head>
    <?php include('../../layout/head.php');?>
    <title>Actualizar Producto</title>
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
                                <h3 class="card-title"><span class="fa fa-box"></span><b>Actualizar Producto</b></h3>
                            </div> <!-- /.card-body -->
                            <div class="card-body">
                                <?php
                                $query = $pdo->prepare("SELECT * FROM tb_productos WHERE id = '$id_usuario'");
                                $query->execute();
                                $productos = $query->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($productos as $producto) {
                                
                                $id = $producto['id'];
                                $nombre = $producto['nombre'];
                                $volumen = $producto['volumen_l'];
                                $unidades = $producto['unidades'];
                                $stock = $producto['stock'];
                                $preciooooo = $producto['precio'];

                                }
                                ?>

                                <form action="controller_update.php" method="post">
                                    <div class="row">
                                        <div class="col-12">
                                                <input type="hidden" class="form-control" value="<?php echo $id; ?>" name="id">

                                            <div class="form-group">
                                                <label for="nombres">Nombre de Producto</label>
                                                <input type="text" class="form-control" value="<?php echo $nombre; ?>" name="nombre" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="ap_materno">Cantidad Stock</label>
                                                <input type="text" class="form-control" value="<?php echo $volumen; ?>" name="volumen" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="fecha_nacimiento">Unidades</label>
                                                <input type="text" class="form-control" value="<?php echo $unidades; ?>" name="unidades" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="celular">Paquete</label>
                                                <input type="text" class="form-control" value="<?php echo $stock; ?>" name="stock" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Precio en Bs.</label>
                                                <input type="text" class="form-control" value="<?php echo $preciooooo; ?>" name="precio" required>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <a href="<?php echo $URL; ?>/web/productos"
                                        class="btn btn-success btn-lg">Cancelar</a>
                                    <input type="submit" id="crearBtn" class="btn btn-primary btn-lg"
                                        value="Actualizar Producto">
                                    <script>
                                    function registro() {
                                        alert('Producto registrado correctamente')
                                    }
                                    </script>
                                </form>
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
    <?php include('../../layout/footer_link.php');?>
</body>

</html>
<?php
}else{
    header("Location: $URL/login");
}
?>