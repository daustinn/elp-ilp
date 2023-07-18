<!-- include component head -->
<?php include 'components/head-logged-in.php' ?>

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
            <div class="title pb-20">
                <h2 class="h3 mb-0">Objtivos pages</h2>
            </div>
        </div>
    </div>
    <!-- CONTENT PAGE END  -->
    <div class="container mt-5 pl-[200px]">
        <h1 class="mb-4">Encuesta de Objetivos para Colaboradores</h1>
        <form action="procesar_encuesta.php" method="post">
            <div class="form-group">
                <label for="nombre">Nombre del Colaborador:</label>
                <input type="text" class="form-control" name="nombre" required>
            </div>

            <div class="form-group">
                <label for="apellidos">Apellidos del Colaborador:</label>
                <input type="text" class="form-control" name="apellidos" required>
            </div>

            <div class="form-group">
                <label for="cargo">Cargo del Colaborador:</label>
                <input type="text" class="form-control" name="cargo" required>
            </div>

            <div class="form-group">
                <label for="area">Área del Colaborador:</label>
                <select class="form-control" name="area" required>
                    <option value="" disabled selected>Selecciona el área</option>
                    <option value="Area 1">Area 1</option>
                    <option value="Area 2">Area 2</option>
                    <option value="Area 3">Area 3</option>
                    <!-- Agrega más opciones según tus necesidades -->
                </select>
            </div>

            <div class="form-group">
                <label for="fecha_inicio">Fecha de Inicio:</label>
                <input type="date" class="form-control" name="fecha_inicio" required>
            </div>

            <div class="form-group">
                <label for="fecha_fin">Fecha de Fin:</label>
                <input type="date" class="form-control" name="fecha_fin" required>
            </div>

            <div class="form-group">
                <label>Tipo de Objetivo:</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tipo_objetivo" value="Plan de Mejora" required>
                    <label class="form-check-label">Plan de Mejora</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tipo_objetivo" value="Objetivos Personales" required>
                    <label class="form-check-label">Objetivos Personales</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tipo_objetivo" value="Objetivos Laborales" required>
                    <label class="form-check-label">Objetivos Laborales</label>
                </div>
            </div>

            <div class="form-group">
                <label for="objetivo">Objetivo del Colaborador:</label>
                <textarea class="form-control" name="objetivo" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="indicador_logro">Indicador de Logro (%):</label>
                <input type="number" class="form-control" name="indicador_logro" min="0" max="100" required>
            </div>

            <input type="submit" class="btn btn-primary" value="Enviar">
        </form>
    </div>

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