<?php

require_once "../controladores/precios.controlador.php";
require_once "../modelos/precios.modelo.php";

// require_once "../vendor/autoload.php";

class ajaxPrecios
{
    public $filePrecios;
    public $PROD_Cod, $CLASE_Cod, $MAR_Cod, $FAM_Cod, $CLAP_Cod, $SEC_Cod, $LNA_Cod, $GRU_Cod, $ENV_Cod, $PROD_Dsc, $PROD_F_1, $PROD_F_2, $PROD_Peso, $PROD_VComision;

    public function ajaxCargaMasivaPrecios()
    {
        $respuesta = PreciosControlador::ctrCargaMasivaPrecios($this->filePrecios);
        echo json_encode($respuesta);
    }

    public function ajaxListarPrecios()
    {
        $Precios = PreciosControlador::ctrListarPrecios();
        echo json_encode($Precios);
    }

    public function ajaxRegistrarPrecios()
    {
        $Precios = PreciosControlador::ctrRegistrarPrecios($this->PROD_Cod,$this->CLASE_Cod,$this->MAR_Cod,$this->FAM_Cod,
        $this->CLAP_Cod,$this->SEC_Cod,$this->LNA_Cod,$this->GRU_Cod,$this->ENV_Cod,
        $this->PROD_Dsc,$this->PROD_F_1,$this->PROD_F_2,$this->PROD_Peso,$this->PROD_VComision);

        echo json_encode($Precios);
    }

    public function ajaxEditarPrecios()
    {
        $Precios = PreciosControlador::ctrEditarPrecios($this->PROD_Cod);
        echo json_encode($Precios);
    }

    public function ajaxActualizarPrecios($data)
    {
        $table = "Precios";
        $id = $_POST["PROD_Cod"];
        $nameId = "PROD_Cod";

        $respuesta = PreciosControlador::ctrActualizarPrecios($table, $data, $id, $nameId, $this->MAR_Cod, $this->FAM_Cod, $this->SEC_Cod, $this->LNA_Cod, $this->GRU_Cod);
        echo json_encode($respuesta);
    }

    public function ajaxEliminarPrecios()
    {
        $table = "Precios";
        $id = $_POST["PROD_Cod"];
        $nameId = "PROD_Cod";

        $respuesta = PreciosControlador::ctrEliminarPrecios($table, $id, $nameId);
        echo json_encode($respuesta);
    }

    public function ajaxListarTipoPrecio()
    {
        $tipoprecio = PreciosControlador::ctrListarTipoPrecio();
        echo json_encode($tipoprecio,JSON_UNESCAPED_UNICODE);
    }        
}

if (isset($_POST['accion']) && $_POST['accion'] == 1) {  // Parametro para listar Precios
    $precios = new ajaxPrecios();
    $precios->ajaxListarPrecios();
} else if (isset($_POST['accion']) && $_POST['accion'] == 2) { // Parametro para registrar Precios
    $RegistrarPrecios = new ajaxPrecios();
    $RegistrarPrecios -> PROD_Cod = $_POST["PROD_Cod"];
    $RegistrarPrecios -> CLASE_Cod = $_POST["CLASE_Cod"];
    $RegistrarPrecios -> MAR_Cod = $_POST["MAR_Cod"];
    $RegistrarPrecios -> FAM_Cod = $_POST["FAM_Cod"];
    $RegistrarPrecios -> CLAP_Cod = $_POST["CLAP_Cod"];
    $RegistrarPrecios -> SEC_Cod = $_POST["SEC_Cod"];
    $RegistrarPrecios -> LNA_Cod = $_POST["LNA_Cod"];
    $RegistrarPrecios -> GRU_Cod = $_POST["GRU_Cod"];
    $RegistrarPrecios -> ENV_Cod = $_POST["ENV_Cod"];
    $RegistrarPrecios -> PROD_Dsc = $_POST["PROD_Dsc"];
    $RegistrarPrecios -> PROD_F_1 = $_POST["PROD_F_1"];
    $RegistrarPrecios -> PROD_F_2 = $_POST["PROD_F_2"];
    $RegistrarPrecios -> PROD_Peso = $_POST["PROD_Peso"];
    $RegistrarPrecios -> PROD_VComision = $_POST["PROD_VComision"];
    $RegistrarPrecios -> ajaxRegistrarPrecios();

} else if (isset($_POST['accion']) && $_POST['accion'] == 3) { // Parametro para editar Precios
    $EditarPrecios = new ajaxPrecios();
    $EditarPrecios -> PROD_Cod = $_POST["PROD_Cod"];
    $EditarPrecios -> ajaxEditarPrecios();

} else if (isset($_POST['accion']) && $_POST['accion'] == 4) { // Parametro para actualizar Precios
    $actualizarPrecios = new ajaxPrecios();
    $actualizarPrecios -> MAR_Cod = $_POST["MAR_Cod"];
    $actualizarPrecios -> FAM_Cod = $_POST["FAM_Cod"];
    $actualizarPrecios -> SEC_Cod = $_POST["SEC_Cod"];
    $actualizarPrecios -> LNA_Cod = $_POST["LNA_Cod"];
    $actualizarPrecios -> GRU_Cod = $_POST["GRU_Cod"];

    $data = array(
        "CLASE_Cod" => $_POST["CLASE_Cod"],
        "MAR_Cod" => $_POST["MAR_Cod"],
        "FAM_Cod" => $_POST["FAM_Cod"],
        "CLAP_Cod" => $_POST["CLAP_Cod"],
        "SEC_Cod" => $_POST["SEC_Cod"],
        "LNA_Cod" => $_POST["LNA_Cod"],
        "GRU_Cod" => $_POST["GRU_Cod"],
        "ENV_Cod" => $_POST["ENV_Cod"],
        "PROD_Dsc" => $_POST["PROD_Dsc"],
        "PROD_F_1" => $_POST["PROD_F_1"],
        "PROD_F_2" => $_POST["PROD_F_2"],
        "PROD_Peso" => $_POST["PROD_Peso"],
        "PROD_VComision" => $_POST["PROD_VComision"]
    );
    $actualizarPrecios -> ajaxActualizarPrecios($data);

} else if (isset($_POST['accion']) && $_POST['accion'] == 5) { // Parametro para eliminar Precios
    $eliminarPrecios = new ajaxPrecios();
    $eliminarPrecios -> ajaxEliminarPrecios();

} else if (isset($_FILES)) {
    $archivo_Precios = new ajaxPrecios();
    $archivo_Precios->filePrecios = $_FILES['filePrecios'];
    $archivo_Precios->ajaxCargaMasivaPrecios();

} 
else {
    $productos = new ajaxPrecios();
    $productos->ajaxListarTipoPrecio();
}