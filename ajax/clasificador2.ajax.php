<?php

require_once "../controladores/clasificador2.controlador.php";
require_once "../modelos/clasificador2.modelo.php";

class ajaxClasificador2
{

public function ajaxListarClasificador2()
    {

        $clasificador2 = Clasificador2Controlador::ctrListarClasificador2();

        echo json_encode($clasificador2,JSON_UNESCAPED_UNICODE);
    }
}

$clasificador2 = new ajaxClasificador2();
$clasificador2 -> ajaxListarClasificador2();