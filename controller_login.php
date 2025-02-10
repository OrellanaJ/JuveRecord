<?php
include ('../app/config/config.php');

$email = $_POST['email'];
$password = $_POST['password'];

session_start();

$query = $pdo->prepare("SELECT * FROM tb_usuarios WHERE email = '$email' AND estado = '1'");
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

if (!empty($usuarios)) {

    foreach($usuarios as $user) {
        $pass = $user['password'];
        $nombre = $user['nombres'];
        $a_parteno = $user['ap_paterno'];
        $a_materno = $user['ap_materno'];
    }
    
    if (password_verify($password, $pass)) {
        echo "Contraseña correcta.";
        $_SESSION['u_usuario'] = $email;
        $_SESSION['nombres_s'] = $nombre;
        $_SESSION['ap_paterno_s'] = $a_parteno;
        $_SESSION['ap_materno_s'] = $a_materno;
        header("Location: ".$URL."/web/?alert=success");
    } else {
        echo $pass;
        echo $password;
       echo "Contraseña incorrecta.";
       header("Location: ".$URL."/login/?alert=error");
       exit();
    }
    exit();
} else {
    header("Location: ".$URL."/login/?alert=error");
    exit();
}
?>
