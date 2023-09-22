<?php


class ProductosControlador{

    static public function ctrCargaMasivaProductos($fileProductos){
        $respuesta = ProductosModelo::mdlCargaMasivaProductos($fileProductos);
        return $respuesta;
    }

    static public function ctrListarProductos(){
        $productos = ProductosModelo::mdlListarProductos();
        return $productos;
    }

    static public function ctrRegistrarProducto($PROD_Cod, $CLASE_Cod, $MAR_Cod, $FAM_Cod, $CLAP_Cod, $SEC_Cod, $LNA_Cod, $GRU_Cod,
                                                $ENV_Cod, $PROD_Dsc, $PROD_F_1, $PROD_F_2, $PROD_Peso, $PROD_VComision){
        $registroProducto = ProductosModelo::mdlRegistrarProducto($PROD_Cod, $CLASE_Cod, $MAR_Cod, $FAM_Cod, $CLAP_Cod, $SEC_Cod, $LNA_Cod, $GRU_Cod,
                                                                  $ENV_Cod, $PROD_Dsc, $PROD_F_1, $PROD_F_2, $PROD_Peso, $PROD_VComision);
        return $registroProducto;
    }

    static public function ctrEditarProducto($PROD_Cod){
        $editarProducto = ProductosModelo::mdlEditarProducto($PROD_Cod);
        return $editarProducto;
    }

    static public function ctrActualizarProducto($table, $data, $id, $nameId, $MAR_Cod, $FAM_Cod, $SEC_Cod, $LNA_Cod, $GRU_Cod){
        $respuesta = ProductosModelo::mdlActualizarInformacion($table, $data, $id, $nameId, $MAR_Cod, $FAM_Cod, $SEC_Cod, $LNA_Cod, $GRU_Cod);
        return $respuesta;
    }

    static public function ctrEliminarProducto($table, $id, $nameId){
        $eliminarProducto = ProductosModelo::mdlEliminarInformacion($table, $id, $nameId);
        return $eliminarProducto;
    }    

}