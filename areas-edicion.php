<?php
require_once 'services/area.service.php'; // Archivo de conexión a la base de datos

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Llama a la función para obtener los datos del rol por ID desde tu servicio/DAO
    $rol = getAreaById($id);

    if ($area) {
        $id_area = $area['id'];
        $nombre = $area['nombre'];
    
    } else {
        echo "Area no encontrado";
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
                <h5 class="modal-title" id="exampleModalLabel">Actualizar Area</h5>
                <button onclick="history.back()" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="controllers/area.controller.php" method="post">
                    <div class="grid grid-cols-3 gap-1">
                        <input type="hidden" name="_method" value="PUT">

                        <div class="form-group col-span-3">
                            <label for="nombre">Id</label>
                            <input type="number" value="<?php echo $id_area ?>" class="form-control" name="id" id="id" readonly />
                        </div>
                        <div class="form-group col-span-3">
                            <label for="nombre">Nombre</label>
                            <input type="text" value="<?php echo $nombre ?>" id="nombre" autofocus class="form-control" name="nombre" required />
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