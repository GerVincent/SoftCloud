<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Catálogos / Clientes</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Catálogos / Precios</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<font size="2">
<div class="content">
    <div class="container-fluid">
        <!-- ===============================================================*/
       // EVENTOS PARA CRITERIOS DE BUSQUEDA
       /*===============================================================*/ -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h5 class="card-title">CRITERIOS DE BUSQUEDA</h5>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" id="btnLimpiarBusqueda">
                                <i class="fas fa-times"></i>
                            </button>
                        </div> <!-- ./ end card-tools -->
                    </div> <!-- ./ end card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 d-lg-flex">
                                <div style="width: 20%;" class="form-floating mx-1">
                                    <!-- placeholder="Código Padre..."                             -->
                                    <input type="text" id="ptTipoCliente" class="form-control" placeholder="Tipo de Cliente..." data-index="1">
                                    <label for="iptTipoCliente">Tipo Cliente</label>
                                </div>
                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input type="text" id="iptTipoPrecio" class="form-control" placeholder="Tipo de Precio..." data-index="2">
                                    <label for="iptTipoPrecio">Tipo Precio</label>
                                </div>
                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input type="text" id="iptCodigoProducto" class="form-control" placeholder="Código Item..." data-index="3">
                                    <label for="iptCodigoProducto">Código Producto</label>
                                </div>
                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input type="text" id="iptNombreProducto" class="form-control" placeholder="Nombre Item..." data-index="4">
                                    <label for="iptNombreProducto">Nombre Producto</label>
                                </div>
                            </div>
                        </div>
                    </div> <!-- ./ end card-body -->
                </div>
            </div>
        </div>
        <!-- /*============================================================*/
       // LISTADO DE PRECIOS DE PRODUCTOS 
       /*=============================================================*/ -->
        <div class="row">
            <div class="col-lg-12">
                <Table id="tbl_productos" class="table table-striped w-100 shadow">
                    <thead class="bg-info">
                        <tr>
                            <th></th>
                            <th>Tipo Cliente</th>
                            <th>Tipo Precio</th>
                            <th>Código Producto</th>
                            <th>Nombre Producto</th>
                            <th>Precio Unitario</th>                            
                            <th class="text-center">Opciones</th>
                        </tr>
                    </thead>
                    <body>
                    </body>
                </Table>
            </div>
        </div>
    </div>
</div><!-- /.container-fluid -->
</font>
<!-- /.content -->
<!-- /*===============================================================*/
// VENTANA MODAL PARA INGRESO DE PRODUCTOS 
/*===============================================================*/ -->
 <div class="modal fade" id="mdlGestionarPrecios" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Contenido del Modal -->
        <div class="modal-content">
            <!-- Cabecera del Modal -->
            <div class="modal-header bg-gray py-1 aling-items-center">
                <h5 class="modal-title" id="ModalTitulo">Actualizar Precios de Productos</h5>
                <button type="button" class="btn btn-outline-primary text-white border-0 fs-5" data-bs-dismiss="modal" id="btnCerrarModal">
                    <i class="far fa-times-circle"></i>
                </button>
            </div>
            <!-- Cuerpo del Modal -->
            <div class="modal-body">
                <form class="needs-validation" novalidate>
                    <!-- ELEMENTOS DE FORMULARIO MODAL -->
                    <div class="row">

                    <!-- Columna Tipo de Cliente -->
                        <div class="col-lg-8">
                        <div class="form-group mb-2">
                            <label class=""><i class="fas fa-barcode fs-6"></i>
                                <span class="small">Tipo de Cliente</span><span class="text-danger">*</span>
                            </label>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" onchange
                                id="ipTipoCliente" required>
                            </select>
                            <div class="invalid-feedback">Seleccione Tipo de Cliente</div>
                        </div>
                        </div>
                        <div class="col-lg-8">
                        <div class="form-group mb-2">
                            <label class=""><i class="fas fa-barcode fs-6"></i>
                                <span class="small">Tipo de Precio</span><span class="text-danger">*</span>
                            </label>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" onchange
                                id="ipTipoPrecio" required>
                            </select>
                            <div class="invalid-feedback">Seleccione Tipo de Precio</div>
                        </div>
                        </div>
                        <div class="col-lg-4">
                    <!-- Columna para ingresar Cantidad Item 1 -->
                        <div class="form-group mb-2">
                            <label class="" for="ipPrecioUnitario"><i class="fas fa-list-ol" ></i> <span class="small">Precio Unitario
                            </span><span class="text-danger">*</span></label>
                            <input type="number" step="any" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"
                            min=0 class="form-control form-control-sm" id="ipPrecioUnitario" placeholder="Precio" required>
                            <div class="invalid-feedback">Ingrese Precio Unitario</div>
                        </div>
                        </div>

                      <!-- Botones de Accion -->
                       <button type="button" class="btn btn-danger mt-3 mx-2" style="width:170px;" data-bs-dismiss="modal" 
                          id="btnCancelarRegistro">Cancelar</button>
                       <button type="button" style="width:170px;" class="btn btn-primary mt-3 mx-2" id="btnGuardarProducto">
                          Guardar Precio
                       </button>
                    </div>
                    <!-- </div> -->
                </form>                    
            </div>
        </div>
    </div>
 </div>

 <script>
    var accion = 1;
    var table;
    var data;

    var Toast = Swal.mixin({
        toast: true,
        position: 'top',
        showConfirmButton: false,
        timer: 3000

    });

    $(document).ready(function() {    
    })
 </script>