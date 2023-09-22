<?php

require_once "conexion.php";


class TipoProductoModelo
{
    static public function mdlListarTipoProducto()
    {
        // $stmt = Conexion::conectar()->prepare('EXEC prc_ListarTipoProducto');
        $stmt = Conexion::conectar()->prepare("SELECT CLASE_Cod, CLASE_Dsc FROM Clase_Prod");
        $stmt->execute();

        return $stmt->fetchAll();
    }
}