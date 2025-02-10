<?php
include('../../app/config/config.php');
include('../../modelos/clientes.modelo.php');

session_start();
if (isset($_SESSION['u_usuario'])) {
    $user = $_SESSION['u_usuario'];

    // Verificar que se haya pasado un ID de usuario
    if (isset($_GET['id'])) {
        $user_id = $_GET['id'];
        
        $usuario=ModeloCliente::modeloDirecciones($_GET["id"]);

        $id_usuario_s = $usuario['id'];
        $ap_paterno_s = $usuario['a_paterno'];
        $ap_materno_s= $usuario['a_materno'];
        $nombres_s = $usuario['nombre'];
        $ci_s = $usuario['ci'];
        $link = "clientes";


        if (!$usuario) {
            die("Cliente no encontrado.");
        }
    } else {
        die("ID de cliente no especificado.");
    }

    // Manejar la sumisión del formulario
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        include('controller_update.php');
    }
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <?php include('../../layout/head.php'); ?>
        <title>Actualizar Cliente</title>
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
    <?php include('../../layout/menu.php');?>
        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    <div class="container">
                        <br>
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title"><span class="fa fa-user-edit"></span> Actualizar Cliente</h3>
                            </div>
                            <div class="card-body">
                                <?php if (isset($error)): ?>
                                    <div class="alert alert-danger">
                                        <?php echo $error; ?>
                                    </div>
                                <?php endif; ?>

                                <?php if (isset($success)): ?>
                                    <div class="alert alert-success">
                                        <?php echo $success; ?>
                                    </div>
                                <?php endif; ?>

                                <form action="editar-direcciones.php?id=<?php echo $usuario['id']; ?>" method="post">
                                    <div class="form-group">
                                        <label for="nombres">Zona</label>
                                        <input type="text" class="form-control" id="nombres" name="nombres" 
                                               value="<?php echo htmlspecialchars($usuario['zona']); ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="ap_paterno">Calle</label>
                                        <input type="text" class="form-control" id="ap_paterno" name="ap_paterno" 
                                               value="<?php echo htmlspecialchars($usuario['calle']); ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="ap_materno">Referencia</label>
                                        <input type="text" class="form-control" id="ap_materno" name="ap_materno" 
                                               value="<?php echo htmlspecialchars($usuario['referencia']); ?>">
                                    </div>
                                    <a href="<?php echo $URL; ?>/web/clientes" class="btn btn-success btn-lm">Cancelar</a>
                                    <button type="submit" class="btn btn-primary">Actualizar Cliente</button>
                                </form>
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
    header("Location: $URL/login");
    exit;
}
?>
