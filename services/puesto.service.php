<?php


function obtenerPuesto()
{
    $conexion = connectToDatabase();
    if ($conexion) {
        $query = "SELECT * FROM puesto";
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
