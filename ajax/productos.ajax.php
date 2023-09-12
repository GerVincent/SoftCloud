<?php

require_once "../controladores/productos.controlador.php";
require_once "../modelos/productos.modelo.php";

// require_once "../vendor/autoload.php";

class ajaxProductos
{

    public $fileProductos;

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
    
}

if (isset($_POST['accion']) && $_POST['accion'] == 1) {
    $productos = new ajaxProductos();
    $productos->ajaxListarProductos();


} else if (isset($_FILES)) {
    $archivo_productos = new ajaxProductos();
    $archivo_productos->fileProductos = $_FILES['fileProductos'];
    $archivo_productos->ajaxCargaMasivaProductos();
}
