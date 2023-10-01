<?php
class Conexion
{
    static public function conectar()
    {
        $sqlsrvlocal = '';
        // $sqlsrvlocal = '\SQLEXPRESS';
        $sqlsrvlocal = '\MSSQLSERVER22';
        $servidor = 'ingsur.cwiu11cn0iql.us-east-1.rds.amazonaws.com';
        $ubicacion = 'amazonaws';
        $basedatos = 'SOFT00003';
        $password = 'M1cr0s0ft';

        try {
            if (str_contains($servidor, $ubicacion) && strlen($sqlsrvlocal) == 0) {
                $user = 'admin';
            } else {
                $servidor = getHostByName(getHostName()).$sqlsrvlocal;
                $user = 'sa';
            };
            $conn = new PDO("sqlsrv:Server=" . $servidor . ";Database=" . $basedatos, $user, $password);
            return $conn;
            
        } catch (PDOException $e) {
            echo 'Falló la conexión 1: ' . $e->getMessage();
        }
    }
}
