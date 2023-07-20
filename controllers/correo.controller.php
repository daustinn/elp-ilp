<?php
include '../services/correo.service.php';

//SI ELMETODO ES POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo_correo = $_POST["tipo_correo"];
    $valor = $_POST["valor"];
    $colaborador = $_POST["colaborador"];
   //  registrarcorreo($tipo_correo, $valor, $colaborador);
}

//SI ELMETODO ES PUT
if ($_SERVER["REQUEST_METHOD"] == "PUT") {
    $id= $_PUT["id"];
    $tipo_correo = $_PUT["tipo_correo"];
    $valor = $_PUT["valor"];
    $colaborador = $_PUT["colaborador"];
   //  actualizarcorreo($id, $tipo_correo, $valor, $colaborador);
}
