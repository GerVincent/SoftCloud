<?php


class PreciosControlador{

    static public function ctrCargaMasivaPrecios($filePrecios){
        $respuesta = PreciosModelo::mdlCargaMasivaPrecios($filePrecios);
        return $respuesta;
    }

    static public function ctrListarPrecios(){
        $Precios = PreciosModelo::mdlListarPrecios();
        return $Precios;
    }

    static public function ctrRegistrarPrecios($PROD_Cod, $CLASE_Cod, $MAR_Cod, $FAM_Cod, $CLAP_Cod, $SEC_Cod, $LNA_Cod, $GRU_Cod,
                                                $ENV_Cod, $PROD_Dsc, $PROD_F_1, $PROD_F_2, $PROD_Peso, $PROD_VComision){
        $registroPrecios = PreciosModelo::mdlRegistrarPrecios($PROD_Cod, $CLASE_Cod, $MAR_Cod, $FAM_Cod, $CLAP_Cod, $SEC_Cod, $LNA_Cod, $GRU_Cod,
                                                                  $ENV_Cod, $PROD_Dsc, $PROD_F_1, $PROD_F_2, $PROD_Peso, $PROD_VComision);
        return $registroPrecios;
    }

    static public function ctrEditarPrecios($PROD_Cod){
        $editarPrecios = PreciosModelo::mdlEditarPrecios($PROD_Cod);
        return $editarPrecios;
    }

    static public function ctrActualizarPrecios($table, $data, $id, $nameId, $MAR_Cod, $FAM_Cod, $SEC_Cod, $LNA_Cod, $GRU_Cod){
        $respuesta = PreciosModelo::mdlActualizarInformacion($table, $data, $id, $nameId, $MAR_Cod, $FAM_Cod, $SEC_Cod, $LNA_Cod, $GRU_Cod);
        return $respuesta;
    }

    static public function ctrEliminarPrecios($table, $id, $nameId){
        $eliminarPrecios = PreciosModelo::mdlEliminarInformacion($table, $id, $nameId);
        return $eliminarPrecios;
    }

    static public function ctrListarTipoPrecio(){
        
        $tipoprecio = PreciosModelo::mdlListarTipoPrecio();
        return $tipoprecio;
    }

}