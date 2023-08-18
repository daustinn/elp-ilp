<?php
include '../services/departamento.service.php';

//SI ELMETODO ES POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    //  registrardepartamento( $nombre);
}

//SI ELMETODO ES PUT
if ($_SERVER["REQUEST_METHOD"] == "PUT") {
    $id = $_PUT["id"];
    $nombre = $_PUT["nombre"];
    //  actualizarusuario( $id, $nombre);
}
