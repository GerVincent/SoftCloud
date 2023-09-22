<?php


class Clasificador5Controlador{

    static public function ctrListarClasificador5(){
        
        $clasificador5 = Clasificador5Modelo::mdlListarClasificador5();
        
        return $clasificador5;
    }
}    