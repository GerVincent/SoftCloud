<?php

require_once "../controladores/clasificador6.controlador.php";
require_once "../modelos/clasificador6.modelo.php";

class ajaxClasificador6
{

public function ajaxListarClasificador6()
    {

        $clasificador6 = Clasificador6Controlador::ctrListarClasificador6();

        echo json_encode($clasificador6,JSON_UNESCAPED_UNICODE);
    }
}

$clasificador6 = new ajaxClasificador6();
$clasificador6 -> ajaxListarClasificador6();