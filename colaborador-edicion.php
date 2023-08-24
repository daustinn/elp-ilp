<?php
require_once 'services/colaborador.service.php'; // Archivo de conexión a la base de datos


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Llama a la función para obtener los datos del colaborador por ID desde tu servicio/DAO
    $colaborador = getRolById($id);

    if ($colaborador) {
        $id_colaborador = $colaborador['id'];
        $dni =  $colaborador['dni'];
        $nombres =  $colaborador['nombres'];
        $apellidos =  $colaborador['apellidos'];
        $idusuario =  $colaborador['idusuario'];
        $idcargo = $colaborador['idcargo'];
        $idsede = $colaborador['idsede'];
        $idpuesto = $colaborador['idpuesto'];
        $idarea = $colaborador['idarea'];
        $iddepartamento = $colaborador['iddepartamento'];
        $idsupervisor = $colaborador['idsupervisor'];

    } else {
        echo "Colaborador no encontrado";
    }
}

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
        <!-- Alerta de Bootstrap -->
        <div class="modal-content max-w-[500px] mx-auto">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Actualizar Colaborador</h5>
                <button onclick="history.back()" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="controllers/colaborador.controller.php" method="post">
                    <div class="grid grid-cols-3 gap-1">
                        <input type="hidden" name="_method" value="PUT">

                        <div class="form-group col-span-3">
                            <label for="nombre">Id</label>
                            <input type="number" value="<?php echo $id_colaborador ?>" class="form-control" name="id" id="id" readonly />
                        </div>
                        <div class="form-group col-span-3">
                            <label for="dni">dni</label>
                            <input type="" value="<?php echo $dni ?>" id="dni" autofocus class="form-control" name="dni" required />
                        </div>
                        <div class="form-group col-span-3">
                            <label for="Nombres">Nombres</label>
                            <input type="text" value="<?php echo $nombres ?>" id="nombres" autofocus class="form-control" name="nombres" required />
                        </div>
                        <div class="form-group col-span-3">
                            <label for="Apellidos">Apellidos</label>
                            <input type="text" value="<?php echo $apellidos ?>" id="apellidos" autofocus class="form-control" name="apellidos" required />
                        </div>
                     
                        <div class="form-group col-span-3">
                            <label for="usuario">Usuario</label>
                            <input type="text" value="<?php echo $idusuario ?>" id="idusuario" autofocus class="form-control" name="idusuario" required />
                        </div>
                        <div class="form-group col-span-3">
                            <label for="cargo">Cargo</label>
                            <input type="text" value="<?php echo $idcargo ?>" id="idcargo" autofocus class="form-control" name="idcargo" required />
                        </div>
                        <div class="form-group col-span-3">
                            <label for="sede">Sede</label>
                            <input type="text" value="<?php echo $idsede ?>" id="idsede" autofocus class="form-control" name="idsede" required />
                        </div>
                        <div class="form-group col-span-3">
                            <label for="puesto">Puesto</label>
                            <input type="text" value="<?php echo $idpuesto ?>" id="idpuesto" autofocus class="form-control" name="idpuesto" required />
                        </div>
                        <div class="form-group col-span-3">
                            <label for="area">Area</label>
                            <input type="text" value="<?php echo $idarea ?>" id="idarea" autofocus class="form-control" name="idarea" required />
                        </div>
                        <div class="form-group col-span-3">
                            <label for="departamento">Departamento</label>
                            <input type="text" value="<?php echo $iddepartamento ?>" id="iddepartamento" autofocus class="form-control" name="iddepartamento" required />
                        </div>
                        <div class="form-group col-span-3">
                            <label for="supervisor">Supervisor</label>
                            <input type="text" value="<?php echo $idsupervisor ?>" id="idsupervisor" autofocus class="form-control" name="idsupervisor" required />
                        </div>




                    </div>
                    <div class="flex gap-2">
                        <button type="button" onclick="history.back()" class="btn btn-secondary bg-neutral-700 h-10" data-dismiss="modal">Cancelar</button>
                        <input type="submit" class="bg-blue-600 text-white rounded-lg w-full h-10" value="Actualizar">
                    </div>
                </form>
            </div>

        </div>
    </div>
    <!-- CONTENT PAGE END  -->



    <!-- js -->
    <script src="vendors/scripts/core.js"></script>
    <script src="vendors/scripts/script.min.js"></script>
    <script src="vendors/scripts/process.js"></script>
    <script src="vendors/scripts/layout-settings.js"></script>
</body>

</html>