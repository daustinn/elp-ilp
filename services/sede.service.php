<?php
require_once('modelo/conexion.php');



function getSedes()
{
    $conexion = connectToDatabase();
    if ($conexion) {
        $query = "SELECT * FROM sede";
        $result = $conexion->query($query);
        if ($result && $result->num_rows > 0) {
            $sede = array();
            while ($row = $result->fetch_assoc()) {
                $sede[] = $row;
            }
            $conexion->close();
            return $sede;
        }
        $conexion->close();
    }
    return false;
}
