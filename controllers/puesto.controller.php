<?php
include '../services/puesto.service.php';

//SI ELMETODO ES POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $puesto = $_POST["puesto"];
    $tipo_puesto = $_POST["tipo_puesto"];
   //  registrarusuario($puesto, $tipo_puesto);
}

//SI ELMETODO ES PUT
if ($_SERVER["REQUEST_METHOD"] == "PUT") {
    $id= $_PUT["id"];
    $puesto = $_PUT["puesto"];
    $tipo_puesto = $_PUT["tipo_puesto"];
   //  actualizarpuesto($id, $puesto, $tipo_puesto);
}
