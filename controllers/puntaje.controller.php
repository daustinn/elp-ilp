<?php
include '../services/puntaje.service.php';

//SI ELMETODO ES POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fecha_inicio = $_POST["fecha_inicio"];
    $fecha_fin = $_POST["fecha_fin"];
    $estado = $_POST["estado"];
    $valor = $_POST["valor"];
    $valor_inicial = $_POST["valor_inicial"];
    $objetivo = $_POST["objetivo"];
   //  registrarpuntaje($fecha_inicio, $fecha_fin, $estado, $valor, $valor_inicial, $objetivo);
}

//SI ELMETODO ES PUT
if ($_SERVER["REQUEST_METHOD"] == "PUT") {
    $id= $_PUT["id"];
    $fecha_inicio = $_PUT["fecha_inicio"];
    $fecha_fin = $_PUT["fecha_fin"];
    $estado = $_PUT["estado"];
    $valor = $_PUT["valor"];
    $valor_inicial = $_PUT["valor_inicial"];
    $objetivo = $_PUT["objetivo"];
   //  actualizarpuntaje($id, $fecha_inicio, $fecha_fin, $estado, $valor, $valor_inicial, $objetivo);
}
