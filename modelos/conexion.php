<?php

class Conexion{

    static public function conectar(){
        try {
            $conn = new PDO("sqlsrv:Server=ingsur.cwiu11cn0iql.us-east-1.rds.amazonaws.com;Database=SOFT00003", "admin", "M1cr0s0ft");
            // $conn = new PDO("sqlsrv:Server=localhost;Database=SOFT00003", "sa", "M1cr0s0ft");            
            // $conn = new PDO("mysql:host=localhost;dbname=softcloud","root","",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));            
            return $conn;
        }
        catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }

    }
}
