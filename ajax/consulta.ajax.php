<?php

require_once "../controladores/consulta.controlador.php";
require_once "../modelos/consulta.modelo.php";

class ajaxConsulta
{
    public function Consulta($data)
    {
        $respuesta = ConsultaControlador::ctrConsulta($data);
        echo json_encode($respuesta);
   }
}

if (isset($_POST['tipo']) && $_POST['tipo'] == 1) {
    $data = array(
        "tipo" => $_POST["tipo"],
        "table" => $_POST["table"],
        "id" => $_POST["id"],
        "codid" => $_POST["codid"],
        "nameid" => $_POST["nameid"]
    );
    $consulta = new ajaxConsulta();
    $consulta->Consulta($data);
} else if (isset($_POST['tipo']) && ($_POST['tipo'] == 2 || $_POST['tipo'] == 3)) { 
    $data = array(
        "tipo" => $_POST["tipo"],
        "sql" => $_POST["sql"],
    );
    $consulta = new ajaxConsulta();
    $consulta->Consulta($data);
}