<?php 
include('../../app/config/config.php');

session_start();

if (isset($_SESSION['u_usuario'])) {
    $user = $_SESSION['u_usuario'];

    $query = $pdo->prepare("SELECT * FROM tb_usuarios WHERE email = :email AND estado = '1'");
    $query->execute(['email' => $user]);
    $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach ($usuarios as $usuario) {
        $id_usuario_s = $usuario['id'];
        $ap_paterno_s = $usuario['ap_paterno'];
        $ap_materno_s = $usuario['ap_materno'];
        $nombres_s = $usuario['nombres'];
        $ci_s = $usuario['ci'];
        $cargo_s = $usuario['cargo'];
        $foto_perfil_s = $usuario['foto_perfil'];
    }
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <?php include('../../layout/head.php');?>
        <title>Crear Usuario</title>
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
                                <h3 class="card-title"><span class="fa fa-users"></span><b>Creación de un Nuevo Usuario</b></h3>
                            </div>
                            <div class="card-body">
                                <form action="controller_create.php" method="post">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="nombres">Nombres</label>
                                                <input type="text" class="form-control" name="nombres" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="ap_materno">Apellido Materno</label>
                                                <input type="text" class="form-control" name="ap_materno" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                                                <input type="date" class="form-control" name="fecha_nacimiento" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="celular">Celular</label>
                                                <input type="text" class="form-control" name="celular" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Correo Electrónico</label>
                                                <input type="email" class="form-control" name="email" required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="ap_paterno">Apellido Paterno</label>
                                                <input type="text" class="form-control" name="ap_paterno" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="ci">Identidad</label>
                                                <input type="text" class="form-control" name="ci" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="genero">Género</label>
                                                <select name="genero" class="form-control" required>
                                                    <option value="HOMBRE">HOMBRE</option>
                                                    <option value="MUJER">MUJER</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="cargo">Cargo</label>
                                                <select name="cargo" class="form-control" required>
                                                    <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                                                </select>
                                            </div>
                                            <style>
        .error {
            color: red;
            font-size: 12px;
            display: none;
        }
    </style>
                                            <div class="form-group">
                                                <label for="password">Contraseña</label>
                                                <input type="password" class="form-control" id="password" name="password" required>
                                                <span id="error-msg" class="error">La contraseña debe tener al menos 8 caracteres.</span><br><br>
                                            </div>                                    
                                        </div>
                                    </div>
                                    <br>
                                    <a href="<?php echo $URL; ?>/web/usuarios" class="btn btn-success btn-lg">Cancelar</a>
                                    <input disabled type="submit" id="crearBtn" class="btn btn-primary btn-lg" value="Registrar Usuario">
                                </form>
                            </div>
                            <script>
        // Obtener elementos
        const passwordInput = document.getElementById('password');
        const crearBtn = document.getElementById('crearBtn');
        const errorMsg = document.getElementById('error-msg');

        // Función para validar la longitud de la contraseña
        function validarPassword() {
            const password = passwordInput.value;

            // Si la contraseña tiene menos de 8 caracteres
            if (password.length < 8) {
                crearBtn.disabled = true; // Bloquear botón
                errorMsg.style.display = 'inline'; // Mostrar mensaje de error
            } else {
                crearBtn.disabled = false; // Desbloquear botón
                errorMsg.style.display = 'none'; // Ocultar mensaje de error
            }
        }

        // Validar la contraseña en tiempo real
        passwordInput.addEventListener('input', validarPassword);
    </script>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php include('../../layout/footer.php');?>
    </div>
    <?php include('../../layout/footer_link.php');?>
    </body>
    </html>
    <?php
} else {
    header("Location: $URL/login");
    exit();
}
?>
