<?php
class Conexion
{
    static public function conectar()
    {
        $sqlsrvlocal = '';
        // $sqlsrvlocal = '\SQLEXPRESS';
        // $sqlsrvlocal = '\MSSQLSERVER22';
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

            try {
                $conn = new PDO("sqlsrv:server=$servidor;database=$basedatos;TrustServerCertificate=true", $user, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                } catch (Exception $e) {
                echo "Ocurrió un error con la base de datos: " . $e->getMessage();
            }

            // $conn = new PDO("sqlsrv:Server=" . $servidor . ";Database=" . $basedatos, $user, $password . ";TrustServerCertificate=true");
            // echo $conn;
            // $conn = new PDO("sqlsrv:Server=" . $servidor . ";Database=" . $basedatos, $user, $password);            
            return $conn;
            
        } catch (PDOException $e) {
            echo 'Falló la conexión 1: ' . $e->getMessage();
        }
    }
}
