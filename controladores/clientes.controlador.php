<?php


class ClientesControlador{

    static public function ctrListarClientes(){
        $clientes = ClientesModelo::mdlListarClientes();
        return $clientes;
    }
}