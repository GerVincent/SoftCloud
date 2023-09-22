<?php

require_once "conexion.php";


class Clasificador6Modelo
{
    static public function mdlListarClasificador6()
    {

        // $stmt = Conexion::conectar()->prepare('EXEC prc_ListarTipoProducto');
        $stmt = Conexion::conectar()->prepare("SELECT GRU_Cod, GRU_Dsc FROM Grupos");

        $stmt->execute();

        return $stmt->fetchAll();
        
    }
}
