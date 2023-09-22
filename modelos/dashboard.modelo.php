<?php

require_once "conexion.php";

class DashboardModelo
{
    static public function mdlGetDatosDashboard()
    {
        try {        
            $stmt = Conexion::conectar()->prepare('EXEC prc_ObtenerDatosDashboard');
            // $stmt = Conexion::conectar()->prepare('SELECT COUNT(*) AS totalProductos  FROM cliente');        
            $stmt->execute();

        }catch (Exception $e) {
            $Resultado = 'Excepción Capturada '. $e->getMessage(). "\n";
        }
        return $stmt->fetchAll(PDO::FETCH_OBJ);        
    }
    static public function mdlGetVentasMesActual()
    {
        $stmt = Conexion::conectar()->prepare('EXEC prc_ObtenerVentasMesActual');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    static public function mdlProductosMasVendidos()
    {
        $stmt = Conexion::conectar()->prepare('EXEC prc_ListarProductosMasVendidos');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    static public function mdlClientesMayorCompra()
    {
        $stmt = Conexion::conectar()->prepare('EXEC prc_ListarClientesMayorCompra');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    static public function mdlZonasMasVendidas()
    {
        $stmt = Conexion::conectar()->prepare('EXEC prc_ListarZonasMasVendidas');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}
