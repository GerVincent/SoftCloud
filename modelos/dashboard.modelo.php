<?php

require_once "conexion.php";

class DashboardModelo
{

    static public function mdlGetDatosDashboard()
    {

        $stmt = Conexion::conectar()->prepare('EXEC prc_ObtenerDatosDashboard');
        // $stmt = Conexion::conectar()->prepare('call prc_ObtenerDatosDashboard');        
        // $stmt = Conexion::conectar()->prepare('SELECT COUNT(*) AS totalProductos  FROM cliente');        

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    static public function mdlGetVentasMesActual()
    {

        $stmt = Conexion::conectar()->prepare('EXEC prc_ObtenerVentasMesActual');
        // $stmt = Conexion::conectar()->prepare('call prc_ObtenerVentasMesActual');

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    static public function mdlProductosMasVendidos()
    {

        $stmt = Conexion::conectar()->prepare('EXEC prc_ListarProductosMasVendidos');
        // $stmt = Conexion::conectar()->prepare('call prc_ListarProductosMasVendidos()');        

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    static public function mdlClientesMayorCompra()
    {

        $stmt = Conexion::conectar()->prepare('EXEC prc_ListarClientesMayorCompra');
        // $stmt = Conexion::conectar()->prepare('call prc_ListarClientesMayorCompra');        

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}
