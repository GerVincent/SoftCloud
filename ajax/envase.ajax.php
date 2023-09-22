<?php

require_once "../controladores/envase.controlador.php";
require_once "../modelos/envase.modelo.php";

class ajaxEnvase
{

public function ajaxListarEnvase()
    {

        $envase = EnvaseControlador::ctrListarEnvase();

        echo json_encode($envase,JSON_UNESCAPED_UNICODE);
    }
}

$envase = new ajaxEnvase();
$envase -> ajaxListarEnvase();