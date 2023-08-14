<?php
include '../services/evaluacion.service.php';

//SI ELMETODO ES POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fecha = $_POST["fecha"];
    $evaluador = $_POST["evaluador"];
    $puntaje = $_POST["puntaje"];
   //  registrarevaluacion($fecha, $evaluador, $puntaje);
}

//SI ELMETODO ES PUT
if ($_SERVER["REQUEST_METHOD"] == "PUT") {
    $id= $_PUT["id"];
    $fecha = $_PUT["fecha"];
    $evaluador = $_PUTT["evaluador"];
    $puntaje = $_PUT["puntaje"];
   //  actualizarevaluacion($id, $fecha, $evaluador, $puntaje);
}
