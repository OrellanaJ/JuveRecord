<?php
/**
 * Configuración de la base de datos
 */

 if (!defined('SERVIDOR')) {
    define('SERVIDOR', 'tu_servidor');
}
if (!defined('USUARIO')) {
    define('USUARIO', 'tu_usuario');
}
if (!defined('PASSWORD')) {
    define('PASSWORD', 'tu_contraseña');
}
if (!defined('BD')) {
    define('BD', 'tu_base_de_datos');
}


$URL = 'http://localhost/S_Antonio';

$servidor = "mysql:dbname=" . BD . ";host=" . SERVIDOR;

try {
    $pdo = new PDO($servidor, USUARIO, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    // echo "<script>alert('La conexión a la base de datos fue exitosa.')</script>";
} catch (PDOException $e) {
    // Manejo de errores
    echo "<script>alert('Error en la conexión a la base de datos: " . $e->getMessage() . "')</script>";
    // Puedes optar por redirigir a una página de error o hacer logging en lugar de mostrar un alert
}
?>
