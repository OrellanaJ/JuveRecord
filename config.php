<?php
/**
 * Configuración de la base de datos
 */

define('SERVIDOR', 'localhost');
define('USUARIO', 'root');
define('PASSWORD', ''); // Corregido de PASSWOD a PASSWORD
define('BD', 'S_Antonio');

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
