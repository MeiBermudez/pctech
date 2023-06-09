<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.27.3/dist/apexcharts.min.js"></script>
    <style>
        .dashboard-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 20px;
            margin-top: 20px;
            margin-left: -40px;
            margin-right: 40px;
        }

        .dashboard-item {
            width: 600px;
            height: 600px;
            padding: 40px;
            background-color: #f4f4f4;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .dashboard-item h3 {
            margin-top: 0;
        }

        .chart-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 70%;
        }
    </style>
    <title>panel administrativo</title>
</head>

<body>

    <div class="container">
        <h1></h1>

        <div class="dashboard-container">
            <div class="dashboard-item">
                <h3>Visitas a la tienda</h3>
                <!-- Contenedor para el gráfico de visitas a la tienda -->
                <div id="visits-chart" class="chart-container"></div>
            </div>
            <div class="dashboard-item">
                <h3>Informes de Ventas</h3>
                <!-- Contenedor para el gráfico de informes de ventas -->
                <div id="sales-chart" class="chart-container"></div>
            </div>
            <div class="dashboard-item">
                <h3>Pedidos</h3>
                <!-- Contenido para la lista de pedidos -->
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Cliente</th>
                            <th>Fecha</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Cliente 1</td>
                            <td>2023-06-01</td>
                            <td>$50.00</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Cliente 2</td>
                            <td>2023-06-02</td>
                            <td>$120.00</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Cliente 3</td>
                            <td>2023-06-03</td>
                            <td>$80.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="dashboard-item">
                <h3>Productos más vendidos</h3>
                <!-- Contenido para la lista de productos más vendidos -->
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Producto</th>
                            <th>Cantidad Vendida</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Producto 1</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Producto 2</td>
                            <td>8</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Producto 3</td>
                            <td>6</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            // Datos de ejemplo para el gráfico de visitas a la tienda
            var visitsData = {
                series: [1200]
            };

            // Opciones de configuración del gráfico de visitas a la tienda
            var visitsOptions = {
                chart: {
                    type: 'radialBar',
                    height: 300,
                    sparkline: {
                        enabled: true
                    }
                },
                plotOptions: {
                    radialBar: {
                        hollow: {
                            size: '70%'
                        },
                        track: {
                            margin: 15
                        },
                        dataLabels: {
                            name: {
                                fontSize: '16px',
                                color: undefined,
                                offsetY: 120
                            },
                            value: {
                                fontSize: '36px',
                                color: undefined,
                                offsetY: 76,
                                formatter: function (val) {
                                    return val + " visitas";
                                }
                            }
                        }
                    }
                },
                fill: {
                    type: 'gradient',
                    gradient: {
                        shade: 'dark',
                        shadeIntensity: 0.15,
                        inverseColors: false,
                        opacityFrom: 1,
                        opacityTo: 1,
                        stops: [0, 50, 53, 91]
                    }
                },
                stroke: {
                    dashArray: 4
                },
                colors: ['#FFD700'],
                series: visitsData.series
            };

            // Crear el gráfico de visitas a la tienda
            var visitsChart = new ApexCharts(document.querySelector("#visits-chart"), visitsOptions);
            visitsChart.render();

            // Datos de ejemplo para el gráfico de informes de ventas
            var salesData = {
                series: [800, 1200, 1500, 1000, 1800, 2000, 1600]
            };

            // Opciones de configuración del gráfico de informes de ventas
            var salesOptions = {
                chart: {
                    type: 'bar',
                    height: 300,
                    sparkline: {
                        enabled: true
                    }
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '55%',
                        endingShape: 'rounded'
                    },
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    show: true,
                    width: 2,
                    colors: ['transparent']
                },
                xaxis: {
                    categories: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul'],
                },
                yaxis: {
                    title: {
                        text: 'Ventas (USD)'
                    }
                },
                fill: {
                    opacity: 1
                },
                colors: ['#008000'],
                series: [{
                    name: 'Ventas',
                    data: salesData.series
                }]
            };

            // Crear el gráfico de informes de ventas
            var salesChart = new ApexCharts(document.querySelector("#sales-chart"), salesOptions);
            salesChart.render();
        });
    </script>
</body>

</html>
