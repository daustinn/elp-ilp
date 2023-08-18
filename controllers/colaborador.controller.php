<?php
include '../services/colaborador.service.php';

//SI ELMETODO ES POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dni = $_POST["dni"];
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $cargo = $_POST["cargo"];
    $usuario = $_POST["usuario"];
    $sede = $_POST["sede"];
    $puesto = $_POST["puesto"];
    $area = $_POST["area"];
    $departamento = $_POST["departamento"];
    $supervisor = $_POST["supervisor"];
   //  registrarcolaborador($dni, $nombre, $apellido, $cargo, $usuario, $sede, $puesto, $area, $departamento, $supervisor);
}

//SI ELMETODO ES PUT
if ($_SERVER["REQUEST_METHOD"] == "PUT") {
    $id= $_PUT["id"];
    $dni = $_PUT["dni"];
    $nombre = $_PUT["nombre"];
    $apellido = $_PUT["apellido"];
    $cargo = $_PUT["cargo"];
    $usuario = $_PUT["usuario"];
    $sede = $_PUT["sede"];
    $puesto = $_PUT["puesto"];
    $area = $_PUT["area"];
    $departamento = $_PUT["departamento"];
    $supervisor = $_PUT["supervisor"];
   //  actualizarcolaborador($id, $dni, $nombre, $apellido, $cargo, $usuario, $sede, $puesto, $area, $departamento, $supervisor);
}
