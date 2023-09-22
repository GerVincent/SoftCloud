<?php

require_once "../controladores/clasificador5.controlador.php";
require_once "../modelos/clasificador5.modelo.php";

class ajaxClasificador5
{

public function ajaxListarClasificador5()
    {

        $clasificador5 = Clasificador5Controlador::ctrListarClasificador5();

        echo json_encode($clasificador5,JSON_UNESCAPED_UNICODE);
    }
}

$clasificador5 = new ajaxClasificador5();
$clasificador5 -> ajaxListarClasificador5();