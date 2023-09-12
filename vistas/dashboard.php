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
            <!-- TARJETA PRODUCTOS MINIMO STOCK -->
            <div class="col-lg-2">
                <!-- small box -->
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h4 id="totalProductosMinStock">11</h4>

                        <p>Productos Poco Stock</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-android-remove-circle"></i>
                    </div>
                    <a style="cursor:pointer;" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- TARJETA TOTAL VENTAS DIA -->
            <div class="col-lg-2">
                <!-- small box -->
                <div class="small-box bg-secondary">
                    <div class="inner">
                        <h4 id="totalVentasHoy">S/. 11,959</h4>

                        <p>Ventas Del Día</p>
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
                                <table class="table" id="tbl_productos_mas_vendidos">
                                    <thead>
                                        <tr class="text-danger">
                                            <th>Cod.</th>
                                            <th>Nombre Producto</th>
                                            <th style="text-align:center">Cantidad</th>
                                            <th style="text-align:center">TOT_Venta</th>
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
                        <div class="table-responsive">
                            <font size="2">
                                <table class="table" id="tbl_clientes_mayor_compra">
                                    <thead>
                                        <tr class="text-danger">
                                            <th>Cod.</th>
                                            <th>Cliente</th>
                                            <th>TOT_Contado</th>
                                            <th>TOT_Crédito</th>
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
    $(document).ready(function() {
        $.ajax({
            url: "ajax/dashboard.ajax.php",
            method: 'POST',
            dataType: 'json',
            success: function(respuesta) {
                // console.log("Tarjeta Total Ventas",formatoMexico2(respuesta[0]['totalVentas']));
                // console.log("Tarjeta Total CtasCobrar", respuesta[0]['totalCtasCobrar']);
                // console.log("Tarjeta Total Inventario", respuesta[0]['totalInventario']);
                // console.log("Tarjeta Total Cancelados", respuesta[0]['totalCancelados']);                
                $("#totalVentas").html('S./ ' + formatoMexico2(respuesta[0]['totalVentas']))
                $("#totalCtasCobrar").html('S./ ' + formatoMexico2(respuesta[0]['totalCtasCobrar']))
                $("#totalInventario").html('S./ ' + formatoMexico2(respuesta[0]['totalInventario']))
                $("#totalCancelados").html('S./ ' + formatoMexico2(respuesta[0]['totalCancelados']))
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
                // console.log("intervalo Total Ventas",formatoMexico2(respuesta[0]['totalVentas']));
                // console.log("intervalo Total CtasCobrar", respuesta[0]['totalCtasCobrar']);
                // console.log("intervalo Total Inventario", respuesta[0]['totalInventario']);
                // console.log("intervalo Total Cancelados", respuesta[0]['totalCancelados']);                

                $("#totalVentas").html('S./ ' + formatoMexico2(respuesta[0]['totalVentas']))
                $("#totalCtasCobrar").html('S./ ' + formatoMexico2(respuesta[0]['totalCtasCobrar']))
                $("#totalInventario").html('S./ ' + formatoMexico2(respuesta[0]['totalInventario']))
                $("#totalCancelados").html('S./ ' + formatoMexico2(respuesta[0]['totalCancelados']))
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
            // console.log("respuesta", respuesta);

            var fecha_venta = [];
            var total_venta = [];
            var total_venta_ant = [];

            var total_ventas_mes = 0;

            for (let i = 0; i < respuesta.length; i++) {

                fecha_venta.push(respuesta[i]['fecha_venta']);
                total_venta.push(respuesta[i]['total_venta']);
                total_venta_ant.push(respuesta[i]['total_venta_ant']);
                total_ventas_mes = parseFloat(total_ventas_mes) + parseFloat(respuesta[i]['total_venta']);

            }
            total_ventas_mes = total_ventas_mes.toFixed(2)
            total_venta.push(0);

            // console.log("respuesta GRAFICO", total_ventas_mes);

            $("#title-header").html('Ventas del Mes: S./  ' + formatoMexico2(total_ventas_mes));

            var barChartCanvas = $("#barChart").get(0).getContext('2d');

            var areaChartData = {
                labels: fecha_venta,
                datasets: [
                    // {
                    // label: 'Ventas del Anterior',
                    // backgroundColor: 'rgb(255, 140, 0,0.9)',
                    // data: total_venta_ant
                    // },
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
                                // Asegúrese de que el valor de los datos no se desborde ni se oculte
                                // cuando el valor de la barra esté demasiado cerca del valor máximo de la escala. 
                                // Nota: El valor y es inverso, cuenta de arriba hacia abajo                                
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
    // SOLICITUD RANKING DE PRODCUTOS MAS VENDIDOS DEL MES
    // =======================================================      
    $.ajax({
        url: "ajax/dashboard.ajax.php",
        type: "POST",
        data: {
            'accion': 2 // listar los 10 productos mas vendidos del mes
        },
        dataType: 'json',
        success: function(respuesta) {
            // console.log("respuesta Productos mas vendidos", respuesta);

            for (let i = 0; i < respuesta.length; i++) {
                filas = '<tr>' +
                    '<td>' + respuesta[i]["codigo_producto"] + '</td>' +
                    '<td>' + respuesta[i]["descripcion_producto"] + '</td>' +
                    '<td align="center">' + formatoMexico2(respuesta[i]["cantidad"]) + '</td>' +
                    '<td align="right"> S./ ' + formatoMexico2(respuesta[i]["total_venta"]) + '</td>' +
                    '</tr>'
                // console.log("respuesta Filas", filas);
                $("#tbl_productos_mas_vendidos tbody").append(filas);
            }
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
            // console.log("respuesta",respuesta);

            for (let i = 0; i < respuesta.length; i++) {
                filas = '<tr>' +
                    '<td>' + respuesta[i]["codigo_cliente"] + '</td>' +
                    '<td>' + respuesta[i]["nombre_cliente"] + '</td>' +
                    '<td align="right">S./ ' + formatoMexico2(respuesta[i]["contado"]) + '</td>' +
                    '<td align="right">S./ ' + formatoMexico2(respuesta[i]["credito"]) + '</td>' +
                    '</tr>'
                $("#tbl_clientes_mayor_compra tbody").append(filas);
            }
        }
    });
</script>

<script>
    const formatoMexico1 = (number) => {
        const exp = /(\d)(?=(\d{3})+(?!\d))/g;
        const rep = '$1,';
        let arr = number.toString().split('.');
        arr[0] = arr[0].replace(exp, rep);
        return arr[1] ? arr.join('.') : arr[0];
    }

    const formatoMexico2 = (number) => {
        return Intl.NumberFormat("es-MX", {
            minimumFractionDigits: 0,
            maximumFractionDigits: 0
        }).format(number)
    }

    const formatoMexico3 = (number) => {
        return 'S/ ' + Intl.NumberFormat("es-MX", {
            minimumFractionDigits: 0,
            maximumFractionDigits: 0
        }).format(number)
    }
</script>