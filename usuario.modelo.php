<?php

include('conexion.php');

class ModeloUsuario{


    static public function mdlTraerUsuarios()
    {
        global $pdo;
        try {
            $query = $pdo->prepare("SELECT * FROM tb_usuarios ");
            $query->execute();
            $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            return $e;
        }
        
    }

    static public function mdlTraerUsuario($email)
    {

        global $pdo;
        try {
           
        $stmt = $pdo->prepare("SELECT * FROM tb_usuarios WHERE email = :email AND estado ='1'");
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);

        } catch (Exception $e) {
            return $e;
        }
        
    }

}