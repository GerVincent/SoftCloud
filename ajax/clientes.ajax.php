<?php

require_once "../controladores/clientes.controlador.php";
require_once "../modelos/clientes.modelo.php";

// require_once "../vendor/autoload.php";

class ajaxClientes
{
    public $fileClientes;
    public $CLI_Cod;

    public function ajaxListarClientes()
    {
        $clientes = ClientesControlador::ctrListarClientes();
        echo json_encode($clientes);
    }
}

if (isset($_POST['accion']) && $_POST['accion'] == 1) {
    $clientes = new ajaxClientes();
    $clientes->ajaxListarClientes();
}