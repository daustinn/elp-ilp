<?php
include '../services/tipo-objetivo.service.php';

//SI ELMETODO ES POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    //  registrartipo-objtivo($nombre, $descripcion);
}

//SI ELMETODO ES PUT
if ($_SERVER["REQUEST_METHOD"] == "PUT") {
    $id = $_PUT["id"];
    $nombre = $_PUT["nombre"];
    $descripcion = $_PUT["descripcion"];
    //  actualizartipo-objetivo( $id, $nombre, $descripcion,);
}
