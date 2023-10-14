<?php

require_once "conexion.php";

use PhpOffice\PhpSpreadsheet\IOFactory;


class ClientesModelo
{

    static public function mdlCargaMasivaClientes($fileClientes){
     $respuesta = "";
        return $respuesta;
    }

    static public function mdlListarClientes(){

        $stmt = Conexion::conectar()->prepare('EXEC prc_ListarClientes');
        $stmt->execute();

        return $stmt->fetchAll();
    }

}