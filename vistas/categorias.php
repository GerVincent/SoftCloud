<head>
    <meta charset="utf-8">
    <meta name='csrf-token' content="{{ csrf_token() }}">
</head>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Administrar Categorías</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Administrar Categorías</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<div class="row">
    <!-- Columna para la seleccioón del Producto Padre -->

    <div class="col-lg-8">
        <div class="form-group mb-2">
            <label class="" for="ipTipoProducto"><i class="fas fa-chart-bar fs-6"></i>
                <span class="small">Producto</span><span class="text-danger">*</span>
            </label>

            <!-- <select id="js-example-basic-single" class="form-select form-select-sm" aria-label=".form-select-sm example"> -->
                <!-- <option value="AL">Alabama</option> -->
                <!-- <option value="WY">Wyoming</option> -->
            <!-- </select> -->

            <!-- <select class="form-select form-select-sm" aria-label=".form-select-sm example" -->
                <!-- id="#js-example-basic-single"> -->
            <!-- </select> -->
            <!-- <div class="invalid-feedback">Seleccione un producto</div> -->

            <!-- <select class="select2-ajax" style="width: 100%;"></select> -->

            <!-- <select class="country-select" name="country" style="width: 100%;"> -->
                <!-- <option value="AU">Australia</option> -->
                    <!-- ... -->
                <!-- <option value="US">United States</option> -->
            <!-- </select> -->
            <select name="user_id" id="user_select" style="width: 100%;">
                <option value="">-- Select user --</option>
            </select>

        </div>
<!-- // 
        <script type="text/javascript">
            $(document).ready(function() {
                $('#js-example-basic-single').select2();
            });
        </script>

        <script type="text/javascript">
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content')

            $(document).ready(function() {
                $('js-example-basic-single').select2({
                    ajax:{
                        url: "ajax/tipoproducto.ajax.php",
                        type: 'POST',
                        dataType: 'json',
                        // delay:250,
                        data: function(params){
                            return{
                                _token: CSRF_TOKEN,
                                search: params.term
                            }
                        },
                        processResults: function(response){
                            console.log("Combos: ", response[0][1]);
                            return{
                                results: '<option value="AL">Alabama</option>'
                            }
                        },
                        cache: false
                    }
                });
            })  //  -->

        <script type="text/javascript">

            // $(document).ready(function() {
                // $('.country-select').select2();
            // });                

            $(document).ready(function() {
                $("#user_select").select2({
                    ajax: {
                        url: "ajax/tipoproducto.ajax.php",
                        dataType: 'json',
                        type: 'POST',
                        // data: function (params) {
                            // var query = {
                                // search: params.term,
                                // type: 'user_search'
                            // }
                            // return query;
                        // },
                        processResults: function (data) {
                            alert('entro');
                            console.log("Combos: ", data );
                            return {
                                results: data
                            };
                        }
                    },
                    cache:  false,
                    placeholder: 'Search for a user...',
                    minimumInputLength: 1
                });
            });
        </script>
    </div>
</div>

                <!-- // // var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content') -->
                <!-- // //  -->
                <!-- // // $(document).ready(function() { -->
                    <!-- // // $('#ipTipoProducto').select2({ -->
                        <!-- // // ajax:{ -->
                            <!-- // // url: "ajax/tipoproducto.ajax.php", -->
                            <!-- // // type: 'POST', -->
                            <!-- // // dataType: 'json', -->
                            <!-- // // delay:250, -->
                            <!-- // // data: function(params){ -->
                                <!-- // // return{ -->
                                    <!-- // // _token: CSRF_TOKEN, -->
                                    <!-- // // search: params.term -->
                                <!-- // // } -->
                            <!-- // // }, -->
                            <!-- // // processResults: function(response){ -->
                                <!-- // // console.log("Combos: ", '<option value=' + response[0][1] + '></option>'); -->
                                <!-- // // return{ -->
                                    <!-- // // results: response -->
                                    <!-- // // results: '<option value="AL">Alabama</option>' -->
                                    <!-- // // results: '<option value=' + response[0][1] + '></option>' -->
                                    <!-- // // results: '<option value=' + response[0][0] + '>' + response[0][1] + '</option>'                                     -->
                                <!-- // // } -->
                            <!-- // // }, -->
<!-- // //  -->
                            <!-- // // cache: true -->
                        <!-- // // } -->
                    <!-- // // }); -->
<!-- //  -->
                    <!-- // // $.ajax({ -->
                        <!-- // // url: "ajax/tipoproducto.ajax.php", -->
                        <!-- // // cache: false, -->
                        <!-- // // contentType: false, -->
                        <!-- // // processData: false, -->
                        <!-- // // dataType: 'json', -->
                        <!-- // // success: function(respuesta) { -->
                            <!-- // // var options = '<option selected value=""></option>'; -->
                            <!-- // // for (let index = 0; index < respuesta.length; index++) { -->
                                <!-- // // options = options + '<option value=' + respuesta[index][0] + '>' + respuesta[index][1] + '</option>'; -->
                            <!-- // // } -->
                            <!-- // // $("ipTipoProducto").html(options); -->
                        <!-- // // } -->
                    <!-- // // }); -->
                <!-- // // }); -->
    <!-- // </div> -->
<!-- // </div> -->