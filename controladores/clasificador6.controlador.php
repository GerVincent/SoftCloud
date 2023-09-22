<?php


class Clasificador6Controlador{

    static public function ctrListarClasificador6(){
        
        $clasificador6 = Clasificador6Modelo::mdlListarClasificador6();
        
        return $clasificador6;
    }
}    