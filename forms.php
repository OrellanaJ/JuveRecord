<?php
// Configuración de la base de datos
include('../../app/config/config.php');


// Obtener los datos enviados mediante AJAX
$data = json_decode(file_get_contents("php://input"), true);

if (isset($data['nombres'], $data['ap_paterno'], $data['ap_materno'], $data['ci'], $data['celular'], $data['email'], $data['formData'])) {
    $nombres = $data['nombres'];
    $ap_paterno = $data['ap_paterno'];
    $ap_materno = $data['ap_materno'];
    $ci = $data['ci'];
    $celular = $data['celular'];
    $email = $data['email'];
    //$pedido = $data['pedido'];

    $direcciones = $data['formData'];

    $sql = "INSERT INTO tb_clientes (nombre, a_paterno, a_materno, ci, telefono, email) VALUES ('$nombres', '$ap_paterno', '$ap_materno', '$ci', '$celular', '$email')";
    $pdo->query($sql);

        // Insertar cada dirección en la tabla correspondiente
        foreach ($direcciones as $direccion) {
            $zona = $direccion['zona'];
            $calle = $direccion['calle'];
            $referencia = $direccion['referencia'];
            $latitud = $direccion['latitud'];
            $longitud = $direccion['longitud'];

            $sqlDireccion = "INSERT INTO tb_direcciones (zona, calle, referencia, email, latitud, longitud) VALUES ( '$zona', '$calle', '$referencia', '$email', '$latitud', '$longitud')";
            $pdo->query($sqlDireccion);
    }

    echo 'Cliente Guardado Correctamente';

}

//$pdo->close();
?>
