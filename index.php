<?php

session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Si no ha iniciado sesión, redireccionar al formulario de inicio de sesión
    header('Location: login.php');
    exit();
}

// Incluir el archivo del controlador de colaboradores
include 'controlador/controlador_colaborador.php';

// Obtener la lista de colaboradores llamando a la función del controlador
$colaboradores = obtenerListaColaboradores();

?>

<!-- include component head -->
<?php include 'components/head.php' ?>

<body class="sb-nav-fixed">
    <!-- include component nav -->
    <?php include 'components/nav.php' ?>

    <div id="layoutSidenav">

        <!-- include component aside -->
        <?php include 'components/aside.php' ?>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">PANEL DE CONTROL</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">PANEL DE CONTROL</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">Primary Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">Warning Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">Success Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body">Danger Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-area me-1"></i>
                                    Grafico de Objetivos del area
                                </div>
                                <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-bar me-1"></i>
                                    Grafico de barras de Objetivos del area
                                </div>
                                <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Tabla de datos de Colaboradores
                        </div>
                        <?php if ($colaboradores !== false): ?>
                            <table class="table">
                                <tr>
                                    <th class="col">ID</th>
                                    <th class="col">Nombre</th>
                                    <th class="col">Apellido</th>
                                    <th class="col">Cargo</th>
                                </tr>
                                <?php foreach ($colaboradores as $colaborador): ?>
                                    <tr>
                                        <td>
                                            <?php echo $colaborador['idcolaborador']; ?>
                                        </td>
                                        <td>
                                            <?php echo $colaborador['nombre']; ?>
                                        </td>
                                        <td>
                                            <?php echo $colaborador['apellido']; ?>
                                        </td>
                                        <td>
                                            <?php echo $colaborador['cargo']; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        <?php else: ?>
                            <p>No se encontraron colaboradores.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>