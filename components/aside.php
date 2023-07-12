<?php
$username = $_SESSION['nombre'];
$lastname = $_SESSION['apellido'];
?>


<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Estadisticas</div>
                <a class="nav-link" href="">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    PANEL DE CONTROL
                </a>
                <div class="sb-sidenav-menu-heading">Tipo de Aceeso</div>

                <a class="nav-link" href="roles_usuario.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Roles y roles
                </a>

                <div class="sb-sidenav-menu-heading">EVALUACION - METAS</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
                    aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    OBJETIVOS
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="objetivo1.php">Objetivos de plan de mejora </a>
                        <a class="nav-link" href="objetivo2.php">Objetivos personales</a>
                        <a class="nav-link" href="objetivo3.php">Objetivos laborales</a>
                    </nav>
                </div>

                <div class="sb-sidenav-menu-heading">COLABORADORES</div>

                <a class="nav-link" href="tables.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Colaboradores
                </a>

                <a class="nav-link" href="#">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Reporte
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">
                <?php echo $username; ?>
                <?php echo $lastname; ?>
            </div>
        </div>
    </nav>
</div>