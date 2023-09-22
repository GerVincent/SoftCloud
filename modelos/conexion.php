<?php
class Conexion
{
    static public function conectar()
    {

        // $SqlServer = "LAPTOP\SQLEXPRESS";
        // $DbConnInfo = array( "Database"=>"SOFT00003", "UID"=>"sa", "PWD"=>"M1cr0s0ft");
        // $SqlServerCon = sqlsrv_connect( $SqlServer, $DbConnInfo);
        // if( $SqlServerCon ) {echo "Connection established";}
        // else
        // {echo "Connection could not be established.<br />";
        // die( print_r( sqlsrv_errors(), true));}

        // $conn = new PDO("mysql:host=localhost;dbname=softcloud","root","",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));        
        // $conn = new PDO("sqlsrv:Server=LAPTOP\SQLEXPRESS;Database=SOFT00003", "sa", "M1cr0s0ft");

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
            // $conn = new PDO("sqlsrv:Server=DESKTOP-QNSU2EJ\MSSQLSERVER22;Database=SOFT00003", "sa", "M1cr0s0ft");
            // $conn = new PDO("sqlsrv:Server=LAPTOP\SQLEXPRESS;Database=SOFT00003", "sa", "M1cr0s0ft");
            // ECHO $servidor;

            return $conn;
        } catch (PDOException $e) {
            echo 'Falló la conexión 1: ' . $e->getMessage();
        }
    }
}
