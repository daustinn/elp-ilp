<?php

// Incluye el archivos .services.php
include 'services/colaborador.service.php';
include 'services/user.service.php';
include 'services/cargo.service.php';
include 'services/sede.service.php';
include 'services/area.service.php';
include 'services/puesto.service.php';
include 'services/departamento.service.php';



// Obtiene las sedes desde la base de datos
$colaboradores = getColaboradores();
$users = getUsers();
$sedes = getSedes();
$departamentos = getDepartamento();
$areas = getArea();
$cargos = getCargos();
$puestos = getPuestos()



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
                        <form action="controllers/colaborador.controller.php" method="post">
                            <div class="grid grid-cols-12 gap-3">
                                <div class="form-group col-span-4">
                                    <label for="nombre">DNI</label>
                                    <input type="" id="" autofocus class="form-control" name="dni" required>
                                </div>
                                <div class="form-group col-span-4">
                                    <label for="nombre">Nombres</label>
                                    <input type="" id="" autofocus class="form-control" name="nombres" required>
                                </div>
                                <div class="form-group col-span-4">
                                    <label for="nombre">Apellidos</label>
                                    <input type="" id="" autofocus class="form-control" name="apellidos" required>
                                </div>
                                <div class="form-group col-span-6">
                                    <label for="nombre">Usuario</label>
                                    <select name="idusuario" class="form-control">
                                        <?php
                                        foreach ($users as $usuario) {
                                        ?>
                                            <option value='<?php echo $usuario['id'] ?> '><?php echo $usuario['usuario'] ?> </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-span-6">
                                    <label for="nombre">Cargo</label>
                                    <select name="idcargo" class="form-control">
                                        <?php
                                        foreach ($cargos as $cargo) {
                                        ?>
                                            <option value='<?php echo $cargo['id'] ?> '><?php echo $cargo['nombre'] ?> </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group col-span-4">
                                    <label for="nombre">Sede</label>
                                    <select name="idsede" class="form-control">
                                        <?php
                                        foreach ($sedes as $sede) {
                                        ?>
                                            <option value='<?php echo $sede['id'] ?> '><?php echo $sede['lugar'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-span-4">
                                    <label for="nombre">Puesto</label>
                                    <select name="idpuesto" class="form-control">
                                        <?php
                                        foreach ($puestos as $puesto) {
                                        ?>
                                            <option value='<?php echo $puesto['id'] ?> '><?php echo $puesto['nombre'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-span-4">
                                    <label for="nombre">Area</label>
                                    <select name="idarea" class="form-control">
                                        <?php
                                        foreach ($areas as $area) {
                                        ?>
                                            <option value='<?php echo $area['id'] ?> '><?php echo $area['nombre'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-span-4">
                                    <label for="nombre">Departamento</label>
                                    <select name="iddepartamento" class="form-control">
                                        <?php
                                        foreach ($departamentos as $departamento) {
                                        ?>
                                            <option value='<?php echo $departamento['id'] ?> '><?php echo $departamento['nombre'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-span-8">
                                    <label for="nombre">Supervisor</label>
                                    <select name="idsupervisor" class="form-control">
                                        <?php
                                        foreach ($colaboradores as $colaborador) {
                                        ?>
                                            <option value='<?php echo $colaborador['id'] ?> '><?php echo $colaborador['nombres'] ?> <?php echo $colaborador['apellidos'] ?></option>
                                        <?php
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
                            <td><?php echo $colaborador['usuario']; ?></td>

                            <td><?php echo $colaborador['cargo']; ?></td>
                            <td><?php echo $colaborador['sede']; ?></td>
                            <td><?php echo $colaborador['puesto']; ?></td>
                            <td><?php echo $colaborador['area']; ?></td>
                            <td><?php echo $colaborador['departamento']; ?></td>
                            <td><?php echo $colaborador['supervisor']; ?></td>

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