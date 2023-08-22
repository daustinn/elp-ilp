<?php

// Incluye el archivos .services.php
include 'services/tipo-objetivo.service.php';



// Obtiene las sedes desde la base de datos
$tipo_objetivos = getTipo_objetivos();


?>





<!-- include component head -->
<?php include 'components/head-logged-in.php' ?>

<body>



    <!-- include component nav -->
    <?php include 'components/nav.php' ?>

    <!-- include left sidebar -->
    <?php include 'components/left-sidebar.php' ?>

    <div class="mobile-menu-overlay"></div>

    <!-- CONTENT PAGE START -->
    <div class="main-container">
        <div class="pb-2">
            <h2 class="h3 mb-0 font-bold text-3xl">Administracion de tipos de objetivos</h2>
        </div>
        <!-- Alerta de Bootstrap -->
        <?php
        if (isset($_SESSION['alert_type']) && isset($_SESSION['alert_message'])) {
            echo "
            <div class='alert alert-{$_SESSION['alert_type']} alert-dismissible fade show' role='alert'>
                {$_SESSION['alert_message']}
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>
              ";

            unset($_SESSION['alert_type']);
            unset($_SESSION['alert_message']);
        }
        ?>

        <!-- Button trigger modal -->
        <div class="flex item-center gap-4 p-2">
            <div class="w-[300px] ">
                <button type="button" class="btn btn-primary bg-blue-600 text-white rounded-lg w-full h-10" data-toggle="modal" data-target="#exampleModal">
                    Crear nuevo
                </button>
            </div>
            <form class="w-full">
                <div class="form-group mb-0 relative">
                    <span class="absolute left-2 top-2">
                        <i class="dw dw-search2 search-icon"></i>
                    </span>
                    <input type="text" class="pl-8 form-control search-input" placeholder="Buscar" />
                </div>
            </form>
        </div>
        <!-- <div id="mensaje" class="alert"></div> -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Registrar nuevo tipo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="controllers/tipo-objetivo.controller.php" method="post">
                            <div class="grid grid-cols-3 gap-3">
                                <div class="form-group col-span-3">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" id="nombre" autofocus class="form-control" name="nombre" required>
                                </div>
                                <div class="form-group col-span-3">
                                    <label for="descripcion">Descripcion</label>
                                    <textarea type="text" id="descripcion" class="form-control" name="descripcion"></textarea>
                                </div>
                            </div>
                            <div class="flex gap-2">
                                <button type="button" class="btn btn-secondary bg-neutral-700" data-dismiss="modal">Cerrar</button>
                                <input type="submit" class="bg-blue-600 text-white rounded-lg w-full h-10" value="Registrar">
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <table class="table ml-2 hover multiple-select-row data-table-export nowrap">
            <thead>
                <tr>
                    <th class=" datatable-nosort">Id</th>
                    <th>Nombre</th>
                    <th>descripcion</th>
                    <th>Registro</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php if ($tipo_objetivos) { ?>
                    <?php foreach ($tipo_objetivos as $tipo_objetivo) { ?>
                        <tr>
                            <td><?php echo $tipo_objetivo['id']; ?></td>
                            <td><?php echo $tipo_objetivo['nombre']; ?></td>
                            <td><?php echo $tipo_objetivo['descripcion']; ?></td>
                            <td><?php

                                $fechaDateTime = new DateTime($tipo_objetivo['created_at']);
                                $fechaFormateada = $fechaDateTime->format('d \d\e F \d\e Y');
                                echo $fechaFormateada
                                ?></td>
                            <td>
                                <a class="btn btn-primary" href="tipo-objetivo-edicion.php?id=<?php echo $tipo_objetivo['id']; ?>">Editar</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } else { ?>
                    <tr>
                        <td colspan='2'>No hay roles registradas.</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
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