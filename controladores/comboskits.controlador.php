<?php


class ComboKitControlador{

    static public function ctrListarComboKit(){
        $combokit = ComboKitModelo::mdlListarComboKit();
        return $combokit;
    }

    static public function ctrRegistrarComboKit($data){
        $registroProducto = ComboKitModelo::mdlRegistrarComboKit($data);
        return $registroProducto;
    }

    static public function ctrEditarComboKit(){
        $editarProducto = ComboKitModelo::mdlEditarComboKit();
        return $editarProducto;
    }

    static public function ctrActualizarComboKit($table, $data, $id, $nameId, $MAR_Cod, $FAM_Cod, $SEC_Cod, $LNA_Cod, $GRU_Cod){
        $respuesta = ComboKitModelo::mdlActualizarInformacion($table, $data, $id, $nameId, $MAR_Cod, $FAM_Cod, $SEC_Cod, $LNA_Cod, $GRU_Cod);
        return $respuesta;
    }

    static public function ctrEliminarComboKit($table, $id, $nameId){
        $eliminarProducto = ComboKitModelo::mdlEliminarInformacion($table, $id, $nameId);
        return $eliminarProducto;
    }    

}