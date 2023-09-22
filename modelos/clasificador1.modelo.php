<?php

require_once "conexion.php";


class Clasificador1Modelo
{
    static public function mdlListarClasificador1()
    {

        // $stmt = Conexion::conectar()->prepare('EXEC prc_ListarTipoProducto');
        $stmt = Conexion::conectar()->prepare("SELECT MAR_Cod, MAR_Dsc FROM Marca");

        $stmt->execute();

        return $stmt->fetchAll();
        
    }
}
