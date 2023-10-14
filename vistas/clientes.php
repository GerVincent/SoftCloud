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
                    <li class="breadcrumb-item active">Catálogos / Clientes</li>
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
                                    <input type="text" id="iptNroDocumento" class="form-control" placeholder="Tipo de Documento..." data-index="1">
                                    <label for="iptNroDocumento">Documento</label>
                                </div>
                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input type="text" id="iptNombre" class="form-control" placeholder="Nombre de Cliente..." data-index="2">
                                    <label for="iptNombre">Nombre</label>
                                </div>
                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input type="text" id="iptDireccion" class="form-control" placeholder="Dirección del Cliente..." data-index="3">
                                    <label for="iptDirecccion">Dirección</label>
                                </div>
                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input type="text" id="iptUbigeo" class="form-control" placeholder="Ubigeo..." data-index="4">
                                    <label for="iptUbigeo">UBIGEO</label>
                                </div>
                            </div>
                        </div>
                    </div> <!-- ./ end card-body -->
                </div>
            </div>
        </div>
        <!-- /*============================================================*/
       // LISTADO DE CLIENTES
       /*=============================================================*/ -->
        <div class="row">
            <div class="col-lg-12">
                <Table id="tbl_clientes" class="table table-striped w-100 shadow">
                    <thead class="bg-info">
                        <tr>
                            <th></th>
                            <th>Documento</th>
                            <th>Nombre</th>
                            <th>Dirección</th>
                            <th>UBIGEO</th>
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

<!-- /*===============================================================*/
// VENTANA MODAL PARA INGRESO DE PRODUCTOS 
/*===============================================================*/ -->

<div class="modal fade" id="mdlGestionarCliente" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Contenido del Modal -->
        <div class="modal-content">
            <!-- Cabecera del Modal -->
            <div class="modal-header bg-gray py-1 aling-items-center">
                <h5 class="modal-title" id="ModalTitulo">Agregar Cliente</h5>
                <button type="button" class="btn btn-outline-primary text-white border-0 fs-5" data-bs-dismiss="modal" id="btnCerrarModal">
                    <i class="far fa-times-circle"></i>
                </button>
            </div>
            <!-- Cuerpo del Modal -->
            <div class="modal-body">
                <form class="needs-validation" novalidate>
                    <!-- Abrimos una Fila -->
                    <!-- ELEMENTOS DE FORMULARIO MODAL -->
                    <div class="row">
                        <!-- Columna para el registro del código de producto  -->
                        <div class="col-lg-4">
                        <div class="form-group mb-2">
                            <label class="" for="ipdni_ruc_cliente"><i class="fas fa-barcode fs-6"></i>
                                <span class="small">Doc. Ident. Cliente</span><span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control form-control-sm" id="ipdni_ruc_cliente"
                                name="ipCodigoProd" placeholder="Doc. del Cliente" required>
                                <div class="invalid-feedback">Ingrese Doc. Ident. del Cliente</div>
                        </div>
                        </div>
                        <!-- Columna para el registro del Tipo de Producto CLASE DE PRODUCTO-->
                        <div class="col-lg-6">
                        <div class="form-group mb-2">
                            <label class="" for="ipTipoProducto"><i class="fas fa-chart-bar fs-6"></i>
                                <span class="small">Tipo de Actividad</span><span class="text-danger">*</span>
                            </label>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                id="ipTipoProducto" required>
                            </select>
                            <div class="invalid-feedback">Seleccione un tipo de actividad</div>
                        </div>
                        </div>
                        <!-- Columna para el registro del Clasificador 1 MARCA DE PRODUCTO -->
                        <div class="col-lg-6">
                        <div class="form-group mb-2">
                            <label class="" for="ipClasificador1"><i class="fas fa-chart-bar fs-6"></i>
                                <span class="small">Clasificador 1</span><span class="text-danger">*</span>
                            </label>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                id="ipClasificador1" required>
                            </select>
                            <div class="invalid-feedback">Seleccione un clasificador</div>
                        </div>
                        </div>
                        <!-- Columna para el registro del Clasificador 2 FAMILIA DE PRODUCTO -->
                        <div class="col-lg-6">
                        <div class="form-group mb-2">
                            <label class="" for="ipClasificador2"><i class="fas fa-chart-bar fs-6"></i>
                                <span class="small">Clasificador 2</span><span class="text-danger">*</span>
                            </label>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                id="ipClasificador2" required>
                            </select>
                            <div class="invalid-feedback">Seleccione un clasificador</div>
                        </div>
                        </div>
                        <!-- Columna para el registro del Clasificador 3 CLASIFICACION DE PRODUCTO -->
                        <div class="col-lg-6">
                        <div class="form-group mb-2">
                            <label class="" for="ipClasificador3"><i class="fas fa-chart-bar fs-6"></i>
                                <span class="small">Clasificador 3</span><span class="text-danger">*</span>
                            </label>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                id="ipClasificador3" required>
                            </select>
                            <div class="invalid-feedback">Seleccione un clasificador</div>
                        </div>
                        </div>
                        <!-- Columna para el registro del Clasificador 4 SECCION DE PRODUCTO -->
                        <div class="col-lg-6">
                        <div class="form-group mb-2">
                            <label class="" for="ipClasificador4"><i class="fas fa-chart-bar fs-6"></i>
                                <span class="small">Clasificador 4</span><span class="text-danger">*</span>
                            </label>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                id="ipClasificador4" required>
                            </select>
                            <div class="invalid-feedback">Seleccione un clasificador</div>
                        </div>
                        </div>
                        <!-- Columna para el registro del Clasificador 5 LINEA DE PRODUCTO -->
                        <div class="col-lg-6">
                        <div class="form-group mb-2">
                            <label class="" for="ipClasificador5"><i class="fas fa-chart-bar fs-6"></i>
                                <span class="small">Clasificador 5</span><span class="text-danger">*</span>
                            </label>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                id="ipClasificador5" required>
                            </select>
                            <div class="invalid-feedback">Seleccione un clasificador</div>
                        </div>
                        </div>
                        <!-- Columna para el registro del Clasificador 6 GRUPO DE PRODUCTO -->
                        <div class="col-lg-6">
                        <div class="form-group mb-2">
                            <label class="" for="ipClasificador6"><i class="fas fa-chart-bar fs-6"></i>
                                <span class="small">Clasificador 6</span><span class="text-danger">*</span>
                            </label>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                id="ipClasificador6" required>
                            </select>
                        </div>
                        </div>
                        <div class="col-lg-6">
                        <!-- Columna para el registro del Envase de Venta  -->                        
                        <div class="form-group mb-2">
                            <label class="" for="ipEnvaseVenta"><i class="fas fa-chart-bar fs-6"></i>
                                <span class="small">Envase de Venta</span><span class="text-danger">*</span>
                            </label>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                id="ipEnvaseVenta" required>
                            </select>
                            <div class="invalid-feedback">Seleccione un envase</div>
                        </div>
                        </div>
                        <div class="col-lg-12">
                        <!-- Columna para el registro del Nombre del Producto  -->                        
                        <div class="form-group mb-2">
                            <label class="" for="ipNombreProducto"><i class="fas fa-file-signature fs-6"></i>
                                <span class="small">Nombre del Producto</span><span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control form-control-sm" id="ipNombreProducto" 
                                name="ipNombreProducto" placeholder="Nombre del Producto" required>
                                <div class="invalid-feedback">Ingrese un nombre de producto</div>
                        </div>
                        </div>
                        <div class="col-lg-3">
                        <!-- Columna para el registro del Factor de Conversión 1 BARRILES -->                        
                        <div class="form-group mb-2">
                            <label class="" for="ipFactorConversion1"><i 
                                class="fas fa-divide fs-6" ></i> <span class="small">Factor 1
                                </span><span class="text-danger">*</span></label>
                            <input type="number" step="any" name="numero" onKeypress="if( event.keyCode < 46 || event.keyCode > 57 || event.keyCode == 47) event.returnValue = false;"
                                min=0 class="form-control form-control-sm" id="ipFactorConversion1" placeholder="Factor de Conversión 1" required>
                            <div class="invalid-feedback">Ingrese un factor tipo 1</div>
                        </div>
                        </div>
                        <div class="col-lg-3">
                        <!-- Columna para el registro del Factor de Conversión 2 LITROS -->                        
                        <div class="form-group mb-2">
                            <label class="" for="ipFactorConversion2"><i 
                                class="fas fa-divide fs-6" ></i> <span class="small">Factor 2
                                </span><span class="text-danger">*</span></label>
                            <input type="number" step="any" name="numero" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"
                                min=0 class="form-control form-control-sm" id="ipFactorConversion2" placeholder="Factor de Conversión 2">
                        </div>
                        </div>
                        <div class="col-lg-3">                    
                        <!-- Columna para el registro del Peso -->
                        <div class="form-group mb-2">
                            <label class="" for="ipPeso"><i 
                                class="fas fa-balance-scale fs-6" ></i> <span class="small">Peso
                                </span><span class="text-danger">*</span></label>
                            <input type="number" step="any" name="numero" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"
                                min=0 class="form-control form-control-sm" id="ipPeso" placeholder="Peso" required>
                                <div class="invalid-feedback">Ingrese el peso del producto</div>                                
                        </div>
                        </div>
                        <div class="col-lg-3">                    
                        <!-- Columna para el registro de la Comisión -->
                        <div class="form-group mb-2">
                            <label class="" for="ipComision"><i 
                                class="fas fa-percent fs-6" ></i> <span class="small">Comision
                                </span><span class="text-danger">*</span></label>
                            <input type="number" step="any" name="numero" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"
                                min=0 class="form-control form-control-sm" id="ipComision" placeholder="Comisión">
                        </div>
                        </div>

                       <!-- Botones de Accion -->
                        <button type="button" class="btn btn-danger mt-3 mx-2" style="width:170px;" data-bs-dismiss="modal" 
                            id="btnCancelarRegistro">Cancelar</button>
                        <button type="button" style="width:170px;" class="btn btn-primary mt-3 mx-2" id="btnGuardarProducto">
                            Guardar Producto
                        </button>
                    </div>
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

       /*===============================================================*/
       // EVENTOS PARA CRITERIOS DE BUSQUEDA
       /*===============================================================*/
        $("#iptDocumento").keyup(function() {
            table.column($(this).data('index')).search(this.value).draw();
        })
        $("#iptNombre").keyup(function() {
            table.column($(this).data('index')).search(this.value).draw();
        })
        $("#iptDireccion").keyup(function() {
            table.column($(this).data('index')).search(this.value).draw();
        })
        $("#iptUbigeo").keyup(function() {
            table.column($(this).data('index')).search(this.value).draw();
        })
        /*===============================================================*/
       // EVENTOS PARA LIMPIAR CRITERIOS DE BUSQUEDA
       /*===============================================================*/
        $("#btnLimpiarBusqueda").on('click', function() {

            $("#iptDocumento").val('')
            $("#iptNombre").val('')
            $("#iptDireccion").val('')
            $("#iptUbigeo").val('')

            table.search('').columns().search('').draw();

        })
        /*==============================================================*/
       // CARGA DEL LISTADO DE PRODUCTOS CON PLUGING DATA TABLES JS
       /*===============================================================*/
        table = $("#tbl_clientes").DataTable({
            dom: 'Bfrtip',
            buttons: [{
                    text: 'Agregar Cliente',
                    className: 'addNewRecord',
                    action: function(e, dt, node, config) {
                        //EVENTO PARA LEVANTAR LA VENTANA MODAL
                        accion = 2;  //2 = Registrar Producto
                        $("#mdlGestionarCliente").modal('show');
                        $("#ModalTitulo").html('Agregar Cliente')
                    }
                },
                'excel', 'print', 'pageLength'
            ],
            pageLength: [5, 10, 15, 30, 50, 100],
            pageLength: 10,
            ajax: {
                url: "ajax/clientes.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 1
                }, 
            },
            responsive: {
                details: {
                    type: 'column'
                }
            },
            columnDefs: [{
                    targets: 0,
                    orderable: false,
                    className: 'control'
                },
                {
                    targets: 5,
                    orderable: false,
                    render: function(datqa, type, full, meta) {
                        return "<center>" +
                            "<span class='btnEditarCliente text-primary px-1' style='cursor:pointer;'>" +
                            "<i class='fas fa-pencil-alt fs-5'></i>" +
                            "</span>" +

                           "<span class='btnEliminarCliente text-danger px-1' style='cursor:pointer;'>" +
                            "<i class='fas fa-trash fs-5'></i>" +
                            "</span>" +
                            "</center>"
                    }
                }
            ],
            language: {
                url: "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            }
        });



    })
 </script>