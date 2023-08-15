<!-- include component head -->
<?php include 'components/head.php' ?>

<body>

    <!-- include component nav -->
    <?php include 'components/nav.php' ?>

    <!-- include left sidebar -->
    <?php include 'components/left-sidebar.php' ?>

    <div class="mobile-menu-overlay"></div>

    <!-- CONTENT PAGE START -->
    <div class="main-container " style="padding-top: 90px;">
        <div class=" ">
            <div class="title ">
                <h2 class="h3 mb-0">Objetivos</h2>
            </div>
        </div>
        <div class="flex gap-2 pt-3 divide-x divide-x-neutral-800">
            <div class="container min-w-[500px] p-4 border w-[500px] bg-neutral-50 p-3 rounded-xl">
                <form action="procesar_encuesta.php" method="post">
                    <div class="grid grid-cols-3 gap-3">
                        <div class="form-group">
                            <label for="nombre">Tipo:</label>
                            <select class="form-control">
                                <option value="1">
                                    Personal
                                </option>
                            </select>
                        </div>
                        <div class="form-group col-span-2">
                            <label for="nombre">Colaborador:</label>
                            <input type="text" value="<?php echo $fullname ?> <?php echo $lastname ?>" disabled class="form-control" name="collaborator" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" name="title" required>
                    </div>
                    <!-- 
                    <div class="form-group">
                        <label for="fecha_inicio">Fecha de Inicio:</label>
                        <input type="date" class="form-control" name="fecha_inicio" required>
                    </div> -->
                    <div class="form-group">
                        <label for="objetivo">Descripcion:</label>
                        <textarea class="form-control min-h-[100px]" name="objetivo" rows="4" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="indicador_logro">Indicador de Logro:</label>
                        <textarea id="indicador_logro" class="form-control min-h-[150px]" name="objetivo" rows="4" required></textarea>
                    </div>

                    <input type="submit" class="bg-blue-600 text-white rounded-lg w-full h-10" value="Enviar">
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