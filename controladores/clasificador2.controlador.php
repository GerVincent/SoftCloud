<?php


class Clasificador2Controlador{

    static public function ctrListarClasificador2(){
        
        $clasificador2 = Clasificador2Modelo::mdlListarClasificador2();
        
        return $clasificador2;
    }
}    