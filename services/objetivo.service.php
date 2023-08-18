<?php


function obtenerObjetivo()
{
    $conexion = connectToDatabase();
    if ($conexion) {
        $query = "SELECT * FROM objetivo";
        $result = $conexion->query($query);
        if ($result && $result->num_rows > 0) {
            $objetivo = array();
            while ($row = $result->fetch_assoc()) {
                $objetivo[] = $row;
            }
            $conexion->close();
            return $objetivo;
        }
        $conexion->close();
    }
    return false;
}
