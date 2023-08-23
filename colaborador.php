<?php

// Incluye el archivos .services.php
include 'services/colaborador.service.php';
include 'services/user.service.php';
include 'services/cargo.service.php';
include 'services/sede.service.php';
include 'services/area.service.php';
include 'services/departamento.service.php';


// Obtiene las sedes desde la base de datos
$colaboradores = getColaboradores();
$users = getUsers();
$sedes = getSedes();
$departamentos = getDepartamento();
$areas = getArea();

?>


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
        <div class="pb-2">
            <h2 class="h3 mb-0 font-bold text-3xl">Administracion de Colaboradores</h2>
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
                        <h5 class="modal-title" id="exampleModalLabel">Registrar a un Colaboradores</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
<<<<<<< HEAD
                        <form action="controllers/usuario.controller.php" method="post">
                            <div class="grid grid-cols-12 gap-3">
                                <div class="form-group col-span-4">
=======
                        <form action="controllers/colaborador.controller.php" method="post">
                            <div class="grid grid-cols-3 gap">
                                <div class="form-group col-span-1">
>>>>>>> ba7b3329517c2edc8bebf8633c00b9d60fd6822f
                                    <label for="nombre">DNI</label>
                                    <input type="" id="" autofocus class="form-control" name="" required>
                                </div>
                                <div class="form-group col-span-4">
                                    <label for="nombre">Nombres</label>
                                    <input type="" id="" autofocus class="form-control" name="" required>
                                </div>
                                <div class="form-group col-span-4">
                                    <label for="nombre">Apellidos</label>
                                    <input type="" id="" autofocus class="form-control" name="" required>
                                </div>
                                <div class="form-group col-span-6">
                                    <label for="nombre">Usuario</label>
                                    <select name="usuario" class="form-control">
                                        <?php
                                        if ($users) {
                                            foreach ($users as $usuario) {
                                        ?>
                                                <option value='<?php echo $usuario['id'] ?> '><?php echo $usuario['usuario'] ?> </option>
                                        <?php
                                            }
                                        } else {
                                            echo "<tr><td colspan='2'>No hay sedes registradas.</td></tr>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-span-6">
                                    <label for="nombre">Cargo</label>
                                    <select name="cargo" class="form-control">
                                        <?php
                                        if ($cargos) {
                                            foreach ($cargos as $cargo) {
                                                echo "<option value='" . $cargo['id'] . "'>"
                                                    . $cargo['nombre'] .
                                                    "</option>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='2'>No hay sedes registradas.</td></tr>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-span-4">
                                    <label for="nombre">Sede</label>
                                    <select name="sede" class="form-control">
                                        <?php
                                        if ($sedes) {
                                            foreach ($sedes as $sede) {
                                                echo "<option value='" . $sede['id'] . "'>"
                                                    . $sede['lugar'] .
                                                    "</option>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='2'>No hay sedes registradas.</td></tr>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-span-4">
                                    <label for="nombre">Puesto</label>
                                    <select name="puesto" class="form-control">
                                        <?php
                                        if ($puestos) {
                                            foreach ($puestos as $puesto) {
                                                echo "<option value='" . $puesto['id'] . "'>"
                                                    . $puesto['nombre'] .
                                                    "</option>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='2'>No hay sedes registradas.</td></tr>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-span-4">
                                    <label for="nombre">Area</label>
                                    <select name="area" class="form-control">
                                        <?php
                                        if ($areas) {
                                            foreach ($areas as $area) {
                                                echo "<option value='" . $area['id'] . "'>"
                                                    . $area['nombre'] .
                                                    "</option>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='2'>No hay sedes registradas.</td></tr>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-span-4">
                                    <label for="nombre">Departamento</label>
                                    <select name="departamento" class="form-control">
                                        <?php
                                        if ($departamentos) {
                                            foreach ($departamentos as $departamento) {
                                                echo "<option value='" . $departamento['id'] . "'>"
                                                    . $departamento['nombre'] .
                                                    "</option>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='2'>No hay sedes registradas.</td></tr>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-span-8x">
                                    <label for="nombre">Supervisor</label>
                                    <select name="supervisor" class="form-control">
                                        <?php
                                        if ($supervisors) {
                                            foreach ($supervisors as $supervisor) {
                                                echo "<option value='" . $supervisor['id'] . "'>"
                                                    . $supervisor['nombre'] . $supervisor['nombre'] .
                                                    "</option>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='2'>No hay sedes registradas.</td></tr>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="flex gap-2">
                                <button type="button" class="btn btn-secondary bg-neutral-700" data-dismiss="modal">Close</button>
                                <input type="submit" class="bg-blue-600 text-white rounded-lg w-full h-10" value="Registrar Colaborador">
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
                    <th>DNI</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Usuario</th>
                    <th>Cargo</th>
                    <th>Sede</th>
                    <th>Puesto</th>
                    <th>area</th>
                    <th>Departamento</th>
                    <th>Supervisor</th>
                    <th>Registro</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php if ($colaboradores) { ?>
                    <?php foreach ($colaboradores as $colaborador) { ?>
                        <tr>
                            <td><?php echo $colaborador['id']; ?></td>
                            <td><?php echo $colaborador['dni']; ?></td>
                            <td><?php echo $colaborador['nombres']; ?></td>
                            <td><?php echo $colaborador['apellidos']; ?></td>
                            <td><?php echo $colaborador['idusuario']; ?></td>

                            <td><?php echo $colaborador['idcargo']; ?></td>
                            <td><?php echo $colaborador['idsede']; ?></td>
                            <td><?php echo $colaborador['idpuesto']; ?></td>
                            <td><?php echo $colaborador['idarea']; ?></td>
                            <td><?php echo $colaborador['iddepartamento']; ?></td>
                            <td><?php echo $colaborador['idsupervisor']; ?></td>

                            <td><?php

                                $fechaDateTime = new DateTime($colaborador['created_at']);
                                $fechaFormateada = $fechaDateTime->format('d \d\e F \d\e Y');
                                echo $fechaFormateada
                                ?></td>
                        </tr>
                    <?php } ?>
                <?php } else { ?>
                    <tr>
                        <td colspan='2'>No hay sedes registradas.</td>
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