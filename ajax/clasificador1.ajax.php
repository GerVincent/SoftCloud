<?php

require_once "../controladores/clasificador1.controlador.php";
require_once "../modelos/clasificador1.modelo.php";

class ajaxClasificador1
{

public function ajaxListarClasificador1()
    {

        $clasificador1 = Clasificador1Controlador::ctrListarClasificador1();

        echo json_encode($clasificador1,JSON_UNESCAPED_UNICODE);
    }
}

$clasificador1 = new ajaxClasificador1();
$clasificador1 -> ajaxListarClasificador1();