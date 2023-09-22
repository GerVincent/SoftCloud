<?php

require_once "conexion.php";


class Clasificador4Modelo
{
    static public function mdlListarClasificador4()
    {

        // $stmt = Conexion::conectar()->prepare('EXEC prc_ListarTipoProducto');
        $stmt = Conexion::conectar()->prepare("SELECT SEC_Cod, SEC_Dsc FROM Secciones");

        $stmt->execute();

        return $stmt->fetchAll();
        
    }
}
