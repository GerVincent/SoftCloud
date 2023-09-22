<?php


class Clasificador3Controlador{

    static public function ctrListarClasificador3(){
        
        $clasificador3 = Clasificador3Modelo::mdlListarClasificador3();
        
        return $clasificador3;
    }
}    