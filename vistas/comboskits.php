<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Catálogos / Combo-Kits</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Catálogos / Combo-Kits</li>
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
                                    <input type="text" id="iptCodigoCombo" class="form-control" placeholder="Código Combo-Kit..." data-index="1">
                                    <label for="iptCodigoCombo">Código Combo</label>
                                </div>
                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input type="text" id="iptNombreCombo" class="form-control" placeholder="Nombre Combo-Kit..." data-index="2">
                                    <label for="iptNombreCombo">Nombre Combo</label>
                                </div>
                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input type="text" id="iptItem" class="form-control" placeholder="Código Item..." data-index="3">
                                    <label for="iptItem">Item</label>
                                </div>
                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input type="text" id="iptNombreItem" class="form-control" placeholder="Nombre Item..." data-index="4">
                                    <label for="iptNombreItem">Nombre Item</label>
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
                            <th>Combo</th>
                            <th>Nombre Combo</th>
                            <th>Item</th>
                            <th>Nombre Item</th>
                            <th>Cant.Item</th>
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

<div class="modal fade" id="mdlGestionarComboKit" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Contenido del Modal -->
        <div class="modal-content">
            <!-- Cabecera del Modal -->
            <div class="modal-header bg-gray py-1 aling-items-center">
                <h5 class="modal-title" id="ModalTitulo">Agregar Combo-Kit</h5>
                <button type="button" class="btn btn-outline-primary text-white border-0 fs-5" data-bs-dismiss="modal" id="btnCerrarModal">
                    <i class="far fa-times-circle"></i>
                </button>
            </div>
            <!-- Cuerpo del Modal -->
            <div class="modal-body">
                <form class="needs-validation" novalidate>
                    <!-- ELEMENTOS DE FORMULARIO MODAL -->
                    <div class="row">
            <!-- COMPONENTE DE PAQUETE 1 -->
                      <!-- Columna para seleccionar Código de Item 1 -->
                        <div class="col-lg-8">
                        <div class="form-group mb-2">
                            <label class=""><i class="fas fa-barcode fs-6"></i>
                                <span class="small">Código de Producto  1</span><span class="text-danger">*</span>
                            </label>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" onchange
                                id="ipCodProItem1" required>
                            </select>
                            <div class="invalid-feedback">Seleccione Cod. de Item</div>
                        </div>
                        </div>
                        <div class="col-lg-4">
                        <!-- Columna para ingresar Cantidad Item 1 -->
                        <div class="form-group mb-2">
                            <label class="" for="ipCantidadItem1"><i class="fas fa-list-ol" ></i> <span class="small">Cantidad
                            </span><span class="text-danger">*</span></label>
                            <input type="number" step="any" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"
                            min=0 class="form-control form-control-sm" id="ipCantidadItem1" placeholder="Cantidad" required>
                            <div class="invalid-feedback">Ingrese Cantidad del Item</div>
                        </div>
                        </div>
            <!-- COMPONENTE DE PAQUETE 2 -->
                      <!-- Columna para seleccionar Código de Item 2 -->
                        <div class="col-lg-8">
                        <div class="form-group mb-2">
                            <label class="" for="ipCodProItem2"><i class="fas fa-barcode fs-6"></i>
                                <span class="small"> Código de Producto  2</span></label>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" onchange
                                id="ipCodProItem2">
                            </select>
                        </div>
                        </div>
                        <div class="col-lg-4">
                        <!-- Columna para ingresar Cantidad Item 2 -->
                        <div class="form-group mb-2">
                            <label class="" for="ipCantidadItem2"><i class="fas fa-list-ol" ></i>
                                <span class="small">Cantidad</span></label>
                            <input type="number" step="any" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"
                                min=0 class="form-control form-control-sm" id="ipCantidadItem2" placeholder="Cantidad">
                        </div>
                        </div>
            <!-- COMPONENTE DE PAQUETE 3 -->
                      <!-- Columna para seleccionar Código de Item 3 -->
                       <div class="col-lg-8">
                        <div class="form-group mb-2">
                            <label class="" "><i class="fas fa-barcode fs-6"></i>
                                <span class="small"> Código de Producto  3</span>
                            </label>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" onchange
                                id="ipCodProItem3">
                            </select>
                            <div class="invalid-feedback">Seleccione Cod. de producto</div>
                        </div>
                        </div>
                        <div class="col-lg-4">
                        <!-- Columna para ingresar Cantidad Item 3 -->
                        <div class="form-group mb-2">
                            <label class="" for="ipCantidadItem3"><i class="fas fa-list-ol" ></i> 
                                <span class="small">Cantidad</span></label>
                            <input type="number" step="any" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"
                                min=0 class="form-control form-control-sm" id="ipCantidadItem3" placeholder="Cantidad">
                            <div class="invalid-feedback">Ingrese Cantidad del Item</div>
                        </div>
                        </div>
            <!-- COMPONENTE DE PAQUETE 4 -->
                      <!-- Columna para seleccionar Código de Item 4 -->
                       <div class="col-lg-8">
                        <div class="form-group mb-2">
                            <label class=""><i class="fas fa-barcode fs-6"></i>
                                <span class="small">Código de Producto  4</span>
                            </label>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" onchange
                                id="ipCodProItem4">
                            </select>
                            <div class="invalid-feedback">Seleccione Cod. de Item</div>
                        </div>
                        </div>
                        <div class="col-lg-4">
                        <!-- Columna para ingresar Cantidad Item 4 -->
                        <div class="form-group mb-2">
                            <label class="" for="ipCantidadItem4"><iclass="fas fa-list-ol" ></i>
                                <span class="small">Cantidad</span></label>
                            <input type="number" step="any" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"
                                min=0 class="form-control form-control-sm" id="ipCantidadItem4" placeholder="Cantidad">
                            <div class="invalid-feedback">Ingrese Cantidad del Item</div>
                        </div>
                        </div>
            <!-- COMPONENTE DE PAQUETE 5 -->
                      <!-- Columna para seleccionar Código de Item 5 -->
                       <div class="col-lg-8">
                        <div class="form-group mb-2">
                            <label class=""><i class="fas fa-barcode fs-6"></i>
                                <span class="small">Código de Producto  5</span>
                            </label>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" onchange
                                id="ipCodProItem5">
                            </select>
                            <div class="invalid-feedback">Seleccione Cod. de Item</div>
                        </div>
                        </div>
                        <div class="col-lg-4">
                        <!-- Columna para ingresar Cantidad Item 2 -->
                        <div class="form-group mb-2">
                            <label class="" for="ipCantidadItem5"><iclass="fas fa-list-ol" ></i> 
                                <span class="small">Cantidad</span></label>
                            <input type="number" step="any" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"
                                min=0 class="form-control form-control-sm" id="ipCantidadItem5" placeholder="Cantidad">
                            <div class="invalid-feedback">Ingrese Cantidad del Item</div>
                        </div>
                        </div>

            <!-- COMPONENTE DE PAQUETE 6 -->
                      <!-- Columna para seleccionar Código de Item 6 -->
                      <div class="col-lg-8">
                        <div class="form-group mb-2">
                            <label class=""><i class="fas fa-barcode fs-6"></i>
                                <span class="small">Código de Producto  5</span>
                            </label>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" onchange
                                id="ipCodProItem6">
                            </select>
                            <div class="invalid-feedback">Seleccione Cod. de Item</div>
                        </div>
                        </div>
                        <div class="col-lg-4">
                        <!-- Columna para ingresar Cantidad Item 2 -->
                        <div class="form-group mb-2">
                            <label class="" for="ipCantidadItem6"><iclass="fas fa-list-ol" ></i> 
                                <span class="small">Cantidad</span></label>
                            <input type="number" step="any" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"
                                min=0 class="form-control form-control-sm" id="ipCantidadItem6" placeholder="Cantidad">
                            <div class="invalid-feedback">Ingrese Cantidad del Item</div>
                        </div>
                        </div>



                      <!-- Botones de Accion -->
                       <button type="button" class="btn btn-danger mt-3 mx-2" style="width:170px;" data-bs-dismiss="modal" 
                          id="btnCancelarRegistro">Cancelar</button>
                       <button type="button" style="width:170px;" class="btn btn-primary mt-3 mx-2" id="btnGuardarProducto">
                          Guardar Producto
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
    var ItemsPaquete;

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
                    text: 'Agregar Combo-Kit',
                    className: 'addNewRecord',
                    action: function(e, dt, node, config) {
                        //EVENTO PARA LEVANTAR LA VENTANA MODAL
                        accion = 3;  //2 = Registrar Producto
                        // alert("entro editar 3");
                        $("#mdlGestionarComboKit").modal('show');
                        $("#ModalTitulo").html('Agregar Combo-Kit')
                    }
                },
                'excel', 'print', 'pageLength'
            ],
            pageLength: [5, 10, 15, 30, 50, 100],
            pageLength: 10,
            ajax: {
                url: "ajax/comboskits.ajax.php",
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
            // columnDefs: [{
                    // targets: 0,
                    // orderable: false,
                    // className: 'control'
                // },
                // {
                    // targets: 6,
                    // orderable: false,
                    // render: function(datqa, type, full, meta) {
                        // return "<center>" +
                            // "<span class='btnEditarComboKit text-primary px-1' style='cursor:pointer;'>" +
                            // "<i class='fas fa-pencil-alt fs-5'></i>" +
                            // "</span>" 
                            // +
                        //    "<span class='btnEliminarComboKit text-danger px-1' style='cursor:pointer;'>" +
                            // "<i class='fas fa-trash fs-5'></i>" +
                            // "</span>" +
                            // "</center>"
                    // }
                // }
            // ],
            language: {
                url: "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            }
        });

        /*===============================================================*/
      // EVENTOS PARA CRITERIOS DE BUSQUEDA
      /*===============================================================*/
        $("#iptCodigoCombo").keyup(function() {
            table.column($(this).data('index')).search(this.value).draw();
        })
        $("#iptNombreCombo").keyup(function() {
            table.column($(this).data('index')).search(this.value).draw();
        })
        $("#iptItem").keyup(function() {
            table.column($(this).data('index')).search(this.value).draw();
        })
        $("#iptNombreItem").keyup(function() {
            table.column($(this).data('index')).search(this.value).draw();
        })        
        /*===============================================================*/
      // EVENTOS PARA LIMPIAR CRITERIOS DE BUSQUEDA
      /*===============================================================*/
        $("#btnLimpiarBusqueda").on('click', function() {

            $("#iptCodigoCombo").val('')
            $("#iptNombreCombo").val('')
            $("#iptItem").val('')
            $("#iptNombreItem").val('')            
            table.search('').columns().search('').draw();

        })
        /*===============================================================*/
      // CARGA LISTAS DESPLEGABLES DE PRODUCTOS PADRE
      /*===============================================================*/
        $.ajax({
            url: "ajax/comboskits.ajax.php",
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(respuesta) {
                var options = '<option selected value=""></option>';
                for (let index = 0; index < respuesta.length; index++) {
                    options = options + '<option value=' + respuesta[index][0] + '>' + respuesta[index][1] + '</option>';
                }
                $("#ipCodProItem1").html(options);
            }
         });

        $.ajax({
            url: "ajax/comboskits.ajax.php",
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(respuesta) {
                var options = '<option selected value=""></option>';
                for (let index = 0; index < respuesta.length; index++) {
                    options = options + '<option value=' + respuesta[index][0] + '>' + respuesta[index][1] + '</option>';
                }
                $("#ipCodProItem2").html(options);
            }
         });

        $.ajax({
            url: "ajax/comboskits.ajax.php",
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(respuesta) {
                var options = '<option selected value=""></option>';
                for (let index = 0; index < respuesta.length; index++) {
                    options = options + '<option value=' + respuesta[index][0] + '>' + respuesta[index][1] + '</option>';
                }
                $("#ipCodProItem3").html(options);
            }
         });

        $.ajax({
            url: "ajax/comboskits.ajax.php",
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(respuesta) {
                var options = '<option selected value=""></option>';
                for (let index = 0; index < respuesta.length; index++) {
                    options = options + '<option value=' + respuesta[index][0] + '>' + respuesta[index][1] + '</option>';
                }
                $("#ipCodProItem4").html(options);
            }
         });

        $.ajax({
            url: "ajax/comboskits.ajax.php",
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(respuesta) {
                var options = '<option selected value=""></option>';
                for (let index = 0; index < respuesta.length; index++) {
                    options = options + '<option value=' + respuesta[index][0] + '>' + respuesta[index][1] + '</option>';
                }
                $("#ipCodProItem5").html(options);
            }
         });         

        $.ajax({
            url: "ajax/comboskits.ajax.php",
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(respuesta) {
                var options = '<option selected value=""></option>';
                for (let index = 0; index < respuesta.length; index++) {
                    options = options + '<option value=' + respuesta[index][0] + '>' + respuesta[index][1] + '</option>';
                }
                $("#ipCodProItem6").html(options);
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
                    title: 'Está seguro de registrar el producto Combo-Kit ?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, deseo registrarlo!',
                    cancelButtonText: 'Cancelar',
                }).then((result) => {
        
                    if (result.isConfirmed){

                        accion = 2
                        nro_componentes = 0
                        var datos = new FormData();
                        datos.append("accion",accion);
                        for (let index = 1; index < 7; index++) {
                            if ($("#ipCodProItem"+index).val() !== null && $("#ipCantidadItem"+index).val() !== null && $("#ipCantidadItem"+index).val() > 0)  {
                                datos.append("PROD_Cod"+index,$("#ipCodProItem"+index).val());
                                datos.append("PROD_Item"+index,index);
                                datos.append("PROD_CodHijo"+index,$("#ipCodProItem"+index).val());
                                datos.append("PROD_CantidadHijo"+index,$("#ipCantidadItem"+index).val());
                                nro_componentes = nro_componentes + 1
                            }
                        };
                        datos.append("nro_componentes",nro_componentes);

                        $.ajax({
                            url: "ajax/comboskits.ajax.php",
                            method: "POST",
                            data: datos,
                            cache: false,
                            contentType: false,
                            processData: false,
                            dataType: 'json',
                            success: function(respuesta) {
                                if (respuesta == "ok"){
                                    alert("ok")                                    
                                    Toast.fire({
                                        icon: 'success',
                                        title: 'El producto se registró correctamente'
                                    });
                                
                                    $(".needs-validation").removeClass("was-validated");
                                    table.ajax.reload();
                                
                                    $("#mdlGestionarComboKit").modal('hide');
                                
                                    $("#ipCodProItem1").val("");
                                    $("#ipCantidadItem1").val("");
                                    $("#ipCodProItem2").val("");
                                    $("#ipCantidadItem2").val("")
                                    $("#ipCodProItem3").val("");
                                    $("#ipCantidadItem3").val("")
                                    $("#ipCodProItem4").val("");
                                    $("#ipCantidadItem4").val("")
                                    $("#ipCodProItem5").val("");
                                    $("#ipCantidadItem5").val("")
                                    $("#ipCodProItem6").val("");
                                    $("#ipCantidadItem6").val("")                                                                                                                                                                                    
                                
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
       $('#tbl_productos tbody').on('click','.btnEditarComboKit',function(){
            $("#mdlGestionarComboKit").modal('show');
            $("#ModalTitulo").html('Actualizar Producto Combo-Kit')
            var options;
            var data = table.row($(this).parents('tr')).data();
            var datos = new FormData();

            accion = 3; // Setear para accion de editar
            datos.append("accion",accion);
            datos.append("PROD_Cod",data[1]);
            // alert("entro editar ");

            $.ajax({
                url: "ajax/comboskits.ajax.php",
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
                        url: "ajax/comboskits.ajax.php",
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
                }                    
            })
            accion = 4; // Setear para accion de actualizar
        }),
        /*===============================================================*/
      // EVENTO AL DAR CLICK BOTON ELIMINAR PRODUCTO
      /*===============================================================*/
        $('#tbl_combo-kit tbody').on('click','.btnEliminarProducto',function(){
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

            $("#validate_ipCodProItem1").css("display","none");
            $("#validate_ipCantidadItem1").css("display","none");

            $("#ipCodProItem1").val("");
            $("#ipCantidadItem1").val("");
            $("#ipCodProItem2").val("");
            $("#ipCantidadItem2").val("");
            $("#ipCodProItem3").val("");
            $("#ipCantidadItem3").val("");
            $("#ipCodProItem4").val("");
            $("#ipCantidadItem4").val("");
            $("#ipCodProItem5").val("");
            $("#ipCantidadItem5").val("");
            $("#ipCodProItem6").val("");
            $("#ipCantidadItem6").val("");
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