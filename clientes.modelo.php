<?php

include('conexion.php');

class ModeloCliente{

    
    static public function mdlTraerCliente($id)
    {

        global $pdo;
        try {
           
        $stmt = $pdo->prepare("SELECT * FROM tb_clientes WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);

        } catch (Exception $e) {
            return $e;
        }
        
    }

    static public function modeloDirecciones($id)
    {

        global $pdo;
        try {
           
        $stmt = $pdo->prepare("SELECT * FROM tb_clientes WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);

        } catch (Exception $e) {
            return $e;
        }
        
    }

}
