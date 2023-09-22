<?php

class DashboardControlador{
    
    static public function ctrGetDatosDashboard(){
        $datos = DashboardModelo::mdlGetDatosDashboard();
        return $datos;
    }
    static public function ctrGetVentasMesActual(){
        $ventasMesActual = DashboardModelo::mdlGetVentasMesActual();
        return $ventasMesActual;
    }
    static public function ctrProductosMasVendidos(){
        $productosMasVendidos = DashboardModelo::mdlProductosMasVendidos();
        return $productosMasVendidos;
    }
    static public function ctrClientesMayorCompra(){
        $clientesMayorCompra = DashboardModelo::mdlClientesMayorCompra();
        return $clientesMayorCompra;
    }
    static public function ctrZonasMasVendidas(){
        $zonasMasVendidas = DashboardModelo::mdlZonasMasVendidas();
        return $zonasMasVendidas;
    }
}