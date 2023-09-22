<?php


class EnvaseControlador{

    static public function ctrListarEnvase(){
        
        $envase = EnvaseModelo::mdlListarEnvase();
        
        return $envase;
    }
}    