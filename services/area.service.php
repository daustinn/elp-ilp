<?php
require_once('modelo/conexion.php');



function getAreas()
{
    $conexion = connectToDatabase();
    if ($conexion) {
        $query = "SELECT * FROM area";
        $result = $conexion->query($query);
        if ($result && $result->num_rows > 0) {
            $area = array();
            while ($row = $result->fetch_assoc()) {
                $area[] = $row;
            }
            $conexion->close();
            return $area;
        }
        $conexion->close();
    }
    return false;
}
