<!-- include component head -->

<?php

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

    <div id="mensajeAlert" class="hidden">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            Usuario eliminado correctamte
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    <!-- CONTENT PAGE START -->


    <div class="main-container">
        <div class="pb-2">
            <h2 class="h3 mb-0 font-bold text-3xl">Administracion de usuarios</h2>
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
                        <h5 class="modal-title" id="exampleModalLabel">Registrar nuevo usuario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="controllers/usuario.controller.php" method="post">
                            <div class="grid grid-cols-3 gap-3">
                                <div class="form-group col-span-3">
                                    <label for="nombre">Rol:</label>
                                    <select name="rol" class="form-control">
                                        <?php
                                        if ($roles) {
                                            foreach ($roles as $rol) {
                                                echo "<option value='" . $rol['id'] . "'>"
                                                    . $rol['descripcion'] .
                                                    "</option>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='2'>No hay sedes registradas.</td></tr>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="usuario">Usuario / Correo:</label>
                                <input type="email" id="usuario" autofocus class="form-control" name="usuario" required>
                            </div>
                            <div class="form-group">
                                <label for="contraseña">Contraseña:</label>
                                <input type="password" value="Pontificia2023" id="contraseña" class="form-control" name="contraseña" required>
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
                    <th>Usuario / Correo</th>
                    <th>Estado</th>
                    <th>Contraseña</th>
                    <th>Rol</th>
                    <th>Registro</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

                <?php if ($users) { ?>
                    <?php foreach ($users as $user) { ?>
                        <tr>
                            <td><?php echo $user['id']; ?></td>
                            <td><?php echo $user['usuario']; ?></td>
                            <td>
                                <button <?php if ($user['usuario'] == 'admin') echo 'disabled'; ?> data-id="<?php echo $user['id']; ?>" title="<?php echo ($user['status'] == 1) ? 'Desactivar' : 'Activar'; ?>" class="status_user rounded-lg py-1 px-2 text-white <?php echo ($user['status'] == 1) ? 'bg-green-600 hover:bg-green-500' : 'bg-red-500 hover:bg-red-600'; ?>">
                                    <?php echo ($user['status'] == 1) ? 'Activo' : 'Inactivo'; ?>
                                </button>
                            </td>
                            <td><?php echo $user['contraseña']; ?></td>
                            <td>
                                <select data-id="<?php echo $user['id'] ?>" <?php if ($user['usuario'] == 'admin') echo 'disabled'; ?> name="rol" class="form-control select-rol">
                                    <?php foreach ($roles as $rol) { ?>
                                        <option value="<?php echo $rol['id']; ?>" <?php if ($rol['id'] == $user['id_rol']) echo 'selected'; ?>>
                                            <?php echo $rol['descripcion']; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                                <input type="hidden" name="update_rol" value="true">
                            </td>
                            <td><?php

                                $fechaDateTime = new DateTime($user['created_at']);
                                $fechaFormateada = $fechaDateTime->format('d \d\e F \d\e Y');
                                echo $fechaFormateada
                                ?></td>
                            <td>
                                <a class="btn btn-primary" href="usuario-edicion.php?id=<?php echo $user['id']; ?>">Editar</a>
                            </td>
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
    </div>

    <!-- CONTENT PAGE END  -->


    <!-- js -->
    <script>
        $(document).ready(function() {
            //  change user status
            $(" .status_user").click(function() {
                var userId = $(this).data("id");
                var result = confirm('Estás seguro de desactivar el usuario con el id: ' + userId);
                if (!result) return;

                var $this = $(this); // Almacenar el objeto jQuery en una variable

                $.ajax({
                    url: "controllers/usuario.controller.php?id=" + userId,
                    method: "DELETE",
                    success: function(response) {
                        location.reload();
                    },

                });
            });

            // change user role
            $(".select-rol").change(function() {
                var userId = $(this).data("id");
                var newRoleId = $(this).val();

                $.ajax({
                    url: "controllers/usuario.controller.php", // Cambia esto a la URL de tu página
                    method: "POST", // Puedes seguir usando POST
                    data: {
                        id: userId,
                        rol: newRoleId,
                        update_rol: true
                    }, // Incluye el campo update_rol
                    success: function(response) {
                        // Actualizar solo la fila correspondiente en la página

                    },
                });
            });
        });
    </script>



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