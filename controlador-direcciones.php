<?php
include('../../app/config/config.php');

if ($_GET['estado'] === 'borrar') {

    $id = $_GET['id'];

    $query = $pdo->prepare("DELETE FROM `tb_direcciones` WHERE id = $id");
    $query->execute();
    echo "se borro correctamente";
    header("Location: index.php");

} else {
    echo "no borrar";
}

?>
