<?php 
include('../../app/config/config.php');

$id_producto = $_GET['id']; // Obtener el ID del producto a eliminar

session_start();
if(isset($_SESSION['u_usuario'])) {
    $user = $_SESSION['u_usuario'];

    // Consulta para verificar si el usuario tiene acceso
    $query = $pdo->prepare("SELECT * FROM tb_usuarios WHERE email = :email AND estado = '1'");
    $query->execute(['email' => $user]);
    $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($usuarios as $usuario) {
        $id_usuario_s = $usuario['id'];
    }

    // Obtener los datos del producto a eliminar
    $query2 = $pdo->prepare("SELECT * FROM tb_productos WHERE id = :id_producto");
    $query2->bindParam(':id_producto', $id_producto, PDO::PARAM_INT);
    $query2->execute();
    $producto = $query2->fetch(PDO::FETCH_ASSOC);

    if($producto) {
        ?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <?php include('../../layout/head.php'); ?>
            <title>Eliminar Producto</title>
        </head>
        <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <?php include('../../layout/menu.php'); ?>
            <div class="content-wrapper">
                <section class="content">
                    <div class="container-fluid">
                        <div class="container">
                            <br>
                            <center><h3><b>¿Está seguro de eliminar este producto?</b></h3></center>
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title"><span class="fa fa-box"></span><b>Eliminar Producto</b></h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">Nombre del Producto</label>
                                                <input type="text" class="form-control" value="<?php echo $producto['nombre']; ?>" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Volumen (L)</label>
                                                <input type="text" class="form-control" value="<?php echo $producto['volumen_l']; ?>" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Unidades</label>
                                                <input type="text" class="form-control" value="<?php echo $producto['unidades']; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">Stock</label>
                                                <input type="text" class="form-control" value="<?php echo $producto['stock']; ?>" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Precio (Bs.)</label>
                                                <input type="text" class="form-control" value="<?php echo $producto['precio']; ?>" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <a href="javascript:history.back()" class="btn btn-success btn-lg"><b>Cancelar</b></a>
                                    <a href="controller_delete.php?id=<?php echo $producto['id']; ?>" class="btn btn-danger btn-lg"><b>Eliminar Producto</b></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <?php include('../../layout/footer.php'); ?>
        </div>
        <?php include('../../layout/footer_link.php'); ?>
        </body>
        </html>
        <?php
    } else {
        echo "<p>Producto no encontrado.</p>";
    }

} else {
    header("Location: $URL/login");
}
?>
