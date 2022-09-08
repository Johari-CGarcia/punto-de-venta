<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tablero Principal</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Tablero Principal</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <!-- Fila Tarjetas informativas-->
        <div class="row">

            <div class="col-lg-2">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h4 id="totalProductos"></h4>
                        <p>Total Productos</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-clipboard"></i>
                    </div>
                    <a style="cursor: pointer;" class="small-box-footer">Mas Info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!--TARJETA TOTAL COMPRAS-->
            <div class="col-lg-2">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h4 id="totalCompras"></h4>
                        <p>Total Compras</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-cash"></i>
                    </div>
                    <a style="cursor: pointer;" class="small-box-footer">Mas Info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!--TARJETA TOTAL VENTAS-->
            <div class="col-lg-2">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h4 id="totalVentas"></h4>
                        <p>Total Ventas</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-cart"></i>
                    </div>
                    <a style="cursor: pointer;" class="small-box-footer">Mas Info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!--TARJETA TOTAL GANANCIAS-->
            <div class="col-lg-2">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h4 id="totalGanancias"></h4>
                        <p>Ganancias</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-pie"></i>
                    </div>
                    <a style="cursor: pointer;" class="small-box-footer">Mas Info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!--TARJETA TOTAL PRODUCTOS POCO STOCK-->
            <div class="col-lg-2">
                <!-- small box -->
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h4 id="totalProductosMinStock"></h4>
                        <p>Productos vendidos</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-android-remove-circle"></i>
                    </div>
                    <a style="cursor: pointer;" class="small-box-footer">Mas Info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!--TARJETA TOTAL VENTAS DIA ACTUAL-->
            <div class="col-lg-2">
                <!-- small box -->
                <div class="small-box bg-secondary">
                    <div class="inner">
                        <h4 id="totalVentasHoy"></h4>
                        <p>Ventas del día</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-android-calendar"></i>
                    </div>
                    <a style="cursor: pointer;" class="small-box-footer">Mas Info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

        </div> <!-- /Fila Tarjetas informativas-->

        <!-- Fila Grafico de Barras-->
        <div class="row">
            <div class="col-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title" id="card-title"></h3>
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
                        <div class="chaty">
                            <canvas id="barChart"
                                style="min-height:250px; height: 300px; max-height: 350px; width: 100%;">

                            </canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /Fila Grafico de barras-->

        <!-- Fila tabla de productos mas vendidos y poco stock-->
        <div class="row">
            <div class="col-lg-6">
                <divc class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Los 3 productos más vendidos</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div><!-- /.card-tools -->
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="tbl_productos_mas_vendidos">
                                <thead>
                                    <tr>
                                        <th>Cod. Producto</th>
                                        <th>Producto</th>
                                        <th>Cantidad</th>
                                        <th>Ventas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div><!-- /.card-body -->
            </div>

            <div class="col-lg-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Listado de productos con poco stock</h3>
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
                            <table class="table" id="tbl_productos_poco_stock">
                                <thead>
                                    <tr>
                                        <th>Cod. Producto</th>
                                        <th>Producto</th>
                                        <th>Stock Actual</th>
                                        <th>Mín.Stock</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div> <!-- ./ end card-body -->
                </div>
            </div>
        </div><!-- /Fila tabla de productos mas vendidos y poco stock-->
        
        <!-- Fila tabla de cantidad de productos vendidos-->
        <div class="row">
            <div class="col-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Número de productos vendidos en el mes</h3>
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
                        <div class="table-responsive">
                            <table class="table" id="tbl_cantidad_productos_vendidos_mes">
                                <thead>
                                    <tr>
                                        <th>Cod. Producto</th>
                                        <th>Producto</th>
					                    <th>Precio</th>
                                        <th>Cantidad</th>
                                        <th>Total venta</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- / Fila tabla de cantidad de productos vendidos-->

        <!-- Fila Grafico de barras de venta de todos los productos-->
        <div class="row">
            <div class="col-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title" id="card-title2"></h3>
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
                        <div class="chart">
                            <canvas id="barChart2"
                                style="min-height:250px; height: 300px; max-height: 350px; width: 100%;">

                            </canvas>
                        </div>
                    </div> 
                </div>
            </div>
        </div><!-- /Fila Grafico de barras de todos los productos-->

    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->


<script>
$(document).ready(function() {
    /*---------------------------------------------------------
    SOLICITUD AJAX TARJETAS INFORMATIVAS
    ---------------------------------------------------------*/
    $.ajax({
        url: "ajax/dashboard.ajax.php",
        method: "POST",
        dataType: 'json',
        success: function(respuesta) {
            console.log("respuesta", respuesta);
            /**.replace(/\d(?=(\d{3})+\.)/g, "$&,") */
            $("#totalProductos").html(respuesta[0]['totalProductos']);
            $("#totalCompras").html("$" + respuesta[0]['totalCompras']);
            $("#totalVentas").html("$" + respuesta[0]['totalVentas']);
            $("#totalGanancias").html("$" + respuesta[0]['ganancias']);
            $("#totalProductosMinStock").html(respuesta[0]['cantidad_vendida']);
            $("#totalVentasHoy").html("$" + respuesta[0]['ventasHoy']);
        }
    });

    setInterval(() => {
        $.ajax({
            url: "ajax/dashboard.ajax.php",
            method: "POST",
            dataType: 'json',
            success: function(respuesta) {
                console.log("respuesta", respuesta);
                /**.replace(/\d(?=(\d{3})+\.)/g, "$&,") */
                $("#totalProductos").html(respuesta[0]['totalProductos']);
                $("#totalCompras").html("$" + respuesta[0]['totalCompras']);
                $("#totalVentas").html("$" + respuesta[0]['totalVentas']);
                $("#totalGanancias").html("$" + respuesta[0]['ganancias']);
                $("#totalProductosMinStock").html(respuesta[0]['productosPocoStock']);
                $("#totalVentasHoy").html("$" + respuesta[0]['ventasHoy']);
            }
        });
    }, 10000);

    /*---------------------------------------------------------
    SOLICITUD AJAX GRAFICO DE VENTAS DEL MES
    ---------------------------------------------------------*/
    $.ajax({
        url: "ajax/dashboard.ajax.php",
        method: "POST",
        data: {
            'accion': 1 // parametro para obtener las ventas del mes
        },
        dataType: 'json',
        success: function(respuesta) {
            console.log("respuesta", respuesta);

            var fecha_venta = [];
            var total_venta = [];
            var total_ventas_mes = 0;

            for (let i = 0; i < respuesta.length; i++) {
                fecha_venta.push(respuesta[i]['fecha_venta']);
                total_venta.push(respuesta[i]['total_venta']);
                total_ventas_mes = parseFloat(total_ventas_mes) + parseFloat(respuesta[i][
                    'total_venta'
                ]);
            }

            $("#card-title").html('Ventas del Mes: S./ ' + parseFloat(total_ventas_mes));
            /*$(".card-title").html('Ventas del Mes: S./ ' + total_ventas_mes.toString().
            replace(/\d(?=(\d{3})+\.)/g, "$&,"));*/

            var barChartCanvas = $("#barChart").get(0).getContext('2d');

            var areaChartData = {
                labels: fecha_venta,
                datasets: [{
                    label: 'Ventas del Mes',
                    backgroundColor: 'rgba(60,141,188,0.9)',
                    data: total_venta
                }]
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
                animation: {
                    duration: 500,
                    easing: "easeOutQuart",
                    onComplete: function() {
                        var ctx = this.chart.ctx;
                        ctx.font = Chart.helpers.fontString(Chart.defaults.global
                            .defaultFontFamily, 'normal',
                            Chart.defaults.global.defaultFontFamily);
                        ctx.textAlign = 'center';
                        ctx.textBaseline = 'bottom';

                        this.data.datasets.forEach(function(dataset) {
                            for (var i = 0; i < dataset.data.length; i++) {
                                var model = dataset._meta[Object.keys(dataset
                                        ._meta)[0]].data[i]._model,
                                    scale_max = dataset._meta[Object.keys(dataset
                                        ._meta)[0]].data[i]._yScale.maxHeight;
                                ctx.fillStyle = '#444';
                                var y_pos = model.y - 5;

                                if ((scale_max - model.y) / scale_max >= 0.93)
                                    y_pos = model.y + 20;
                                ctx.fillText(dataset.data[i], model.x, y_pos)
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

    /*---------------------------------------------------------
    SOLICITUD AJAX LISTADO DE PRODUCTOS MAS VENDIDOS
    ---------------------------------------------------------*/
    $.ajax({
        url: "ajax/dashboard.ajax.php",
        method: "POST",
        data: {
            'accion': 2 //listar los 10 productos mas vendidos
        },
        dataType: 'json',
        success: function(respuesta){
            console.log("respuesta", respuesta);

            for (let i = 0; i < respuesta.length; i++) {
                filas = '<tr>' + 
                        '<td>'+ respuesta [i]["codigo_producto"]+'</td>'+
                        '<td>'+ respuesta [i]["descripcion_producto"]+'</td>'+
                        '<td>'+ respuesta [i]["cantidad"]+'</td>'+
                        '<td>'+ respuesta [i]["total_venta"]+'</td>'+
                    '</tr>'
                $("#tbl_productos_mas_vendidos tbody").append(filas);
            }
        }
    });

    /*---------------------------------------------------------
    SOLICITUD AJAX LISTADO DE PRODUCTOS CON POCO STOCK
    ---------------------------------------------------------*/
    $.ajax({
        url: "ajax/dashboard.ajax.php",
        method: "POST",
        data: {
            'accion': 3 //listar los productos con poco stock
        },
        dataType: 'json',
        success: function(respuesta){
            console.log("respuesta", respuesta);

            for (let i = 0; i < respuesta.length; i++) {
                filas = '<tr>' + 
                        '<td>'+ respuesta [i]["codigo_producto"]+'</td>'+
                        '<td>'+ respuesta [i]["descripcion_producto"]+'</td>'+
                        '<td>'+ respuesta [i]["stock_producto"]+'</td>'+
                        '<td>'+ respuesta [i]["minimo_stock_producto"]+'</td>'+
                    '</tr>'
                $("#tbl_productos_poco_stock tbody").append(filas);
            }
        }
    });

    /*---------------------------------------------------------
    SOLICITUD AJAX LISTADO DE CANTIDAD DE PRODUCTOS VENDIDOS
    ---------------------------------------------------------*/
    $.ajax({
        url: "ajax/dashboard.ajax.php",
        type: "POST",
        data: {
            'accion': 4 //listar cantidad de productos vendidos en el mes
        },
        dataType: 'json',
        success: function(respuesta){
            console.log("respuesta", respuesta);
 
            for (let i = 0; i < respuesta.length; i++) {
                filas = '<tr>' + 
                        '<td>'+ respuesta [i]["codigo_producto"]+'</td>'+
                        '<td>'+ respuesta [i]["descripcion_producto"]+'</td>'+
                        '<td>'+ respuesta [i]["precio_venta_producto"]+'</td>'+
                        '<td>'+ respuesta [i]["cantidad"]+'</td>'+
                        '<td>'+ respuesta [i]["total_venta"]+'</td>'+
                    '</tr>'
                $("#tbl_cantidad_productos_vendidos_mes tbody").append(filas);
            }
        }
    });

    /*---------------------------------------------------------
    SOLICITUD AJAX GRAFICO DE VENTAS DE TODOS LOS PRODUCTOS
    ---------------------------------------------------------*/
    $.ajax({
        url: "ajax/dashboard.ajax.php",
        method: "POST",
        data: {
            'accion': 5 // parametro para obtener las ventas del mes
        },
        dataType: 'json',
        success: function(respuesta) {
            console.log("respuesta", respuesta);

            var nombre_producto = [];
            var total_venta = [];

            for (let i = 0; i < respuesta.length; i++) {
                nombre_producto.push(respuesta[i]['descripcion_producto']);
                total_venta.push(respuesta[i]['total_venta']);
            }

            $("#card-title2").html('Todos los productos vendidos');
            /*$(".card-title").html('Ventas del Mes: S./ ' + total_ventas_mes.toString().
            replace(/\d(?=(\d{3})+\.)/g, "$&,"));*/

            var barChartCanvas = $("#barChart2").get(0).getContext('2d');

            var areaChartData = {
                labels: nombre_producto,
                datasets: [{
                    label: 'Ventas por producto',
                    backgroundColor: 'rgba(60,141,188,0.9)',
                    data: total_venta
                }]
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
                animation: {
                    duration: 500,
                    easing: "easeOutQuart",
                    onComplete: function() {
                        var ctx = this.chart.ctx;
                        ctx.font = Chart.helpers.fontString(Chart.defaults.global
                            .defaultFontFamily, 'normal',
                            Chart.defaults.global.defaultFontFamily);
                        ctx.textAlign = 'center';
                        ctx.textBaseline = 'bottom';

                        this.data.datasets.forEach(function(dataset) {
                            for (var i = 0; i < dataset.data.length; i++) {
                                var model = dataset._meta[Object.keys(dataset
                                        ._meta)[0]].data[i]._model,
                                    scale_max = dataset._meta[Object.keys(dataset
                                        ._meta)[0]].data[i]._yScale.maxHeight;
                                ctx.fillStyle = '#444';
                                var y_pos = model.y - 5;

                                if ((scale_max - model.y) / scale_max >= 0.93)
                                    y_pos = model.y + 20;
                                ctx.fillText(dataset.data[i], model.x, y_pos)
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
})
</script>