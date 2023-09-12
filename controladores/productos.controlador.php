<?php


class ProductosControlador{

    static public function ctrCargaMasivaProductos($fileProductos){
        
        $respuesta = ProductosModelo::mdlCargaMasivaProductos($fileProductos);
        
        return $respuesta;
    }

    static public function ctrListarProductos(){
        
        $productos = ProductosModelo::mdlListarProductos();
        
        return $productos;
    }


}