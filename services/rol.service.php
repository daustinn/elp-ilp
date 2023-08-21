<?php
require_once('modelo/conexion.php');


function getRoles()
{
    $conexion = connectToDatabase();
    if ($conexion) {
        $query = "SELECT * FROM rol";
        $result = $conexion->query($query);
        if ($result && $result->num_rows > 0) {
            $rol = array();
            while ($row = $result->fetch_assoc()) {
                $rol[] = $row;
            }
            $conexion->close();
            return $rol;
        }
        $conexion->close();
    }
    return false;
}
