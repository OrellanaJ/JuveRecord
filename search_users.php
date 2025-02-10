<?php
include('../../app/config/config.php');

if (isset($_GET['term'])) {
    $search = $_GET['term'];

    // Consulta para buscar solo administradores por nombre o apellido
    $query = $pdo->prepare("SELECT CONCAT(nombres, ' ', ap_paterno, ' ', ap_materno) AS nombre_completo 
                            FROM tb_usuarios 
                            WHERE (nombres LIKE :search OR ap_paterno LIKE :search OR ap_materno LIKE :search) 
                            AND cargo = 'ADMINISTRADOR' 
                            AND estado = '1'");
    $query->bindValue(':search', '%' . $search . '%');
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_ASSOC);

    // Si se encuentran resultados, devolver un array con los nombres completos
    if ($results) {
        $data = [];
        foreach ($results as $row) {
            $data[] = $row['nombre_completo'];
        }
        echo json_encode($data);
    } else {
        // Si no hay resultados, devolver un mensaje vacío
        echo json_encode([]);
    }
}
?>
