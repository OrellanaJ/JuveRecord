<?php
/**
 * Created by PhpStorm.
 * User: DELL-SYSTEM
 * Date: 25/07/2020
 * Time: 17:59
 */

include('../../app/config/config.php');

$id_pedido = $_GET['id_p'];
$email_cliente = $_GET['email_c'];
$email_m = $_GET['email_m'];

$estado_pedido = 'PEDIDO FINALIZADO';

$sentencia = $pdo->prepare("UPDATE tb_pedidos SET estado_pedido ='$estado_pedido' WHERE id_pedido='$id_pedido' ");
if($sentencia->execute()){
    
    $query_carrito = $pdo->prepare("SELECT * FROM tb_carrito WHERE id_pedido = '$id_pedido'");
    $query_carrito->execute();
    $carritos = $query_carrito->fetchAll(PDO::FETCH_ASSOC);
    foreach ($carritos as $carrito) {
    $producto = $carrito['producto'];
    $cantidad = $carrito['cantidad'];
    $total = $carrito['precio_total'];
    $fecha = date('Y-m-d');


    $query_ventas = $pdo->prepare("INSERT INTO tb_ventas (producto, cantidad, fecha_venta, email_vendedor, email_cliente, precio_total) VALUES ('$producto','$cantidad','$fecha','$email_m','$email_cliente','$total')");
    $query_ventas->execute();

}



    $estado_E = "LIBRE"; //se cambio  de estado delivery a estado E
    $sentencia2 = $pdo->prepare("UPDATE tb_ubicacion SET estado_E ='$estado_E' WHERE email='$email_m' ");
    if($sentencia2->execute()){
        header("Location: ".$URL."/sistema_movil/app/pedidos.php?email=".$email_m);
        //   echo "se actualizo correctamente la ubicacion";
    }else{
        //echo "No se pudo actualizar ";
        echo "no se pudo actualizar";
    }

}else{
    //echo "No se pudo actualizar ";
    echo "no se pudo tomar el pedido";
}