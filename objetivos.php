<!-- include component head -->
<?php include 'components/head.php' ?>


<style>
    /* Estilos personalizados */
    .form-container {
        max-width: 500px;
        margin: auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .form-title {
        text-align: center;
        margin-bottom: 30px;
    }

    .form-group label {
        font-weight: bold;
    }

    .form-group textarea {
        resize: none;
    }

    .form-btn-container {
        text-align: center;
        margin-top: 20px;
    }
</style>

<body>
    <!-- <div class="container mt-5">
        <div class="form-container">
            <h2 class="form-title">Formulario Tipo de Objetivo</h2>
            <form action="procesar_tipo_objetivo.php" method="post">
                <div class="form-group">
                    <label for="tipo_objetivo">Tipo de Objetivo:</label>
                    <select class="form-control" id="tipo_objetivo" name="tipo_objetivo" required>
                        <option value="">Seleccione un tipo de objetivo</option>
                        <option value="Objetivos Laborales">Objetivos Laborales</option>
                        <option value="Plan de Mejora">Plan de Mejora</option>
                        <option value="Objetivos Personales">Objetivos Personales</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="objetivo">Objetivo del Colaborador:</label>
                    <textarea class="form-control" id="objetivo" name="objetivo" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <label for="indicador_logro">Indicador de Logro (%):</label>
                    <input type="number" class="form-control" id="indicador_logro" name="indicador_logro" required>
                </div>
                <div class="form-btn-container">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div> -->

    <!-- include component nav -->
    <?php include 'components/nav.php' ?>

    <!-- include left sidebar -->
    <?php include 'components/left-sidebar.php' ?>

    <div class="mobile-menu-overlay"></div>

    <!-- CONTENT PAGE START -->
    <div class="main-container " style="padding-top: 30px;">
        <div class=" ">
            <div class="title ">
                <h2 class="h3 mb-0">Objetivos</h2>
            </div>
        </div>
        <div class="flex gap-2 divide-x divide-x-neutral-800">
            <div class="container min-w-[350px] w-[350px] bg-white p-3 rounded-xl">
                <form action="procesar_encuesta.php" method="post">
                    <div class="form-group">
                        <label for="nombre">Nombre del Colaborador:</label>
                        <input type="text" value="<?php echo $fullname ?> <?php echo $lastname ?>" disabled class="form-control" name="collaborator" required>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Tipo de objetivo:</label>
                        <select class="form-control">
                            <option value="">
                                Personal
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="fecha_inicio">Fecha de Inicio:</label>
                        <input type="date" class="form-control" name="fecha_inicio" required>
                    </div>
                    <div class="form-group">
                        <label for="objetivo">Indicadores:</label>
                        <textarea class="form-control min-h-[200px]" name="objetivo" rows="4" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="indicador_logro">Indicador de Logro (%):</label>
                        <input type="number" class="form-control" name="indicador_logro" min="0" max="100" required>
                    </div>

                    <input type="submit" class="btn btn-primary" value="Enviar">
                </form>
            </div>
            <table class="table ml-2 hover multiple-select-row data-table-export nowrap">
                <thead>
                    <tr>
                        <th class="table-plus datatable-nosort">Name</th>
                        <th>Age</th>
                        <th>Office</th>
                        <th>Address</th>
                        <th>Start Date</th>
                        <th>Salart</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="table-plus">Gloria F. Mead</td>
                        <td>25</td>
                        <td>Sagittarius</td>
                        <td>2829 Trainer Avenue Peoria, IL 61602</td>
                        <td>29-03-2018</td>
                        <td>$162,700</td>
                    </tr>
                    <tr>
                        <td class="table-plus">Andrea J. Cagle</td>
                        <td>30</td>
                        <td>Gemini</td>
                        <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                        <td>29-03-2018</td>
                        <td>$162,700</td>
                    </tr>
                    <tr>
                        <td class="table-plus">Andrea J. Cagle</td>
                        <td>20</td>
                        <td>Gemini</td>
                        <td>2829 Trainer Avenue Peoria, IL 61602</td>
                        <td>29-03-2018</td>
                        <td>$162,700</td>
                    </tr>
                    <tr>
                        <td class="table-plus">Andrea J. Cagle</td>
                        <td>30</td>
                        <td>Sagittarius</td>
                        <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                        <td>29-03-2018</td>
                        <td>$162,700</td>
                    </tr>
                    <tr>
                        <td class="table-plus">Andrea J. Cagle</td>
                        <td>25</td>
                        <td>Gemini</td>
                        <td>2829 Trainer Avenue Peoria, IL 61602</td>
                        <td>29-03-2018</td>
                        <td>$162,700</td>
                    </tr>
                    <tr>
                        <td class="table-plus">Andrea J. Cagle</td>
                        <td>20</td>
                        <td>Sagittarius</td>
                        <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                        <td>29-03-2018</td>
                        <td>$162,700</td>
                    </tr>
                    <tr>
                        <td class="table-plus">Andrea J. Cagle</td>
                        <td>18</td>
                        <td>Gemini</td>
                        <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                        <td>29-03-2018</td>
                        <td>$162,700</td>
                    </tr>
                    <tr>
                        <td class="table-plus">Andrea J. Cagle</td>
                        <td>30</td>
                        <td>Sagittarius</td>
                        <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                        <td>29-03-2018</td>
                        <td>$162,700</td>
                    </tr>
                    <tr>
                        <td class="table-plus">Andrea J. Cagle</td>
                        <td>30</td>
                        <td>Sagittarius</td>
                        <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                        <td>29-03-2018</td>
                        <td>$162,700</td>
                    </tr>
                    <tr>
                        <td class="table-plus">Andrea J. Cagle</td>
                        <td>30</td>
                        <td>Gemini</td>
                        <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                        <td>29-03-2018</td>
                        <td>$162,700</td>
                    </tr>
                    <tr>
                        <td class="table-plus">Andrea J. Cagle</td>
                        <td>30</td>
                        <td>Gemini</td>
                        <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                        <td>29-03-2018</td>
                        <td>$162,700</td>
                    </tr>
                    <tr>
                        <td class="table-plus">Andrea J. Cagle</td>
                        <td>30</td>
                        <td>Gemini</td>
                        <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                        <td>29-03-2018</td>
                        <td>$162,700</td>
                    </tr>
                </tbody>
            </table>
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