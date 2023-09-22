<?php

require_once "../controladores/dashboard.controlador.php";
require_once "../modelos/dashboard.modelo.php";

class AjaxDashboard{

    public function getDatosDashboard(){
        $datos = DashboardControlador::ctrGetDatosDashboard();
        echo json_encode($datos);
    }
    public function getVentasMesActual(){
        $ventasMesActual = DashboardControlador::ctrGetVentasMesActual();
        echo json_encode($ventasMesActual);
    }
    public function getProductosMasVendidos(){
        $productosMasVendidos = DashboardControlador::ctrProductosMasVendidos();
        echo json_encode($productosMasVendidos);
    }
    public function getClientesMayorCompra(){
        $clientesMayorCompra = DashboardControlador::ctrClientesMayorCompra();
        echo json_encode($clientesMayorCompra);
    }
    public function getZonasMasVendidas(){
        $zonasMasVendidas = DashboardControlador::ctrZonasMasVendidas();
        echo json_encode($zonasMasVendidas);
    }
}

if(isset($_POST['accion']) && $_POST['accion'] == 1){ //Ejecutar function ventas del mes (Grafico de Barras)
    $ventasMesActual = new AjaxDashboard();
    $ventasMesActual -> getVentasMesActual();

}else if(isset($_POST['accion']) && $_POST['accion'] == 2){ //Ejecutar function de productos mas vendidos
    $produtosMasVendidos = new AjaxDashboard();
    $produtosMasVendidos -> getProductosMasVendidos();

}else if(isset($_POST['accion']) && $_POST['accion'] == 3){ //Ejecutar function de clientes con mayor compra
    $clientesMayorCompra = new AjaxDashboard();
    $clientesMayorCompra -> getClientesMayorCompra();

}else if(isset($_POST['accion']) && $_POST['accion'] == 4){ //Ejecutar function de zonas con mayor ventas
    $zonasMasVendidas = new AjaxDashboard();
    $zonasMasVendidas -> getZonasMasVendidas();
}else{
    $datos = new AjaxDashboard();
    $datos -> getDatosDashboard();
}