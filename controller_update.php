<?php
/**
 * Created by PhpStorm.
 * User: DELL-SYSTEM
 * Date: 18/07/2020
 * Time: 9:45
 */
include('../../app/config/config.php');

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
$fechaHora =date("Y-m-d h:i:s");

$sentencia = $pdo->prepare("UPDATE tb_usuarios SET nombres='$nombres',ap_paterno='$ap_paterno',ap_materno='$ap_materno',ci='$ci',fecha_nacimiento='$fecha_nacimiento',genero='$genero',celular='$celular',cargo='$cargo',password='$password', fyh_actualizacion='$fechaHora' WHERE email='$email' ");
//print_r($sentencia);
if($sentencia->execute()){
    header("Location: ".$URL."/web/usuarios/");
}else{
//echo "No se pudo actualizar ";
    echo "no se puede eliminar";
}
