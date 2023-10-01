<div class="modal fade" id="mdlGestionarPrecios" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Contenido del Modal -->
        <div class="modal-content">
            <!-- Cabecera del Modal -->
            <div class="modal-header bg-gray py-1 aling-items-center">
                <h5 class="modal-title" id="ModalTitulo">Busqueda</h5>
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
                        <!-- Columna para ingresar Cantidad Item 1 -->
                        <div class="form-group mb-2">
                            <label class="" for="ipPrecioUnitario"><i class="fas fa-list-ol" ></i> <span class="small">Precio Unitario
                            </span><span class="text-danger">*</span></label>
                            <input type="number" step="any" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"
                            min=0 class="form-control form-control-sm" id="ipPreciUnitario" placeholder="Precio" required>
                            <div class="invalid-feedback">Ingrese Precio Unitario</div>
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

    $(document).ready(function() {

        $("#mdlGestionarPrecios").modal('show');

        listabuscar(1,"consulta","Tipos_Cliente","MINORISTA","TCLI_Cod","TCLI_Dsc","ipTipoCliente")
        listabuscar(2,"consulta","Tipos_Precio","Ciudad","TPRE_Cod","TPRE_Dsc","ipTipoPrecio")

    })    
</script>

<script>

</script>













