<!-- include component head -->
<?php include 'components/head-logged-in.php' ?>

<?php

include 'modelo/conexion.php';

// Incluye el archivo sede.service.php donde está definida la función obtenerSedes()
include 'services/sede.service.php';

// Obtiene las sedes desde la base de datos
$sedes = GetSedes();
?>

<body>
    <div class="pre-loader">
        <div class="pre-loader-box">
            <div class="loader-logo">
                <!-- <img src="vendors/images/deskapp-logo.svg" alt="" /> -->
                <img src="src/images/logo_elp.gif" class="w-40" alt="">
            </div>
            <div class="loader-progress" id="progress_div">
                <div class="bar" id="bar1"></div>
            </div>
            <div class="percent" id="percent1">0%</div>
            <div class=" text-sm text-center animation-pulse">Cargando...</div>
        </div>
    </div>


    <!-- include component nav -->
    <?php include 'components/nav.php' ?>

    <!-- include left sidebar -->
    <?php include 'components/left-sidebar.php' ?>

    <div class="mobile-menu-overlay"></div>

    <!-- CONTENT PAGE START -->
    <div class="main-container">
        <div class="xs-pd-20-10 pd-ltr-20">
            <div class="title">
                <h2 class="h3 mb-0">Sedes</h2>
            </div>
            <div class="flex gap-2 item-center">
                <form class="" action="controllers/sede.controller.php" method="post">
                    <div class="bg-white p-4 max-h-max rounded-2xl w-[300px]">
                        <div class="form-group">
                            <label for="nombre">Sede:</label>
                            <input type="text" class="form-control" name="lugar" required>
                        </div>
                        <div class="form-btn-container">
                            <button type="submit" class="btn btn-primary bg-blue-500 w-full">Guardar</button>
                        </div>
                    </div>
                </form>
                <table class="table ml-2 hover multiple-select-row data-table-export nowrap">
                    <thead>
                        <tr>
                            <th class="table-plus datatable-nosort">Id</th>
                            <th>Lugar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($sedes) {
                            foreach ($sedes as $sede) {
                                echo "<tr>";
                                echo "<td>" . $sede['id'] . "</td>";
                                echo "<td class='table-plus'>" . $sede['lugar'] . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='2'>No hay sedes registradas.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- CONTENT PAGE END  -->


    <!-- js -->
    <script src="vendors/scripts/core.js"></script>
    <script src="vendors/scripts/script.min.js"></script>
    <script src="vendors/scripts/process.js"></script>
    <script src="vendors/scripts/layout-settings.js"></script>
    <script src="src/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
    <script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
    <script src="vendors/scripts/dashboard3.js"></script>
</body>

</html>