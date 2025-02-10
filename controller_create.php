<?php
include('../../app/config/config.php');

// Verifica que la solicitud sea POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: ".$URL."/web/usuarios");
    exit();
}

// Recoge los datos del formulario
$nombres = $_POST['nombres'];
$ap_paterno = $_POST['ap_paterno'];
$ap_materno = $_POST['ap_materno'];
$ci = $_POST['ci'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$genero = $_POST['genero'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$password = $_POST['password'];
$cargo = $_POST['cargo'];

date_default_timezone_set("America/Caracas");
$fechaHora = date("Y-m-d H:i:s");
$estado = "1";

// Verifica si el usuario ya existe
$query = $pdo->prepare("SELECT email FROM tb_usuarios WHERE email = :email AND estado = '1'");
$query->bindParam(':email', $email);
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

if (!empty($usuarios)) {
    echo "<h1>Este usuario ya existe. Revise la lista de Usuarios</h1>";
    exit();
}

// Hashea la contraseña antes de guardarla
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Inserta el nuevo usuario en la base de datos
$sentencia = $pdo->prepare("INSERT INTO tb_usuarios 
    (nombres, ap_paterno, ap_materno, ci, fecha_nacimiento, genero, celular, email, password, cargo, fyh_creacion, estado) 
VALUES (:nombres, :ap_paterno, :ap_materno, :ci, :fecha_nacimiento, :genero, :celular, :email, '$hashedPassword', :cargo, :fyh_creacion, :estado)");

$sentencia->bindParam(':nombres', $nombres);
$sentencia->bindParam(':ap_paterno', $ap_paterno);
$sentencia->bindParam(':ap_materno', $ap_materno);
$sentencia->bindParam(':ci', $ci);
$sentencia->bindParam(':fecha_nacimiento', $fecha_nacimiento);
$sentencia->bindParam(':genero', $genero);
$sentencia->bindParam(':celular', $celular);
$sentencia->bindParam(':email', $email);
// $sentencia->bindParam(':password', $hashedPassword); // Usar la contraseña hasheada
$sentencia->bindParam(':cargo', $cargo);
$sentencia->bindParam(':fyh_creacion', $fechaHora);
$sentencia->bindParam(':estado', $estado);

if ($sentencia->execute()) {
    // Inserta la ubicación del usuario
    $latitud = '0';
    $longitud = '0';
    $estado_E = 'LIBRE';
    $nombre_completo = $nombres . " " . $ap_paterno . " " . $ap_materno;

    $sentencia2 = $pdo->prepare("INSERT INTO tb_ubicacion 
        (email, latitud, longitud, estado_E, cargo, nombre, fyh_creacion, estado) 
VALUES (:email, :latitud, :longitud, :estado_E, :cargo, :nombre, :fyh_creacion, :estado)");

    $sentencia2->bindParam(':email', $email);
    $sentencia2->bindParam(':latitud', $latitud);
    $sentencia2->bindParam(':longitud', $longitud);
    $sentencia2->bindParam(':estado_E', $estado_E);
    $sentencia2->bindParam(':cargo', $cargo);
    $sentencia2->bindParam(':nombre', $nombre_completo);
    $sentencia2->bindParam(':fyh_creacion', $fechaHora);
    $sentencia2->bindParam(':estado', $estado);

    if ($sentencia2->execute()) {
        header("Location: ".$URL."/web/usuarios?alert=success");
        exit();
    } else {
        echo "No se pudo registrar en ubicaciones";
        exit();
    }
} else {
    echo "No se pudo registrar el usuario";
    exit();
}
?>
