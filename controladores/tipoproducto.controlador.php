<?php


class TipoProductoControlador{

    static public function ctrListarTipoProducto(){
        
        $tipoproducto = TipoProductoModelo::mdlListarTipoProducto();
        return $tipoproducto;
    }
}