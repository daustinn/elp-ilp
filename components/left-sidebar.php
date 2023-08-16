<?php
// Session start
$rol = $_SESSION['rol'];
?>


<div class="left-side-bar">
    <div class="brand-logo">
        <a href="index.php">
            <img src="src/images/logo_elp.gif" class="w-32" alt="">
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li class="dropdown">
                    <a href="index.php" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-house"></span><span class="mtext">Inicio</span>
                    </a>
                </li>
                <li>
                    <a href="objetivos.php" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-table"></span><span class="mtext">Objetivos</span>
                    </a>
                </li>
                <li>
                    <a href="notas.php" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-receipt-cutoff"></span><span class="mtext">Notas</span>
                    </a>
                </li>
                <!-- verfify if role user is admin -->
                <?php
                if ($rol == 'admin') {
                ?>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-pie-chart"></span><span class="mtext">Reportes</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="highchart.html">Objetivos</a></li>
                            <li><a href="knob-chart.html">Usuarios</a></li>
                            <li><a href="jvectormap.html">Colaboradores</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="usuarios.php" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-people"></span><span class="mtext">Usuarios</span>
                        </a>
                    </li>
                    <li>
                        <a href="sitemap.html" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-diagram-3"></span><span class="mtext">Colaboradores</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-hdd-stack"></span><span class="mtext">Otros</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="roles.php">Roles</a></li>
                            <li><a href="sedes.php">Sedes</a></li>
                            <li><a href="areas.php">Areas</a></li>
                            <li><a href="departamentos.php">Departamentos</a></li>
                            <li><a href="tipo-objetivos.php">Tipo Objetivos</a></li>
                        </ul>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</div>