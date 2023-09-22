<?php

require_once "conexion.php";


class EnvaseModelo
{
    static public function mdlListarEnvase()
    {

        // $stmt = Conexion::conectar()->prepare('EXEC prc_ListarTipoProducto');
        $stmt = Conexion::conectar()->prepare("SELECT ENV_Cod, ENV_Dsc FROM Envases");

        $stmt->execute();

        return $stmt->fetchAll();
        
    }
}
