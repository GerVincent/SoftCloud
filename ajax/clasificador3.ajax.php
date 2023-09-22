<?php

require_once "../controladores/clasificador3.controlador.php";
require_once "../modelos/clasificador3.modelo.php";

class ajaxClasificador3
{

public function ajaxListarClasificador3()
    {

        $clasificador3 = Clasificador3Controlador::ctrListarClasificador3();

        echo json_encode($clasificador3,JSON_UNESCAPED_UNICODE);
    }
}

$clasificador3 = new ajaxClasificador3();
$clasificador3 -> ajaxListarClasificador3();