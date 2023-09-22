<?php

require_once "conexion.php";


class Clasificador2Modelo
{
    static public function mdlListarClasificador2()
    {

        // $stmt = Conexion::conectar()->prepare('EXEC prc_ListarTipoProducto');
        $stmt = Conexion::conectar()->prepare("SELECT FAM_Cod, FAM_Dsc FROM Familias");

        $stmt->execute();

        return $stmt->fetchAll();
        
    }
}
