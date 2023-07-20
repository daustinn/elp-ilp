<?php
include '../services/area.service.php';

//SI ELMETODO ES POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lugar = $_POST["nombre"];
    registrarSede($lugar);
}

//SI ELMETODO ES PUT
if ($_SERVER["REQUEST_METHOD"] == "PUT") {
    $id = $_PUT["id"];
    $lugar = $_PUT["lugar"];
    // Update function
}
