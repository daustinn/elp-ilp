<?php
include '../services/objetivo_detalles.service.php';

//SI ELMETODO ES POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $estado_eva1 = $_POST["estado_eva1"];
    $estado_eva2 = $_POST["estado_eva2"];
    $puntaje_inicial1 = $_POST["puntaje_inicial1"];
    $puntaje_inicial2 = $_POST["puntaje_inicial2"];
    $puntaje1 = $_POST["puntaje1"];
    $puntaje2 = $_POST["puntaje2"];
    $fecha_registro = $_POST["fecha_registro"];
    $fecha_finalizacion = $_POST["fecha_finalizacion"];
    $fecha_vencimiento = $_POST["fecha_vencimiento"];
    $fecha_modificacion = $_POST["fecha_modificacion"];
   //  registrarobjetivo_detalles($estado_eva1, $,estado_eva2, $puntaje_inicial1, $puntaje_inicial2, $puntaje1, $puntaje2, $fecha_registro, $fecha_finalizacion, $fecha_vencimiento, $fecha_modificacion);
}

//SI ELMETODO ES PUT
if ($_SERVER["REQUEST_METHOD"] == "PUT") {
    $id = $_PUT["id"];
    $estado_eva1 = $_PUT["estado_eva1"];
    $estado_eva2 = $_PUT["estado_eva2"];
    $puntaje_inicial1 = $_PUT["puntaje_inicial1"];
    $puntaje_inicial2 = $_PUT["puntaje_inicial2"];
    $puntaje1 = $_PUT["puntaje1"];
    $puntaje2 = $_PUT["puntaje2"];
    $fecha_registro = $_PUT["fecha_registro"];
    $fecha_finalizacion = $_PUT["fecha_finalizacion"];
    $fecha_vencimiento = $_PUT["fecha_vencimiento"];
    $fecha_modificacion = $_PUT["fecha_modificacion"];
   //  actualizarobjetivo_detalles( $id, $estado_eva1, $,estado_eva2, $puntaje_inicial1, $puntaje_inicial2, $puntaje1, $puntaje2, $fecha_registro, $fecha_finalizacion, $fecha_vencimiento, $fecha_modificacion);
}
