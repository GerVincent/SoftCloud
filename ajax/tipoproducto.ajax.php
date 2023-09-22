<?php

require_once "../controladores/tipoproducto.controlador.php";
require_once "../modelos/tipoproducto.modelo.php";

class ajaxTipoProducto
{

public function ajaxListarTipoProducto()
    {
        $tipoproducto = TipoProductoControlador::ctrListarTipoProducto();
        echo json_encode($tipoproducto,JSON_UNESCAPED_UNICODE);
    }
}
$tipoproducto = new ajaxTipoProducto();
$tipoproducto -> ajaxListarTipoProducto();