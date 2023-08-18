<?php
include '../services/objetivo.service.php';

//SI ELMETODO ES POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $porcentaje = $_POST["porcentaje"];
    $indicadores_logros = $_POST["indicadores_logros"];
    $colaborador = $_POST["colaborador"];
    $tipo_objetivo = $_POST["tipo_objetivo"];
    $objetivo_detalles = $_POST["objetivo_detalles"];
   //  registrarobjetivo($nombre, $descripcion, $porcentaje, $indicadores_logros, $colaborador, $tipo_objetivo, $objetivo_detalles);
}

//SI ELMETODO ES PUT
if ($_SERVER["REQUEST_METHOD"] == "PUT") {
    $id = $_PUT["id"];
    $nombre = $_PUT["nombre"];
    $descripcion = $_PUT["descripcion"];
    $porcentaje = $_PUT["porcentaje"];
    $indicadores_logros = $_PUT["indicadores_logros"];
    $colaborador = $_PUT["colaborador"];
    $tipo_objetivo = $_PUT["tipo_objetivo"];
    $objetivo_detalles = $_PUT["objetivo_detalles"];
   //  actualizarobjetivo($nombre, $descripcion, $porcentaje, $indicadores_logros, $colaborador, $tipo_objetivo, $objetivo_detalles);
}
