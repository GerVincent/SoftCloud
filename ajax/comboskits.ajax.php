<?php

require_once "../controladores/comboskits.controlador.php";
require_once "../modelos/comboskits.modelo.php";

// require_once "../vendor/autoload.php";

class ajaxComboKit
{
    public $PROD_Cod, $CLASE_Cod, $MAR_Cod, $FAM_Cod, $CLAP_Cod, $SEC_Cod, $LNA_Cod, $GRU_Cod, $ENV_Cod, $PROD_Dsc, $PROD_F_1, $PROD_F_2, $PROD_Peso, $PROD_VComision;

    public function ajaxListarComboKit()
    {
        $combokit = ComboKitControlador::ctrListarComboKit();
        echo json_encode($combokit);
    }

    public function ajaxRegistrarComboKit($data)
    {
        $productos = ComboKitControlador::ctrRegistrarComboKit($data);

        echo json_encode($productos);
    }

    public function ajaxEditarComboKit()
    {
        $productos = ComboKitControlador::ctrEditarComboKit();
        echo json_encode($productos);
    }

    public function ajaxActualizarComboKit($data)
    {
        $table = "Producto";
        $id = $_POST["PROD_Cod"];
        $nameId = "PROD_Cod";

        $respuesta = ComboKitControlador::ctrActualizarComboKit($table, $data, $id, $nameId, $this->MAR_Cod, $this->FAM_Cod, $this->SEC_Cod, $this->LNA_Cod, $this->GRU_Cod);
        echo json_encode($respuesta);
    }

    public function ajaxEliminarComboKit()
    {
        $table = "Producto";
        $id = $_POST["PROD_Cod"];
        $nameId = "PROD_Cod";

        $respuesta = ComboKitControlador::ctrEliminarComboKit($table, $id, $nameId);
        echo json_encode($respuesta);
    }
}

if (isset($_POST['accion']) && $_POST['accion'] == 1) {  // Parametro para listar productos
    $combokit = new ajaxComboKit();
    $combokit->ajaxListarComboKit();

} else if (isset($_POST['accion']) && $_POST['accion'] == 2 // Parametro para registrar productos
  && isset($_POST['nro_componentes']) && $_POST['nro_componentes'] > 0) {

    $RegistrarProducto = new ajaxComboKit();
    $data = [];
    for ($index = 1; $index <= $_POST['nro_componentes']; $index++) {
        array_push($data,$_POST["PROD_Item".$index]);
        array_push($data,$_POST["PROD_CodHijo".$index]);
        array_push($data,$_POST["PROD_CantidadHijo".$index]);
    };
    $RegistrarProducto -> ajaxRegistrarComboKit($data);

} else if (isset($_POST['accion']) && $_POST['accion'] == 3) { // Parametro para seleccionar codigo padre
    $EditarProducto = new ajaxComboKit();
    $EditarProducto -> ajaxEditarComboKit();

} else if (isset($_POST['accion']) && $_POST['accion'] == 4) { // Parametro para actualizar producto
    $actualizarProducto = new ajaxComboKit();
    $actualizarProducto -> MAR_Cod = $_POST["MAR_Cod"];
    $actualizarProducto -> FAM_Cod = $_POST["FAM_Cod"];
    $actualizarProducto -> SEC_Cod = $_POST["SEC_Cod"];
    $actualizarProducto -> LNA_Cod = $_POST["LNA_Cod"];
    $actualizarProducto -> GRU_Cod = $_POST["GRU_Cod"];

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
    $actualizarProducto -> ajaxActualizarComboKit($data);

} else if (isset($_POST['accion']) && $_POST['accion'] == 5) { // Parametro para eliminar producto
    $eliminarProducto = new ajaxComboKit();
    $eliminarProducto -> ajaxEliminarComboKit();

} else {
    $EditarProducto = new ajaxComboKit();
    $EditarProducto -> ajaxEditarComboKit();    

}