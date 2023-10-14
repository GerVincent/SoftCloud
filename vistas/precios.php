<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Catálogos / Precios</h1>
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
                        <div class="form-group mb-2">
                            <label class=""><i class="fas fa-list-ol" ></i> <span class="small">Precio Unitario
                            </span><span class="text-danger">*</span></label>
                            <input type="number" step="any" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"
                            min=0 class="form-control form-control-sm" id="ipPrecioUnitario" placeholder="Precio" required>
                            <div class="invalid-feedback">Ingrese Precio Unitario</div>
                        </div>
                        </div>

                      <!-- Botones de Accion -->
                       <button type="button" class="btn btn-danger mt-3 mx-2" style="width:170px;" data-bs-dismiss="modal" 
                          id="btnCancelarRegistro">Cancelar</button>
                       <button type="button" style="width:170px;" class="btn btn-primary mt-3 mx-2" id="btnGuardarPrecio">
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
    var accion = 0;
    var wmRespuesta = [];
    var table;
    var data;
    var TipoCliente;
    var TipoPrecio;

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
            buttons: [
                'excel', 'print', 'pageLength'
            ],
            pageLength: [5, 10, 15, 30, 50, 100],
            pageLength: 10,
            ajax: {
                url: "ajax/precios.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 1 // 1 = Listar Productos
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
                    className: 'dt-body-right',
                    type: 'numeric-comma'
                },
                {
                    targets: 6,
                    orderable: false,
                    render: function(datqa, type, full, meta) {
                        return "<center>" +
                            "<span class='btnEditarPrecio text-primary px-1' style='cursor:pointer;'>" +
                            "<i class='fas fa-pencil-alt fs-5'></i>" +
                            "</span>" 
                    }
                }
            ],
            language: {
                url: "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            }
        });
        accion = 0        
        /*===============================================================*/
      // EVENTOS PARA CRITERIOS DE BUSQUEDA
      /*===============================================================*/
        $("#iptTipoCliente").keyup(function() {
            table.column($(this).data('index')).search(this.value).draw();
        })
        $("#iptTipoPrecio").keyup(function() {
            table.column($(this).data('index')).search(this.value).draw();
        })
        $("#iptCodigoProducto").keyup(function() {
            table.column($(this).data('index')).search(this.value).draw();
        })
        $("#iptNombreProducto").keyup(function() {
            table.column($(this).data('index')).search(this.value).draw();
        })        
        /*===============================================================*/
      // EVENTOS PARA LIMPIAR CRITERIOS DE BUSQUEDA
        $("#btnLimpiarBusqueda").on('click', function() {

            $("#iptTipoCliente").val('')
            $("#iptTipoPrecio").val('')
            $("#iptCodigoProducto").val('')
            $("#iptNombreProducto").val('')            
            table.search('').columns().search('').draw();

        })
        /*===============================================================*/
      /*===============================================================*/
      // EVENTO AL DAR CLICK BOTON REGISTRAR EL PRECIO DEL PRODUCTO
        /*===============================================================*/
        document.getElementById("btnGuardarPrecio").addEventListener("click",function(){
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form){

            if (form.checkValidity() === true) {

                Swal.fire({
                    title: 'Está seguro de registrar el precio ?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, deseo registrarlo!',
                    cancelButtonText: 'Cancelar',
                }).then((result) => {
        
                    if (result.isConfirmed){
                    
                        $sql = "UPDATE Tip_Pre_Cli_Pro SET TPRECLI_PreProducto = "+$("#ipPrecioUnitario").val()+
                            " WHERE TCLI_Cod = '"+wmRespuesta[0]+"' AND TPRE_Cod = '"+wmRespuesta[1]+"' AND PROD_Cod = '"+wmRespuesta[2]+"'"
                        respuesta = consulta(3,"consulta","",$sql)
                        if (respuesta == "ok"){
                            Toast.fire({
                                icon: 'success',
                                title: 'El precio del producto se registró correctamente'
                            });

                            $(".needs-validation").removeClass("was-validated");
                            table.ajax.reload();

                            $("#mdlGestionarPrecios").modal('hide');

                            $("#validate_ipTipoCliente").css("display","none");
                            $("#validate_ipTipoPrecio").css("display","none");
                            $("#validate_ipPrecioUnitario").css("display","none");

                            $("#ipTipoCliente").val("");
                            $("#ipTipoPrecio").val("");
                            $("#ipPrecioUnitario").val("");                    

                        } else {
                            Toast.fire({
                                icon: 'error',
                                title: 'El precio del producto no se pudo registrar'

                            });
                        }
                    }
                });
            } else {
                console.log("No paso la validacion")
            }
            form.classList.add('was-validated')
            });
        });
      /*===============================================================*/
      // EVENTO AL DAR CLICK BOTON EDIT PRECIO PRODUCTO
      /*===============================================================*/
       $('#tbl_productos tbody').on('click','.btnEditarPrecio',function(){
            $("#mdlGestionarPrecios").modal('show')
            $("#ModalTitulo").html('Actualizar Precio')

            var data = table.row($(this).parents('tr')).data()

            consulta(1,"consulta","ipTipoCliente","","Tipos_Cliente",data[1],"TCLI_Cod","TCLI_Dsc");
            consulta(1,"consulta","ipTipoPrecio","","Tipos_Precio",data[2],"TPRE_Cod","TPRE_Dsc");

            $sql = "SELECT tc.TCLI_Cod, tp.TPRE_Cod, pre.PROD_Cod, pre.TPRECLI_PreProducto, pr.PROD_Dsc  FROM ((Tip_Pre_Cli_Pro pre "+ 
            "INNER JOIN Tipos_Cliente tc ON pre.TCLI_Cod = tc.TCLI_Cod) INNER JOIN Tipos_Precio tp ON pre.TPRE_Cod = tp.TPRE_Cod) "+
            "INNER JOIN Producto pr ON pre.PROD_Cod = pr.PROD_Cod WHERE pre.SUC_Cod = '002' AND "+
            "tc.TCLI_Dsc = '"+ data[1] +"' AND tp.TPRE_Dsc = '"+ data[2] +"' AND pre.PROD_Cod = '"+ data[3]+"'"

            consulta(2,"consulta","ipPrecioUnitario",$sql)
        })
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

            $("#validate_ipTipoCliente").css("display","none");
            $("#validate_ipTipoPrecio").css("display","none");
            $("#validate_ipPrecioUnitario").css("display","none");

            $("#ipTipoCliente").val("");
            $("#ipTipoPrecio").val("");
            $("#ipPrecioUnitario").val("");
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