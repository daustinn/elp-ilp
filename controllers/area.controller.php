<?php
include '../services/area.service.php';

//SI ELMETODO ES POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $area = $_POST["nombre"];
    //  registrarsede($lugar);
}

//SI ELMETODO ES PUT
if ($_SERVER["REQUEST_METHOD"] == "PUT") {
    $id = $_PUT["id"];
    $area = $_PUT["nombre"];
    //  actualizarsede( $id, $lugar);
}


