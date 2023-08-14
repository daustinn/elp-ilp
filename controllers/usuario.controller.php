<?php
include '../services/usuario.service.php';

//SI ELMETODO ES POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];
    $rol = $_POST["rol"];
   //  registrarusuario($usuario, $contraseña, $rol);
}

//SI ELMETODO ES PUT
if ($_SERVER["REQUEST_METHOD"] == "PUT") {
    $id= $_PUT["id"];
    $usuario = $_PUT["usuario"];
    $contraseña = $_PUT["contraseña"];
    $rol = $_PUT["rol"];
   //  actualizarusuario( $id, $usuario, $contraseña, $rol);
}
