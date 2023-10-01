<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Catálogos / Productos</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Catálogos / Productos</li>
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
        /*===============================================================*/         -->
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
                                    <input type="text" id="iptCodigoPadre" class="form-control" placeholder="Código Padre..." data-index="2">
                                    <label for="iptCodigoPadre">Código Padre</label>
                                </div>
                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input type="text" id="iptClasificador1" class="form-control" placeholder="Clasificador 1..." data-index="3">
                                    <label for="iptClasificador1">Clasificador 1</label>
                                </div>
                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input type="text" id="iptClasificador2" class="form-control" placeholder="Clasificador 2..." data-index="4">
                                    <label for="iptClasificador2">Clasificador 2</label>
                                </div>
                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input type="text" id="iptNombre" class="form-control" placeholder="Nombre..." data-index="5">
                                    <label for="iptNombre">Nombre</label>
                                </div>
                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input type="text" id="iptEnvase" class="form-control" placeholder="Envase..." data-index="6">
                                    <label for="iptEnvase">Envase</label>
                                </div>
                            </div>
                        </div>
                    </div> <!-- ./ end card-body -->
                </div>
            </div>
        </div>
        <!-- /*===============================================================*/
       // LISTADO DE PRODUCTOS 
        /*===============================================================*/ -->
        <div class="row">
            <div class="col-lg-12">
                <Table id="tbl_productos" class="table table-striped w-100 shadow">
                    <thead class="bg-info">
                        <tr>
                            <th></th>
                            <th>Codigo</th>
                            <th>C. Padre</th>
                            <th>Clasificador 1</th>
                            <th>Clasificador 2</th>
                            <th>Nombre</th>
                            <th>Envase</th>
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

<div class="modal fade" id="mdlGestionarProducto" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Contenido del Modal -->
        <div class="modal-content">
            <!-- Cabecera del Modal -->
            <div class="modal-header bg-gray py-1 aling-items-center">
                <h5 class="modal-title" id="ModalTitulo">Agregar Producto</h5>
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
                            <label class="" for="ipCodigoProd"><i class="fas fa-barcode fs-6"></i>
                                <span class="small">Código de Producto</span><span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control form-control-sm" id="ipCodigoProd" 
                                name="ipCodigoProd" placeholder="Código de Producto" required>
                                <div class="invalid-feedback">Ingrese el código de producto</div>
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

        /*==============================================================*/
       // CARGA DEL LISTADO DE PRODUCTOS CON PLUGING DATA TABLES JS
       /*===============================================================*/
        table = $("#tbl_productos").DataTable({
            dom: 'Bfrtip',
            buttons: [{
                    text: 'Agregar Producto',
                    className: 'addNewRecord',
                    action: function(e, dt, node, config) {
                        //EVENTO PARA LEVANTAR LA VENTANA MODAL
                        accion = 2;  //2 = Registrar Producto
                        $("#mdlGestionarProducto").modal('show');
                        $("#ModalTitulo").html('Agregar Producto')
                    }
                },
                'excel', 'print', 'pageLength'
            ],
            pageLength: [5, 10, 15, 30, 50, 100],
            pageLength: 10,
            ajax: {
                url: "ajax/productos.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 1
                }, //1 = Listar Productos
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
                    targets: 7,
                    orderable: false,
                    render: function(datqa, type, full, meta) {
                        return "<center>" +
                            "<span class='btnEditarProducto text-primary px-1' style='cursor:pointer;'>" +
                            "<i class='fas fa-pencil-alt fs-5'></i>" +
                            "</span>" +

                           "<span class='btnEliminarProducto text-danger px-1' style='cursor:pointer;'>" +
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

        /*===============================================================*/
       // EVENTOS PARA CRITERIOS DE BUSQUEDA
       /*===============================================================*/
        $("#iptCodigoPadre").keyup(function() {
            table.column($(this).data('index')).search(this.value).draw();
        })
        $("#iptClasificador1").keyup(function() {
            table.column($(this).data('index')).search(this.value).draw();
        })
        $("#iptClasificador2").keyup(function() {
            table.column($(this).data('index')).search(this.value).draw();
        })
        $("#iptNombre").keyup(function() {
            table.column($(this).data('index')).search(this.value).draw();
        })
        $("#iptEnvase").keyup(function() {
            table.column($(this).data('index')).search(this.value).draw();
        })
        /*===============================================================*/
       // EVENTOS PARA LIMPIAR CRITERIOS DE BUSQUEDA
       /*===============================================================*/
        $("#btnLimpiarBusqueda").on('click', function() {

            $("#iptCodigoPadre").val('')
            $("#iptClasificador1").val('')
            $("#iptClasificador2").val('')
            $("#iptNombre").val('')
            $("#iptEnvase").val('')

            table.search('').columns().search('').draw();

        })
        /*===============================================================*/
       // CARGA DATOS PARA LISTAS DESPLEGABLES
       /*===============================================================*/

        // CARGA DEL LISTADO DE TIPO DE PRODUCTO
        $.ajax({
            url: "ajax/tipoproducto.ajax.php",
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(respuesta) {
                var options = '<option selected value=""></option>';
                for (let index = 0; index < respuesta.length; index++) {
                    options = options + '<option value=' + respuesta[index][0] + '>' + respuesta[index][1] + '</option>';
                }
                $("#ipTipoProducto").html(options);
            }
        });
        // CARGA DEL LISTADO DE CLASIFICADOR 1
        $.ajax({
            url: "ajax/clasificador1.ajax.php",
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(respuesta) {
                var options = '<option selected value=""></option>';
                for (let index = 0; index < respuesta.length; index++) {
                    options = options + '<option value=' + respuesta[index][0] + '>' + respuesta[index][1] + '</option>';
                }
                $("#ipClasificador1").html(options);
            }
        });
        // CARGA DEL LISTADO DE CLASIFICADOR 2
        $.ajax({
            url: "ajax/clasificador2.ajax.php",
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(respuesta) {
                var options = '<option selected value=""></option>';
                for (let index = 0; index < respuesta.length; index++) {
                    options = options + '<option value=' + respuesta[index][0] + '>' + respuesta[index][1] + '</option>';
                }
                $("#ipClasificador2").html(options);
            }
        });
        // CARGA DEL LISTADO DE CLASIFICADOR 3
        $.ajax({
            url: "ajax/clasificador3.ajax.php",
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(respuesta) {
                var options = '<option selected value=""></option>';
                for (let index = 0; index < respuesta.length; index++) {
                    options = options + '<option value=' + respuesta[index][0] + '>' + respuesta[index][1] + '</option>';
                }
                $("#ipClasificador3").html(options);
            }
        });
        // CARGA DEL LISTADO DE CLASIFICADOR 4
        $.ajax({
            url: "ajax/clasificador4.ajax.php",
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(respuesta) {
                var options = '<option selected value=""></option>';
                for (let index = 0; index < respuesta.length; index++) {
                    options = options + '<option value=' + respuesta[index][0] + '>' + respuesta[index][1] + '</option>';
                }
                $("#ipClasificador4").html(options);
            }
        });
        // CARGA DEL LISTADO DE CLASIFICADOR 5
        $.ajax({
            url: "ajax/clasificador5.ajax.php",
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(respuesta) {
                var options = '<option selected value=""></option>';
                for (let index = 0; index < respuesta.length; index++) {
                    options = options + '<option value=' + respuesta[index][0] + '>' + respuesta[index][1] + '</option>';
                }
                $("#ipClasificador5").html(options);
            }
        });
        // CARGA DEL LISTADO DE CLASIFICADOR 6
        $.ajax({
            url: "ajax/clasificador6.ajax.php",
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(respuesta) {
                var options = '<option selected value=""></option>';
                for (let index = 0; index < respuesta.length; index++) {
                    options = options + '<option value=' + respuesta[index][0] + '>' + respuesta[index][1] + '</option>';
                }
                $("#ipClasificador6").html(options);
            }
        });
        // CARGA DEL LISTADO DE ENVASES DE VENTA
        $.ajax({
            url: "ajax/envase.ajax.php",
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(respuesta) {
                var options = '<option selected value=""></option>';
                for (let index = 0; index < respuesta.length; index++) {
                    options = options + '<option value=' + respuesta[index][0] + '>' + respuesta[index][1] + '</option>';
                }
                $("#ipEnvaseVenta").html(options);
            }
        });

        /*===============================================================*/
       // EVENTO AL DAR CLICK BOTON REGISTRAR EL PRODUCTO
       /*===============================================================*/
        document.getElementById("btnGuardarProducto").addEventListener("click",function(){
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form){
            
            if (form.checkValidity() === true) {
           
                Swal.fire({
                    title: 'Está seguro de registrar el producto ?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, deseo registrarlo!',
                    cancelButtonText: 'Cancelar',
                }).then((result) => {
        
                    if (result.isConfirmed){
                    
                        var datos = new FormData();
                        datos.append("accion",accion);
                        datos.append("PROD_Cod",$("#ipCodigoProd").val());
                        datos.append("CLASE_Cod",$("#ipTipoProducto").val());
                        datos.append("MAR_Cod",$("#ipClasificador1").val());
                        datos.append("FAM_Cod",$("#ipClasificador2").val());
                        datos.append("CLAP_Cod",$("#ipClasificador3").val());
                        datos.append("SEC_Cod",$("#ipClasificador4").val());
                        datos.append("LNA_Cod",$("#ipClasificador5").val());
                        datos.append("GRU_Cod",$("#ipClasificador6").val());
                        datos.append("ENV_Cod",$("#ipEnvaseVenta").val());
                        datos.append("PROD_Dsc",$("#ipNombreProducto").val());
                        datos.append("PROD_F_1",$("#ipFactorConversion1").val());
                        datos.append("PROD_F_2",$("#ipFactorConversion2").val());
                        datos.append("PROD_Peso",$("#ipPeso").val());
                        datos.append("PROD_VComision",$("#ipComision").val());

                        $.ajax({
                            url: "ajax/productos.ajax.php",
                            method: "POST",
                            data: datos,
                            cache: false,
                            contentType: false,
                            processData: false,
                            dataType: 'json',
                            success: function(respuesta) {
                                // console.log("Producto crear", respuesta);
                                if (respuesta == "ok"){
                                    Toast.fire({
                                        icon: 'success',
                                        title: 'El producto se registró correctamente'
                                    });
                                
                                    $(".needs-validation").removeClass("was-validated");
                                    table.ajax.reload();
                                
                                    $("#mdlGestionarProducto").modal('hide');
                                
                                    $("#ipCodigoProd").val("");
                                    $("#ipTipoProducto").val(0);
                                    $("#ipClasificador1").val(0);
                                    $("#ipClasificador2").val(0);
                                    $("#ipClasificador3").val(0);
                                    $("#ipClasificador4").val(0);
                                    $("#ipClasificador5").val(0);
                                    $("#ipClasificador6").val(0);
                                    $("#ipEnvaseVenta").val(0);
                                    $("#ipNombreProducto").val("");
                                    $("#ipFactorConversion1").val("");
                                    $("#ipFactorConversion2").val("");
                                    $("#ipPeso").val("");
                                    $("#ipComision").val("");
                                
                                } else {
                                    Toast.fire({
                                        icon: 'error',
                                        title: 'El producto no se pudo registrar'
                                    });
                                }
                            }
                        });
                    };
                })
            
            } else {
                console.log("No paso la validacion")
            }
            form.classList.add('was-validated')
            });
        });

        /*===============================================================*/
      // EVENTO AL DAR CLICK BOTON EDIT PRODUCTO
      /*===============================================================*/
       $('#tbl_productos tbody').on('click','.btnEditarProducto',function(){
            $("#mdlGestionarProducto").modal('show');
            $("#ModalTitulo").html('Actualizar Producto')            
            var options;
            var data = table.row($(this).parents('tr')).data();
            var datos = new FormData();

            accion = 3; // Setear para accion de editar
            datos.append("accion",accion);
            datos.append("PROD_Cod",data[1]);
            // alert("entro editar ");            
            // console.log(datos);

            $.ajax({
                url: "ajax/productos.ajax.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function(respuesta1) {
                    // alert("entro respuesta1 ");
                    // console.log(respuesta1);
                    $("#ipCodigoProd").val(respuesta1[0]);
                    $.ajax({
                        url: "ajax/tipoproducto.ajax.php",
                        cache: false,
                        contentType: false,
                        processData: false,
                        dataType: 'json',
                        success: function(respuesta) {
                            options = ""                            
                            for (let index = 0; index < respuesta.length; index++) {
                                if (respuesta[index][0] == (respuesta1[1])) {
                                    options = options + '<option value=' + respuesta[index][0] + ' selected="selected">' + respuesta[index][1] + '</option>';
                                } else {
                                    options = options + '<option value=' + respuesta[index][0] + '>' + respuesta[index][1] + '</option>';
                                }
                            }
                            $("#ipTipoProducto").html(options)
                        }
                    })
                    $.ajax({
                        url: "ajax/clasificador1.ajax.php",
                        cache: false,
                        contentType: false,
                        processData: false,
                        dataType: 'json',
                        success: function(respuesta) {
                            options = ""
                            for (let index = 0; index < respuesta.length; index++) {
                                if (respuesta[index][0] == (respuesta1[2])) {
                                    options = options + '<option value=' + respuesta[index][0] + ' selected="selected">' + respuesta[index][1] + '</option>';
                                } else {
                                    options = options + '<option value=' + respuesta[index][0] + '>' + respuesta[index][1] + '</option>';
                                }
                            }
                            $("#ipClasificador1").html(options)
                        }
                    })
                    $.ajax({
                        url: "ajax/clasificador2.ajax.php",
                        cache: false,
                        contentType: false,
                        processData: false,
                        dataType: 'json',
                        success: function(respuesta) {
                            options = ""                            
                            for (let index = 0; index < respuesta.length; index++) {
                                if (respuesta[index][0] == (respuesta1[3])) {
                                    options = options + '<option value=' + respuesta[index][0] + ' selected="selected">' + respuesta[index][1] + '</option>';
                                } else {
                                    options = options + '<option value=' + respuesta[index][0] + '>' + respuesta[index][1] + '</option>';
                                }
                            }
                            $("#ipClasificador2").html(options)
                        }
                    })
                    $.ajax({
                        url: "ajax/clasificador3.ajax.php",
                        cache: false,
                        contentType: false,
                        processData: false,
                        dataType: 'json',
                        success: function(respuesta) {
                            options = ""
                            for (let index = 0; index < respuesta.length; index++) {
                                if (respuesta[index][0] == (respuesta1[4])) {
                                    options = options + '<option value=' + respuesta[index][0] + ' selected="selected">' + respuesta[index][1] + '</option>';
                                } else {
                                    options = options + '<option value=' + respuesta[index][0] + '>' + respuesta[index][1] + '</option>';
                                }
                            }
                            $("#ipClasificador3").html(options)
                        }
                    })
                    $.ajax({
                        url: "ajax/clasificador4.ajax.php",
                        cache: false,
                        contentType: false,
                        processData: false,
                        dataType: 'json',
                        success: function(respuesta) {
                            options = ""
                            for (let index = 0; index < respuesta.length; index++) {
                                if (respuesta[index][0] == (respuesta1[5])) {
                                    options = options + '<option value=' + respuesta[index][0] + ' selected="selected">' + respuesta[index][1] + '</option>';
                                } else {
                                    options = options + '<option value=' + respuesta[index][0] + '>' + respuesta[index][1] + '</option>';
                                }
                            }
                            $("#ipClasificador4").html(options)
                        }
                    })
                    $.ajax({
                        url: "ajax/clasificador5.ajax.php",
                        cache: false,
                        contentType: false,
                        processData: false,
                        dataType: 'json',
                        success: function(respuesta) {
                            options = ""
                            for (let index = 0; index < respuesta.length; index++) {
                                if (respuesta[index][0] == (respuesta1[6])) {
                                    options = options + '<option value=' + respuesta[index][0] + ' selected="selected">' + respuesta[index][1] + '</option>';
                                } else {
                                    options = options + '<option value=' + respuesta[index][0] + '>' + respuesta[index][1] + '</option>';
                                }
                            }
                            $("#ipClasificador5").html(options)
                        }
                    })
                    $.ajax({
                        url: "ajax/clasificador6.ajax.php",
                        cache: false,
                        contentType: false,
                        processData: false,
                        dataType: 'json',
                        success: function(respuesta) {
                            options = ""
                            for (let index = 0; index < respuesta.length; index++) {
                                if (respuesta[index][0] == (respuesta1[7])) {
                                    options = options + '<option value=' + respuesta[index][0] + ' selected="selected">' + respuesta[index][1] + '</option>';
                                } else {
                                    options = options + '<option value=' + respuesta[index][0] + '>' + respuesta[index][1] + '</option>';
                                }
                            }
                            $("#ipClasificador6").html(options)
                        }
                    })
                    $.ajax({
                        url: "ajax/envase.ajax.php",
                        cache: false,
                        contentType: false,
                        processData: false,
                        dataType: 'json',
                        success: function(respuesta) {
                            options = ""
                            for (let index = 0; index < respuesta.length; index++) {
                                if (respuesta[index][0] == (respuesta1[8])) {
                                    options = options + '<option value=' + respuesta[index][0] + ' selected="selected">' + respuesta[index][1] + '</option>';
                                } else {
                                    options = options + '<option value=' + respuesta[index][0] + '>' + respuesta[index][1] + '</option>';
                                }
                            }
                            $("#ipEnvaseVenta").html(options)
                        }
                    })
                   
                    $("#ipNombreProducto").val(respuesta1[9]);
                    $("#ipFactorConversion1").val(formatoMexico4(respuesta1[10]));
                    $("#ipFactorConversion2").val(formatoMexico4(respuesta1[11]));
                    $("#ipPeso").val(formatoMexico3(respuesta1[12]));
                    $("#ipComision").val(formatoMexico3(respuesta1[13]));
                }
            })
            accion = 4; // Setear para accion de actualizar
        }),
        /*===============================================================*/
      // EVENTO AL DAR CLICK BOTON ELIMINAR PRODUCTO
      /*===============================================================*/
        $('#tbl_productos tbody').on('click','.btnEliminarProducto',function(){
            accion = 5; // Setear para accion de bloquear producto
            var data = table.row($(this).parents('tr')).data();
            var PROD_Cod = data[1];

            Swal.fire({
                title: 'Está seguro de bloquear el producto ?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, deseo bloquearlo!',
                cancelButtonText: 'Cancelar',
            }).then((result) => {
    
                if (result.isConfirmed){
                
                    var datos = new FormData();
                    datos.append("accion",accion);
                    datos.append("PROD_Cod",PROD_Cod);

                    $.ajax({
                        url: "ajax/productos.ajax.php",
                        method: "POST",
                        data: datos,
                        cache: false,
                        contentType: false,
                        processData: false,
                        dataType: 'json',
                        success: function(respuesta) {
                            // console.log("Producto crear", respuesta);
                            if (respuesta == "ok"){
                                Toast.fire({
                                    icon: 'success',
                                    title: 'El producto se bloqueo correctamente'
                                });

                                table.ajax.reload();

                            } else {
                                Toast.fire({
                                    icon: 'error',
                                    title: 'El producto no se pudo bloquear'
                                });
                            }
                        }
                    });
                };
            })
        }),
       /*===============================================================*/
      // CANCELAR REGISTRO DE PRODUCTO
      /*===============================================================*/
        document.getElementById("btnCancelarRegistro").addEventListener("click",function() {
            $(".needs-validation").removeClass("was-validated");
        });

        /*===============================================================*/
      // EVENTOS PARA LIMPIAR MODAL DE REGISTRO DE PRODUCTOS
      /*===============================================================*/
        $("#btnCancelarRegistro, #btnCerrarModal").on('click', function() {

            $("#validate_CodigoProd").css("display","none");
            $("#validate_TipoProducto").css("display","none");
            $("#validate_Clasificador1").css("display","none");
            $("#validate_Clasificador2").css("display","none");
            $("#validate_Clasificador3").css("display","none");
            $("#validate_Clasificador4").css("display","none");
            $("#validate_Clasificador5").css("display","none");
            $("#validate_Clasificador6").css("display","none");
            $("#validate_EnvaseVenta").css("display","none");
            $("#validate_NombreProducto").css("display","none");
            $("#validate_FactorConversion1").css("display","none");
            $("#validate_FactorConversion2").css("display","none");
            $("#validate_Peso").css("display","none");
            $("#validate_Comision").css("display","none");

            $("#ipCodigoProd").val("");
            $("#ipTipoProducto").val(0);
            $("#ipClasificador1").val(0);
            $("#ipClasificador2").val(0);
            $("#ipClasificador3").val(0);
            $("#ipClasificador4").val(0);
            $("#ipClasificador5").val(0);
            $("#ipClasificador6").val(0);
            $("#ipEnvaseVenta").val(0);
            $("#ipNombreProducto").val("");
            $("#ipFactorConversion1").val("");
            $("#ipFactorConversion2").val("");
            $("#ipPeso").val("");
            $("#ipComision").val("");
        })


    })

</script>

<script>
    const formatoMexico3 = (number, Digits ) => {
        return Intl.NumberFormat("es-MX", {
            minimumFractionDigits: Digits,
            maximumFractionDigits: Digits
        }).format(number)
    }
    const formatoMexico4 = (number ) => {
        return Intl.NumberFormat("es-MX", {
            minimumFractionDigits: 5,
            maximumFractionDigits: 5
        }).format(number)
    }    
</script>