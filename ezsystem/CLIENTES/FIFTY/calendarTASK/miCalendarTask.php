<?php
session_start();
require_once '../varSQL/dbmysql.php';
require_once '../varSQL/var.php';
require_once '../varSQL/bd.php';

$adminrol = $_SESSION['rol'];
$userLog = $_SESSION['usuario'];
$userNom = $_SESSION['nombre'];
$userUnidad = $_SESSION['unidad'];
$userUnidadAcronu = $_SESSION['acronu'];
$userAcroregion = $_SESSION['acroregion'];
$userRegion = $_SESSION['region'];

$yearHoy = date('Y');
$yearMin = date('y');
$mesHoy = date('m');
$diaHoy = date('d');

// Contadores de esferas
$taskCounts = [
    'pendiente' => 0,
    'en_proceso' => 0,
    'completada' => 0
];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sy_consulta</title>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

    <!-- DataTables Buttons -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.colVis.min.js"></script>

    <!-- JSZip (para Excel) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <!-- pdfmake (para PDF) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>

    <style>
        .dt-buttons {
            margin-right: 10px;
        }

        .dataTables_filter {
            margin-left: auto;
        }

        .top {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
        }
    </style>
</head>

<body>
    <div id="backcalend">
        <div class="center-div">
            <button id="consultarTareas">
                Consultar todas mis tareas
                <span class="badge" id="totalTareasBadge">
                    <?php
                    $tabta = "SELECT * FROM $tabtaskY WHERE (region LIKE '%$userAcroregion%' OR usuarioregistra LIKE '%$userLog%')";
                    $qtabta = $db_task->query($tabta);
                    $totalTareas = $qtabta->rowCount();
                    echo $totalTareas;
                    ?>
                </span>
            </button>
        </div>

        <div id="taskStatus">
            <?php
            $tabta = "SELECT estatus, COUNT(*) as total FROM $tabtaskY WHERE (region LIKE '%$userAcroregion%' OR usuarioregistra LIKE '%$userLog%') GROUP BY estatus";
            $qtabta = $db_task->query($tabta);

            while ($fila = $qtabta->fetch(PDO::FETCH_ASSOC)) {
                $estatus = $fila['estatus'];
                $total = $fila['total'];

                echo "<div class='card-status'>
        <div class='status-title'>$estatus</div>
        <div class='status-count'>$total tareas</div>
        <button class='ver-tareas-btn' data-estatus='$estatus'>Ver tareas</button>
    </div>";
            }
            ?>
        </div>

        <div id="popupTareas">
            <div id="popupContent">
                <button id="closePopup">Cerrar listado de tareas</button>

                <table id="taskTable" class="display">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>VENCE</th>
                            <th>ESTATUS</th>
                            <th>TAREA</th>
                            <th>RESPONSABLE</th>
                        </tr>
                        <tr>
                            <th><input class="input-search" type="text" placeholder="Filtrar ID" /></th>
                            <th><input class="input-search" type="text" placeholder="Filtrar Vence" /></th>
                            <th><input class="input-search" type="text" placeholder="Filtrar Estatus" /></th>
                            <th><input class="input-search" type="text" placeholder="Filtrar Tarea" /></th>
                            <th><input class="input-search" type="text" placeholder="Filtrar Responsable" /></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $tabta = "SELECT * FROM $tabtaskY WHERE (region LIKE '%$userAcroregion%' OR usuarioregistra LIKE '%$userLog%')";
                        $qtabta = $db_task->query($tabta);
                        while ($fila = $qtabta->fetch(PDO::FETCH_ASSOC)) {
                            echo "<tr>
                                <td>{$fila['id']}</td>
                                <td>{$fila['fechaprogramada']}</td>
                                <td>{$fila['estatus']}</td>
                                <td>{$fila['tarea']}</td>
                                <td>{$fila['responsabletarea']}</td>
                            </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="graficas">
            <div class="container-gp">
                <!-- Gráfica Circular -->
                <div class="graph-container">
                    <h2>Gráfica Circular</h2>
                    <div class="pie-chart"></div>
                    <div class="pie-legend">
                        <div class="pie-legend-item">
                            <div class="pie-legend-color" style="background-color: #FF6384;"></div>
                            <span>Producto A</span>
                        </div>
                        <div class="pie-legend-item">
                            <div class="pie-legend-color" style="background-color: #36A2EB;"></div>
                            <span>Producto B</span>
                        </div>
                        <div class="pie-legend-item">
                            <div class="pie-legend-color" style="background-color: #FFCE56;"></div>
                            <span>Producto C</span>
                        </div>
                    </div>
                </div>

                <!-- Gráfica de Barras -->
                <div class="graph-container">
                    <h2>Gráfica de Barras</h2>
                    <div class="bar-chart">
                        <div class="y-axis">
                            <div class="y-tick" style="top: 0%;">100%</div>
                            <div class="y-tick" style="top: 25%;">75%</div>
                            <div class="y-tick" style="top: 50%;">50%</div>
                            <div class="y-tick" style="top: 75%;">25%</div>
                            <div class="y-tick" style="top: 100%;">0%</div>
                        </div>
                        <div class="bar-container">
                            <div class="bar"></div>
                            <div class="bar-label">Ene</div>
                        </div>
                        <div class="bar-container">
                            <div class="bar"></div>
                            <div class="bar-label">Feb</div>
                        </div>
                        <div class="bar-container">
                            <div class="bar"></div>
                            <div class="bar-label">Mar</div>
                        </div>
                        <div class="bar-container">
                            <div class="bar"></div>
                            <div class="bar-label">Abr</div>
                        </div>
                        <div class="bar-container">
                            <div class="bar"></div>
                            <div class="bar-label">May</div>
                        </div>
                    </div>
                </div>

                <!-- Gráfica Lineal -->
                <div class="graph-container">
                    <h2>Gráfica Lineal</h2>
                    <div class="line-chart">
                        <svg class="line" viewBox="0 0 100 100" preserveAspectRatio="none">
                            <!-- Área bajo la línea -->
                            <polygon class="line-fill" points="0,100 10,70 30,50 50,30 70,40 90,20 100,10 100,100" />
                            <!-- Línea -->
                            <polyline class="line-path" points="10,70 30,50 50,30 70,40 90,20" />
                            <!-- Puntos -->
                            <circle class="line-point" cx="10" cy="70" />
                            <circle class="line-point" cx="30" cy="50" />
                            <circle class="line-point" cx="50" cy="30" />
                            <circle class="line-point" cx="70" cy="40" />
                            <circle class="line-point" cx="90" cy="20" />
                        </svg>
                        <div class="x-labels">
                            <div class="x-label">Ene</div>
                            <div class="x-label">Feb</div>
                            <div class="x-label">Mar</div>
                            <div class="x-label">Abr</div>
                            <div class="x-label">May</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        $(document).ready(function() {
            // Aseguramos que el popup esté oculto al inicio
            $('#popupTareas').hide();

            // Inicializa DataTable con filtros individuales
            var table = $('#taskTable').DataTable({
                paging: false,
                orderCellsTop: true,
                fixedHeader: true,
                scrollX: false,
                autoWidth: false,
                dom: '<"top d-flex justify-content-between align-items-center mb-2"Bf>rt<"bottom"ip>',
                buttons: [{
                        extend: 'copyHtml5',
                        text: 'Copiar'
                    },
                    {
                        extend: 'excelHtml5',
                        text: 'Exportar a Excel'
                    },
                    {
                        extend: 'pdfHtml5',
                        text: 'Exportar a PDF',
                        orientation: 'landscape',
                        pageSize: 'A4',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    'colvis'
                ]
            });

            // Activar filtro por columna (inputs individuales)
            $('#taskTable thead tr:eq(1) th').each(function(i) {
                $('input', this).on('keyup change', function() {
                    if (table.column(i).search() !== this.value) {
                        table.column(i).search(this.value).draw();
                    }
                });
            });

            // Mostrar popup con todas las tareas (sin filtros)
            $('#consultarTareas').click(function() {
                $('#taskTable thead tr:eq(1) th input').val('');
                table.columns().search('').draw();
                $('#popupTareas').fadeIn();
            });

            // Mostrar popup filtrado por estatus (click en card)
            $('.ver-tareas-btn').on('click', function() {
                const estatus = $(this).data('estatus');

                // Limpiar inputs y filtros
                $('#taskTable thead tr:eq(1) th input').val('');
                table.columns().search('');

                // Búsqueda exacta con expresión regular (columna 2 = estatus)
                table.column(2).search('^' + estatus + '$', true, false).draw();

                $('#popupTareas').fadeIn();
            });

            // Cerrar popup
            $('#closePopup').click(function() {
                $('#popupTareas').fadeOut();
            });
        });
    </script>

</body>

</html>