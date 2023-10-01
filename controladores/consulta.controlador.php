<?php

class ConsultaControlador{

    static public function ctrConsulta($data){
        $consulta = ConsultaModelo::mdlConsulta($data);
        return $consulta;
    }

}