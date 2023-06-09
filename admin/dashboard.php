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
    <title>Dashboard</title>
</head>

<body>

    <div class="container">
        <h1>Dashboard</h1>

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
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            // Datos de ejemplo para el gráfico de visitas a la tienda
            var visitsData = {
                series: [1200, 800, 1500, 900, 1300, 1100, 1700]
            };

            // Opciones de configuración del gráfico de visitas a la tienda
            var visitsOptions = {
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
                        text: 'Visitas'
                    }
                },
                fill: {
                    opacity: 1
                },
                colors: ['#FFD700'],
                series: [{
                    name: 'Visitas',
                    data: visitsData.series
                }]
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
                        text: 'Ventas'
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
