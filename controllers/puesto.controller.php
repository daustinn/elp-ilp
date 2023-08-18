<?php
include '../services/puesto.service.php';

//SI ELMETODO ES POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
<<<<<<< HEAD
    $nombre = $_POST["nombre"];
   //  registrarusuario($nombre);
=======
    $puesto = $_POST["puesto"];
    $tipo_puesto = $_POST["tipo_puesto"];
    //  registrarusuario($puesto, $tipo_puesto);
>>>>>>> 561d7a8a3ea516e12b0af64b939d31f0152894d0
}

//SI ELMETODO ES PUT
if ($_SERVER["REQUEST_METHOD"] == "PUT") {
<<<<<<< HEAD
    $id= $_PUT["id"];
    $nombre = $_PUT["nombre"];
   //  actualizarpuesto($id, $nombre);
=======
    $id = $_PUT["id"];
    $puesto = $_PUT["puesto"];
    $tipo_puesto = $_PUT["tipo_puesto"];
    //  actualizarpuesto($id, $puesto, $tipo_puesto);
>>>>>>> 561d7a8a3ea516e12b0af64b939d31f0152894d0
}
