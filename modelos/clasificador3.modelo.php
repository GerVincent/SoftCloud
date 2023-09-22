<?php

require_once "conexion.php";


class Clasificador3Modelo
{
    static public function mdlListarClasificador3()
    {

        // $stmt = Conexion::conectar()->prepare('EXEC prc_ListarTipoProducto');
        $stmt = Conexion::conectar()->prepare("SELECT CLAP_Cod, CLAP_Dsc FROM Clasificacion_Producto");

        $stmt->execute();

        return $stmt->fetchAll();
        
    }
}
