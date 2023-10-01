<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Panel de Control</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Panel de Control</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">

        <!-- FILA TARJETAS DASHBOARD -->
        <div class="row">
            <!-- TARJETA TOTAL VENTAS -->
            <div class="col-lg-2">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h4 id="totalVentas">S/. 0.00</h4>
                        <p>Total Ventas</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-cart"></i>
                    </div>
                    <a style="cursor:pointer;" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- TARJETA TOTAL CUENTAS POR COBRAR -->
            <div class="col-lg-2">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h4 id="totalCtasCobrar">S/. 0.00</h4>
                        <p>Total Ctas x Cobrar</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-cash"></i>
                    </div>
                    <a style="cursor:pointer;" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- TARJETA TOTAL VALORIZACION DE INVENTARIOS -->
            <div class="col-lg-2">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h4 id="totalInventario">S/. 0.00</h4>
                        <p>Total Inventario</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-clipboard"></i>
                    </div>
                    <a style="cursor:pointer;" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- TARJETA TOTAL DOCUMENTOS CANCELADOS -->
            <div class="col-lg-2">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h4 id="totalCancelados">S/. 0.00</h4>

                        <p>Total Doc. Cancelados</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-pie"></i>
                    </div>
                    <a style="cursor:pointer;" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- TARJETA TOTAL 10 PRODUCTOS MAS VENDIDOS -->
            <div class="col-lg-2">
                <!-- small box -->
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h4 id="totalTop10Productos">S/. 0.00</h4>
                        <p>Tot. 10 Prod. Vendidos</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-android-remove-circle"></i>
                    </div>
                    <a style="cursor:pointer;" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- TARJETA TOTAL 10 CLIENTES CON MAYOR COMPRA -->
            <div class="col-lg-2">
                <!-- small box -->
                <div class="small-box bg-secondary">
                    <div class="inner">
                        <h4 id="totalTop10Clientes">S/. 0.00</h4>

                        <p>Total Top 10 Clientes</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-android-calendar"></i>
                    </div>
                    <a style="cursor:pointer;" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>

        <!-- FILA GRAFICO DE BARRAS -->
        <div class="row">
            <div class="col-12">
                <div class="card card-info">
                    <div class="card-header">
                        <!-- <h3 class="card-title" id="title-header"></h3> -->
                        <h3 class="card-title" id="title-header">Ventas del mes</h3>
                        <h3 class="card-title" id="title-headercontado">Ventas Contado</h3>
                        <h3 class="card-title" id="title-headercredito">Ventas Credito</h3>                        
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div> <!-- ./ end card-tools -->
                    </div> <!-- ./ end card-header -->
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="barChart" style="min-height: 250px; height: 300px; max-height: 350px; width: 100%;">

                            </canvas>
                        </div>
                    </div> <!-- ./ end card-body -->
                </div>
            </div>
        </div>

        <!-- FILA RANKING PRODUCTOS Y CLIENTES -->
        <div class="row">
            <!-- COLUMNA RANKING PRODUCTOS -->
            <div class="col-lg-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h5 class="card-title">Los 10 productos más vendidos del mes</h5>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div> <!-- ./ end card-tools -->
                    </div> <!-- ./ end card-header -->
                    <div class="card-body">
                        <div class="table-responsive" style="font-size:20px">
                            <font size="2">
                                <table style="width:100%" border="1" class="table" id="tbl_productos_mas_vendidos">
                                    <thead>
                                        <tr class="text-danger">
                                            <th>Cod.</th>
                                            <th>Nombre Producto</th>
                                            <th style="text-align:center">Cantidad</th>
                                            <th style="text-align:right">Tot. Venta</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                        </div>
                        </font>
                    </div> <!-- ./ end card-body -->
                </div>
            </div>

            <!-- COLUMNA RANKING CLIENTES -->
            <div class="col-lg-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h5 class="card-title">Los 10 Clientes con mayor compra del mes</h5>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div> <!-- ./ end card-tools -->
                    </div> <!-- ./ end card-header -->
                    <div class="card-body">
                        <div class="table-responsive" style="font-size:20px">
                            <font size="2">
                                <table style="width:100%" border="1" class="table" id="tbl_clientes_mayor_compra">
                                    <thead>
                                        <tr class="text-danger">
                                            <th>Cod.</th>
                                            <th>Cliente</th>
                                            <th style="text-align: right">Tot. Contado</th>
                                            <th style="text-align: right">Tot. Crédito</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                        </div>
                        </font>
                    </div> <!-- ./ end card-body -->
                </div>
            </div>
        </div>

        <!-- FILA RANKING ZONAS Y VENDEDORES -->
        <div class="row">
            <!-- COLUMNA RANKING ZONAS -->
            <div class="col-lg-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h5 class="card-title">Las 10 zonas más vendidas en el mes</h5>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div> <!-- ./ end card-tools -->
                    </div> <!-- ./ end card-header -->
                    <div class="card-body">
                        <div class="table-responsive" style="font-size:20px">
                            <font size="2">
                                <table style="width:100%" border="1" class="table" id="tbl_zonas_mas_vendidas">
                                    <thead>
                                        <tr class="text-danger">
                                            <th>Provincia</th>
                                            <th>Distrito</th>
                                            <th style="text-align:right">Tot. Venta</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                        </div>
                        </font>
                    </div> <!-- ./ end card-body -->
                </div>
            </div>

            <!-- COLUMNA RANKING VENDEDORES -->
            <div class="col-lg-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h5 class="card-title">Los 10 vendedores con mayor venta del mes</h5>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive" style="font-size:20px">
                            <font size="2">
                                <table style="width:100%" border="1" class="table" id="tbl_vendedores_mas_ventas">
                                    <thead>
                                        <tr class="text-danger">
                                            <th>Cod.</th>
                                            <th>Vendedor</th>
                                            <th>Marca</th>                                            
                                            <th style="text-align: right">Tot. Contado</th>
                                            <th style="text-align: right">Tot. Crédito</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                        </div>
                        </font>
                    </div> <!-- ./ end card-body -->
                </div>
            </div>

        </div>        
    </div><!-- /.container-fluid -->
</div> <!-- /.content -->

<!-- ======================================================= -->
<!-- SOLICITUD AJAX TARJETAS INFORMATIVAS -->
<!-- ======================================================= -->
<script>

    var totalTopProducto = 0;
    var totalTopCliente = 0;
    var totalTopContado = 0;
    var totalTopCredito = 0;
    var totalTopZonas = 0;
    var totalTopVendedor = 0;
    var totalTopVendedorContado = 0;
    var totalTopVendedorCredito = 0;    
    
    $(document).ready(function() {
        $.ajax({
            url: "ajax/dashboard.ajax.php",
            method: 'POST',
            dataType: 'json',
            success: function(respuesta) {
                $("#totalVentas").html('S./ ' + formatoMexico2(respuesta[0]['totalVentas']))
                $("#totalCtasCobrar").html('S./ ' + formatoMexico2(respuesta[0]['totalCtasCobrar']))
                $("#totalInventario").html('S./ ' + formatoMexico2(respuesta[0]['totalInventario']))
                $("#totalCancelados").html('S./ ' + formatoMexico2(respuesta[0]['totalCancelados']))
                $("#totalTop10Productos").html('S./ ' + formatoMexico2(totalTopProducto))
                $("#totalTop10Clientes").html('S./ ' + formatoMexico2(totalTopCliente))                
            }
        });
    })
</script>

<script>
    // =======================================================
    // SOLICITUD AJAX TARJETAS INFORMATIVAS INTERVALO
    // =======================================================
    setInterval(() => {
        $.ajax({
            url: "ajax/dashboard.ajax.php",
            method: 'POST',
            dataType: 'json',
            success: function(respuesta) {
                $("#totalVentas").html('S./ ' + formatoMexico2(respuesta[0]['totalVentas']))
                $("#totalCtasCobrar").html('S./ ' + formatoMexico2(respuesta[0]['totalCtasCobrar']))
                $("#totalInventario").html('S./ ' + formatoMexico2(respuesta[0]['totalInventario']))
                $("#totalCancelados").html('S./ ' + formatoMexico2(respuesta[0]['totalCancelados']))
                $("#totalTop10Productos").html('S./ ' + formatoMexico2(totalTopProducto))
                $("#totalTop10Clientes").html('S./ ' + formatoMexico2(totalTopCliente))
            }
        });
    }, 10000);
    // =======================================================
    // SOLICITUD AJAX GRAFICO DE BARRAS DE VENTAS DEL MES
    // =======================================================      
    $.ajax({
        url: "ajax/dashboard.ajax.php",
        method: 'POST',
        data: {
            'accion': 1 //parametro para obtener las ventas del mes
        },
        dataType: 'json',
        success: function(respuesta) {
            var fecha_venta = [];
            var total_venta = [];
            var total_venta_ant = [];
            var total_ventas_mes = 0;
            var total_ventas_contado = 0;
            var total_ventas_credito = 0;

            for (let i = 0; i < respuesta.length; i++) {
                fecha_venta.push(respuesta[i]['fecha_venta']);
                total_venta.push(respuesta[i]['total_venta']);
                total_venta_ant.push(respuesta[i]['total_venta_ant']);
                total_ventas_mes = parseFloat(total_ventas_mes) + parseFloat(respuesta[i]['total_venta']);
                total_ventas_contado = parseFloat(total_ventas_contado) + parseFloat(respuesta[i]['total_contado']);
                total_ventas_credito = parseFloat(total_ventas_credito) + parseFloat(respuesta[i]['total_credito']);
            }
            total_ventas_mes = total_ventas_mes.toFixed(2)
            total_venta.push(0);

           $("#title-header").html('Ventas del Mes: S./  ' + formatoMexico2(total_ventas_mes));
           $("#title-headercontado").html('_ _ Ventas Contado: S./  ' + formatoMexico2(total_ventas_contado));           
           $("#title-headercontado").html('_ _ Ventas Contado: S./  ' + formatoMexico2(total_ventas_contado));
           $("#title-headercredito").html('_ _ Ventas Credito: S./  ' + formatoMexico2(total_ventas_credito));

            var barChartCanvas = $("#barChart").get(0).getContext('2d');
            var areaChartData = {
                labels: fecha_venta,
                datasets: [
                    {
                        label: 'VENTAS DEL MES EN SOLES',
                        backgroundColor: 'rgba(60,141,188,0.9)',
                        data: total_venta
                    }
                ]
            }

            var barChartData = $.extend(true, {}, areaChartData);
            var temp0 = areaChartData.datasets[0];
            barChartData.datasets[0] = temp0;
            var barChartOptions = {
                maintainAspectRatio: false,
                responsive: true,
                events: false,
                legend: {
                    display: true
                },
                scales: {
                    xAxes: [{
                        stacked: true,
                    }],
                    yAxes: [{
                        stacked: true
                    }]
                },
                animation: {
                    duration: 500,
                    easing: "easeOutQuart",
                    onComplete: function() {
                        var ctx = this.chart.ctx;
                        ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontFamily, 'normal',
                            Chart.defaults.global.defaultFontFamily);
                        ctx.textAlign = 'center';
                        ctx.textBaseline = 'bottom';

                        this.data.datasets.forEach(function(dataset) {
                            for (var i = 0; i < dataset.data.length; i++) {
                                var model = dataset._meta[Object.keys(dataset
                                        ._meta)[0]].data[i]._model,
                                    scale_max = dataset._meta[Object.keys(dataset
                                        ._meta)[0]].data[i]._yScale.maxHeight;
                                var y_pos = model.y + 13;
                                if ((scale_max - model.y) / scale_max >= 0.175) {
                                    ctx.fillStyle = 'white';
                                    y_pos = model.y + 20;
                                } else {
                                    ctx.fillStyle = '#237fb4';
                                    y_pos = model.y + .2;
                                }
                                ctx.fillText(formatoMexico2(dataset.data[i]), model.x, y_pos);
                            }
                        });
                    }
                }
            }

            new Chart(barChartCanvas, {
                type: 'bar',
                data: barChartData,
                options: barChartOptions
            })

        }
    });
    // =======================================================
    // SOLICITUD RANKING DE PRODUCTOS MAS VENDIDOS DEL MES
    // =======================================================
    $.ajax({
        url: "ajax/dashboard.ajax.php",
        type: "POST",
        data: {
            'accion': 2 // listar los 10 productos mas vendidos del mes
        },
        dataType: 'json',
        success: function(respuesta) {
            // console.log('Respuesta: ',respuesta[1]["total_venta"])
           for (let i = 0; i < respuesta.length; i++) {
                filas = '<tr>' +
                    '<td>' + respuesta[i]["codigo_producto"] + '</td>' +
                    '<td>' + respuesta[i]["descripcion_producto"] + '</td>' +
                    '<td style="text-align: center">' + formatoMexico2(respuesta[i]["cantidad"]) + '</td>' +
                    '<td style="text-align: right"> S./ ' + formatoMexico2(respuesta[i]["total_venta"]) + '</td>' +
                    '</tr>'
                // console.log("respuesta Filas", filas);
                totalTopProducto = totalTopProducto + parseFloat(respuesta[i]["total_venta"])
                $("#tbl_productos_mas_vendidos tbody").append(filas);
            }
            // console.log('Respuesta Total Producto: ',totalTopProducto)
            filas = '<tr>' +
            '<td>' + " " + '</td>' +
            '<td>' + " " + '</td>' +
            '<td>' + " " + '</td>' +
            '<td><Font Color=white>.' +  '</td>' +
            '</tr>'
            $("#tbl_productos_mas_vendidos tbody").append(filas);
            filas = '<tr>' +
            '<td>' + " " + '</td>' +
            '<td>' + " " + '</td>' +
            '<td>' + " " + '</td>' +            
            '<td align="right"><Font Color= #17A2B8><strong>TOTAL S./ ' + formatoMexico2(totalTopProducto) + '</td>' +
            '</tr>'
            $("#tbl_productos_mas_vendidos tbody").append(filas);            
        }
    });
    // =======================================================
    // SOLICITUD RANKING DE CLIENTES CON MAYOR COMPRA DEL MES
    // =======================================================      
    $.ajax({
        url: "ajax/dashboard.ajax.php",
        type: "POST",
        data: {
            'accion': 3 // listar los 10 clientes con mayor compra del mes
        },
        dataType: 'json',
        success: function(respuesta) {
            // console.log('Respuesta: ',respuesta[1]["nombre_cliente"])
           for (let i = 0; i < respuesta.length; i++) {
                filas = '<tr>' +
                    '<td>' + respuesta[i]["codigo_cliente"] + '</td>' +
                    '<td>' + respuesta[i]["nombre_cliente"] + '</td>' +
                    '<td align="right">S./ ' + formatoMexico2(respuesta[i]["contado"]) + '</td>' +
                    '<td align="right">S./ ' + formatoMexico2(respuesta[i]["credito"]) + '</td>' +
                    '</tr>'
                // console.log("respuesta Filas", filas);
                totalTopContado = totalTopContado + parseFloat(respuesta[i]["contado"])
                totalTopCredito = totalTopCredito + parseFloat(respuesta[i]["credito"])
                totalTopCliente = totalTopCliente + parseFloat(respuesta[i]["TotalComprado"])
                $("#tbl_clientes_mayor_compra tbody").append(filas);
            }
            // console.log('Respuesta Total Clientes: ',totalTopCliente)
            filas = '<tr>' +
            '<td>' + " " + '</td>' +
            '<td>' + " " + '</td>' +
            '<td align="right"><Font Color= #17A2B8><strong>TOTAL S./ ' + formatoMexico2(totalTopContado) + '</td>' +
            '<td align="right"><Font Color= #17A2B8><strong>TOTAL S./ ' + formatoMexico2(totalTopCredito) + '</td>' +
            '</tr>'
            $("#tbl_clientes_mayor_compra tbody").append(filas);
            filas = '<tr>' +
            '<td>' + " " + '</td>' +
            '<td>' + " " + '</td>' +            
            '<td align="right"><Font Color= #17A2B8><strong>' + " " + '</td>' +
            '<td align="right"><Font Color= #17A2B8><strong>TOTAL S./ ' + formatoMexico2(totalTopContado+totalTopCredito) + '</td>' +
            '</tr>'
            $("#tbl_clientes_mayor_compra tbody").append(filas);            
        }
    });
    // =======================================================
    // SOLICITUD RANKING DE ZONAS MAS VENDIDAS
    // =======================================================      
    $.ajax({
        url: "ajax/dashboard.ajax.php",
        type: "POST",
        data: {
            'accion': 4 // listar las zonas con mayor venta del mes
        },
        dataType: 'json',
        success: function(respuesta) {
            // console.log('Respuesta: ',respuesta[1]["TotalVendido"])
           for (let i = 0; i < respuesta.length; i++) {
                filas = '<tr>' +
                    '<td>' + respuesta[i]["Provincia"] + '</td>' +
                    '<td>' + respuesta[i]["Distrito"] + '</td>' +
                    '<td align="right">S./ ' + formatoMexico2(respuesta[i]["TotalVendido"]) + '</td>' +
                    '</tr>'
                totalTopZonas = totalTopZonas + parseFloat(respuesta[i]["TotalVendido"])
                $("#tbl_zonas_mas_vendidas tbody").append(filas);
            }
            // console.log('Respuesta Total Zonas: ',totalTopZonas)
            filas = '<tr>' +
            '<td>' + " " + '</td>' +
            '<td>' + " " + '</td>' +
            '<td>' + " " + '</td>' +
            '<td><Font Color=white>.' +  '</td>' +
            '</tr>'
            $("#tbl_zonas_mas_vendidas tbody").append(filas);            
            filas = '<tr>' +
            '<td>' + " " + '</td>' +
            '<td>' + " " + '</td>' +            
            '<td align="right"><Font Color= #17A2B8><strong>TOTAL S./ ' + formatoMexico2(totalTopZonas) + '</td>' +
            '</tr>'
            $("#tbl_zonas_mas_vendidas tbody").append(filas);
            // console.log("respuesta Filas", filas);
        }
    });
    // =======================================================
    // SOLICITUD RANKING VENDEDORES CON MAS VENDIDAS
    // =======================================================      
    $.ajax({
        url: "ajax/dashboard.ajax.php",
        type: "POST",
        data: {
            'accion': 5 // listar las zonas con mayor venta del mes
        },
        dataType: 'json',
        success: function(respuesta) {
            // console.log('Respuesta: ',respuesta[1]["TotalVendido"])
            for (let i = 0; i < respuesta.length; i++) {
                filas = '<tr>' +
                    '<td>' + respuesta[i]["codigo_vendedor"] + '</td>' +
                    '<td>' + respuesta[i]["nombre_vendedor"] + '</td>' +
                    '<td>' + respuesta[i]["marca"] + '</td>' +                    
                    '<td align="right">S./ ' + formatoMexico2(respuesta[i]["contado"]) + '</td>' +
                    '<td align="right">S./ ' + formatoMexico2(respuesta[i]["credito"]) + '</td>' +
                    '</tr>'
                // console.log("respuesta Filas", filas);
                totalTopVendedorContado = totalTopVendedorContado + parseFloat(respuesta[i]["contado"])
                totalTopVendedorCredito = totalTopVendedorCredito + parseFloat(respuesta[i]["credito"])
                totalTopVendedor = totalTopVendedor + parseFloat(respuesta[i]["TotalVendido"])
                $("#tbl_vendedores_mas_ventas tbody").append(filas);
            }
            // console.log('Respuesta Total Vendedores: ',totalTopVendedor)
            filas = '<tr>' +
            '<td>' + " " + '</td>' +
            '<td>' + " " + '</td>' +
            '<td>' + " " + '</td>' +            
            '<td align="right"><Font Color= #17A2B8><strong>TOTAL S./ ' + formatoMexico2(totalTopVendedorContado) + '</td>' +
            '<td align="right"><Font Color= #17A2B8><strong>TOTAL S./ ' + formatoMexico2(totalTopVendedorCredito) + '</td>' +
            '</tr>'
            $("#tbl_vendedores_mas_ventas tbody").append(filas);
            filas = '<tr>' +
            '<td>' + " " + '</td>' +
            '<td>' + " " + '</td>' +            
            '<td>' + " " + '</td>' +            
            '<td align="right"><Font Color= #17A2B8><strong>' + " " + '</td>' +
            '<td align="right"><Font Color= #17A2B8><strong>TOTAL S./ ' + formatoMexico2(totalTopVendedorContado+totalTopVendedorCredito) + '</td>' +
            '</tr>'
            $("#tbl_vendedores_mas_ventas tbody").append(filas);
            // console.log("respuesta Filas", filas);
        }
    });
</script>

<script>
    const formatoMexico2 = (number) => {
        return Intl.NumberFormat("es-MX", {
            minimumFractionDigits: 0,
            maximumFractionDigits: 0
        }).format(number)
    }
</script>