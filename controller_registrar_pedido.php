<?php
/**
 * Created by PhpStorm.
 * User: DELL-SYSTEM
 * Date: 16/07/2020
 * Time: 12:07
 */
//se modifico aqui costo_delivery a costo_emvio
include('../../app/config/config.php');

$nombre_cliente = $_POST['nombre_cliente'];
$ci_cliente = $_POST['ci_cliente'];
$celular_cliente = $_POST['celular_cliente'];
$celular_referencia_cliente = $_POST['celular_referencia_cliente'];
$email_cliente = $_POST['email_cliente'];
$direccion_cliente = $_POST['direccion_cliente'];
$id_direccion_cliente = $_POST['id_direccion_cliente'];
$costo_pedido = $_POST['costo_pedido'];
$costo_emvio = $_POST['costo_emvio'];
$obs = $_POST['obs'];
$id_carrito = $_POST['id_carrito'];
$latitud = $_POST['longitud_map'];
$longitud = $_POST['latitud_map'];

date_default_timezone_set("America/Caracas");
$fechaHora =date("Y-m-d h:i:s");
$estado = "1";;

//controller_registrar_pedido
    $sentencia = $pdo->prepare("INSERT INTO tb_pedidos 
      ( nombre_cliente, ci_cliente, celular_cliente, celular_referencia_cliente, email_cliente, direccion_cliente, id_direccion_cliente, costo_pedido, costo_emvio, obs, id_carrito, fyh_creacion, estado, latitud, longitud) 
VALUES(:nombre_cliente,:ci_cliente,:celular_cliente,:celular_referencia_cliente,:email_cliente,:direccion_cliente,:id_direccion_cliente,:costo_pedido,:costo_emvio,:obs,:id_carrito,:fyh_creacion,:estado, '$latitud', '$longitud')");

    $sentencia->bindParam(':nombre_cliente',$nombre_cliente);
    $sentencia->bindParam(':ci_cliente',$ci_cliente);
    $sentencia->bindParam(':celular_cliente',$celular_cliente);
    $sentencia->bindParam(':celular_referencia_cliente',$celular_referencia_cliente);
    $sentencia->bindParam(':email_cliente',$email_cliente);
    $sentencia->bindParam(':direccion_cliente',$direccion_cliente);
    $sentencia->bindParam(':id_direccion_cliente',$id_direccion_cliente);
    $sentencia->bindParam(':costo_pedido',$costo_pedido);
    $sentencia->bindParam(':costo_emvio',$costo_emvio);
    $sentencia->bindParam(':obs',$obs);
    $sentencia->bindParam(':id_carrito',$id_carrito);

    $sentencia->bindParam(':fyh_creacion',$fechaHora);
    $sentencia->bindParam(':estado',$estado);


    $query_pedidos = $pdo->prepare("SELECT * FROM tb_carrito WHERE id_pedido ='$id_carrito'");
    $query_pedidos->execute();
    $pedidos = $query_pedidos->fetchAll(PDO::FETCH_ASSOC);
    foreach ($pedidos as $pedido) {
        $cantidad = $pedido['cantidad'];
        $producto = $pedido['producto'];
        $descontar = $pdo->prepare("UPDATE tb_productos SET stock = CAST(stock AS SIGNED) - :cantidad WHERE nombre = :producto");
        $descontar->execute([
            ':cantidad' => $cantidad,
            ':producto' => $producto
        ]);
    }

    
    


    if($sentencia->execute()){
        header("Location:".$URL."/web/pedidos");
        ?>
        <script></script>
        <?php
    }else{
        echo "No se pudo registrar";
    }
