<?php

require_once "conexion.php";

class ConsultaModelo
{
    static public function mdlConsulta($data)
    {
        if (isset($data["tipo"]) && $data["tipo"] == 1) {

            $row=null; $table=$data["table"]; $Id=$data["id"]; $codid=$data["nameid"]; $nameid=$data["nameid"];

            $stmt = Conexion::conectar()->prepare("SELECT $codid,$nameid FROM $table WHERE $nameid = :$nameid");
            $stmt->bindParam(":".$nameid, $Id, PDO::PARAM_STR);
            $stmt->execute();

            while ($resultado = $stmt->fetch()){
                $row[] = $resultado;
            }
            return $row;
        } else if (isset($data["tipo"]) && ($data["tipo"] == 2 || $data["tipo"] == 3)) {
            $row=null; $sql=$data["sql"];
            $stmt = Conexion::conectar()->prepare($sql);
            $stmt->execute();

            while ($resultado = $stmt->fetch(PDO::FETCH_NUM)){
                $row[] = $resultado;
            }
            return $row;
        } else if (isset($data["tipo"]) && $data["tipo"] == 3) {
            return "ok";
        }            
    }
}