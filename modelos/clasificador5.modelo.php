<?php

require_once "conexion.php";


class Clasificador5Modelo
{
    static public function mdlListarClasificador5()
    {

        // $stmt = Conexion::conectar()->prepare('EXEC prc_ListarTipoProducto');
        $stmt = Conexion::conectar()->prepare("SELECT LNA_Cod, LNA_Dsc FROM Lineas");

        $stmt->execute();

        return $stmt->fetchAll();
        
    }
}
