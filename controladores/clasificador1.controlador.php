<?php


class Clasificador1Controlador{

    static public function ctrListarClasificador1(){
        
        $clasificador1 = Clasificador1Modelo::mdlListarClasificador1();
        
        return $clasificador1;
    }
}    