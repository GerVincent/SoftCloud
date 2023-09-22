<?php


class Clasificador4Controlador{

    static public function ctrListarClasificador4(){
        
        $clasificador4 = Clasificador4Modelo::mdlListarClasificador4();
        
        return $clasificador4;
    }
}    