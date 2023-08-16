<!-- include component head -->

<?php

include 'modelo/conexion.php';

// Incluye el archivos .services.php
include 'services/user.service.php';
include 'services/rol.service.php';


// Obtiene las sedes desde la base de datos
$users = getUsers();
$roles = getRoles();

?>

<!-- include component head -->
<?php include 'components/head.php' ?>

<body>

    <!-- include component nav -->
    <?php include 'components/nav.php' ?>

    <!-- include left sidebar -->
    <?php include 'components/left-sidebar.php' ?>

    <div class="mobile-menu-overlay"></div>

    <!-- CONTENT PAGE START -->
    <div class="main-container">
        <div class=" pb-2">
            <div class="title ">
                <h2 class="h3 mb-0">Buscar</h2>
            </div>
        </div>
        <div class="header-search">
            <form>
                <div class="form-group mb-0 relative">
                    <span class="absolute left-2 top-2">
                        <i class="dw dw-search2 search-icon"></i>
                    </span>
                    <input type="text" class="pl-8 form-control search-input" placeholder="Buscar" />
                </div>
            </form>
        </div>
        <div class="gap-2 pt-3 divide-x divide-x-neutral-800">
            <!-- Button trigger modal -->
            <div class="w-[200px] p-2">
                <button type="button" class="btn btn-primary bg-blue-600 text-white rounded-lg w-full h-10" data-toggle="modal" data-target="#exampleModal">
                    Crear nuevo usuario
                </button>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Registrar nuevo usuario</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="procesar_encuesta.php" method="post">
                                <div class="grid grid-cols-3 gap-3">
                                    <div class="form-group col-span-3">
                                        <label for="nombre">Rol:</label>
                                        <select class="form-control">
                                            <?php
                                            if ($roles) {
                                                foreach ($roles as $rol) {
                                                    echo "<td class='p-1'>" . $user['rol'] . "</td>";
                                                    echo "
                                        <option value='" . $rol['id'] . "'>"
                                                        . $rol['nombre'] .
                                                        "</option>";
                                                }
                                            } else {
                                                echo "<tr><td colspan='2'>No hay sedes registradas.</td></tr>";
                                            }
                                            ?>
                                            <option value="1">
                                                Personal
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nombre">Usuario / Correo:</label>
                                    <input type="text" autofocus class="form-control" name="usuario" required>
                                </div>
                                <div class="form-group">
                                    <label for="nombre">Contraseña:</label>
                                    <input type="password" class="form-control" name="contraseña" required>
                                </div>
                                <div class="flex gap-2">
                                    <button type="button" class="btn btn-secondary bg-neutral-700" data-dismiss="modal">Close</button>
                                    <input type="submit" class="bg-blue-600 text-white rounded-lg w-full h-10" value="Registrar usuario">
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
                        <th>Usuario</th>
                        <th>Contraseña</th>
                        <th>Rol</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($users) {
                        foreach ($users as $user) {
                            echo "<tr>";
                            echo "<td>" . $user['id'] . "</td>";
                            echo "<td class='p-1'>" . $user['usuario'] . "</td>";
                            echo "<td class='p-1'>" . $user['contraseña'] . "</td>";
                            echo "<td class='p-1'>" . $user['rol'] . "</td>";
                            echo "<td class='p-1'>
                                    <div class='flex gap-2'>
                                        <button class='btn btn-primary'>Editar</button>
                                        <button class='btn btn-danger'>Editar</button>
                                    </div>
                                </td>";
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
    <!-- CONTENT PAGE END  -->


    <!-- js -->
    <script src="vendors/scripts/core.js"></script>
    <script src="vendors/scripts/script.min.js"></script>
    <script src="vendors/scripts/process.js"></script>
    <script src="vendors/scripts/layout-settings.js"></script>
    <script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
    <script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
</body>

</html>