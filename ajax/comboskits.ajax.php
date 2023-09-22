<?php

require_once "../controladores/productos.controlador.php";
require_once "../modelos/productos.modelo.php";

// require_once "../vendor/autoload.php";

class ajaxProductos
{
    public $fileProductos;
    public $PROD_Cod, $CLASE_Cod, $MAR_Cod, $FAM_Cod, $CLAP_Cod, $SEC_Cod, $LNA_Cod, $GRU_Cod, $ENV_Cod, $PROD_Dsc, $PROD_F_1, $PROD_F_2, $PROD_Peso, $PROD_VComision;

    public function ajaxCargaMasivaProductos()
    {
        $respuesta = ProductosControlador::ctrCargaMasivaProductos($this->fileProductos);
        echo json_encode($respuesta);
    }

    public function ajaxListarProductos()
    {
        $productos = ProductosControlador::ctrListarProductos();
        echo json_encode($productos);
    }

    public function ajaxRegistrarProducto()
    {
        $productos = ProductosControlador::ctrRegistrarProducto($this->PROD_Cod,$this->CLASE_Cod,$this->MAR_Cod,$this->FAM_Cod,
        $this->CLAP_Cod,$this->SEC_Cod,$this->LNA_Cod,$this->GRU_Cod,$this->ENV_Cod,
        $this->PROD_Dsc,$this->PROD_F_1,$this->PROD_F_2,$this->PROD_Peso,$this->PROD_VComision);

        echo json_encode($productos);
    }

    public function ajaxEditarProducto()
    {
        $productos = ProductosControlador::ctrEditarProducto($this->PROD_Cod);
        echo json_encode($productos);
    }

    public function ajaxActualizarProducto($data)
    {
        $table = "Producto";
        $id = $_POST["PROD_Cod"];
        $nameId = "PROD_Cod";

        $respuesta = ProductosControlador::ctrActualizarProducto($table, $data, $id, $nameId, $this->MAR_Cod, $this->FAM_Cod, $this->SEC_Cod, $this->LNA_Cod, $this->GRU_Cod);
        echo json_encode($respuesta);
    }

    public function ajaxEliminarProducto()
    {
        $table = "Producto";
        $id = $_POST["PROD_Cod"];
        $nameId = "PROD_Cod";

        $respuesta = ProductosControlador::ctrEliminarProducto($table, $id, $nameId);
        echo json_encode($respuesta);
    }
}

if (isset($_POST['accion']) && $_POST['accion'] == 1) {  // Parametro para listar productos
    $productos = new ajaxProductos();
    $productos->ajaxListarProductos();

} else if (isset($_POST['accion']) && $_POST['accion'] == 2) { // Parametro para registrar productos
    $RegistrarProducto = new ajaxProductos();
    $RegistrarProducto -> PROD_Cod = $_POST["PROD_Cod"];
    $RegistrarProducto -> CLASE_Cod = $_POST["CLASE_Cod"];
    $RegistrarProducto -> MAR_Cod = $_POST["MAR_Cod"];
    $RegistrarProducto -> FAM_Cod = $_POST["FAM_Cod"];
    $RegistrarProducto -> CLAP_Cod = $_POST["CLAP_Cod"];
    $RegistrarProducto -> SEC_Cod = $_POST["SEC_Cod"];
    $RegistrarProducto -> LNA_Cod = $_POST["LNA_Cod"];
    $RegistrarProducto -> GRU_Cod = $_POST["GRU_Cod"];
    $RegistrarProducto -> ENV_Cod = $_POST["ENV_Cod"];
    $RegistrarProducto -> PROD_Dsc = $_POST["PROD_Dsc"];
    $RegistrarProducto -> PROD_F_1 = $_POST["PROD_F_1"];
    $RegistrarProducto -> PROD_F_2 = $_POST["PROD_F_2"];
    $RegistrarProducto -> PROD_Peso = $_POST["PROD_Peso"];
    $RegistrarProducto -> PROD_VComision = $_POST["PROD_VComision"];
    $RegistrarProducto -> ajaxRegistrarProducto();

} else if (isset($_POST['accion']) && $_POST['accion'] == 3) { // Parametro para editar productos
    $EditarProducto = new ajaxProductos();
    $EditarProducto -> PROD_Cod = $_POST["PROD_Cod"];
    $EditarProducto -> ajaxEditarProducto();

} else if (isset($_POST['accion']) && $_POST['accion'] == 4) { // Parametro para actualizar producto
    $actualizarProducto = new ajaxProductos();
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
    $actualizarProducto -> ajaxActualizarProducto($data);

} else if (isset($_POST['accion']) && $_POST['accion'] == 5) { // Parametro para eliminar producto
    $eliminarProducto = new ajaxProductos();
    $eliminarProducto -> ajaxEliminarProducto();

} else if (isset($_FILES)) {
    $archivo_productos = new ajaxProductos();
    $archivo_productos->fileProductos = $_FILES['fileProductos'];
    $archivo_productos->ajaxCargaMasivaProductos();
}