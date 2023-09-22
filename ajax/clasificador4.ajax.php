<?php

require_once "../controladores/clasificador4.controlador.php";
require_once "../modelos/clasificador4.modelo.php";

class ajaxClasificador4
{

public function ajaxListarClasificador4()
    {

        $clasificador4 = Clasificador4Controlador::ctrListarClasificador4();

        echo json_encode($clasificador4,JSON_UNESCAPED_UNICODE);
    }
}

$clasificador4 = new ajaxClasificador4();
$clasificador4 -> ajaxListarClasificador4();