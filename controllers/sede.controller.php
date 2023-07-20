<?php
include '../services/sede.service.php';

//SI ELMETODO ES POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lugar = $_POST["lugar"];
   //  registrarsede($lugar);
}

//SI ELMETODO ES PUT
if ($_SERVER["REQUEST_METHOD"] == "PUT") {
    $id= $_PUT["id"];
    $lugar = $_PUT["usuario"];
   //  actualizarsede( $id, $lugar);
}
