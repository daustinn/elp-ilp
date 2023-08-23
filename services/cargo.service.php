<?php

function getCargos()
{
    $conexion = connectToDatabase();
    if ($conexion) {
        $query = "SELECT * FROM cargo";
        $result = $conexion->query($query);
        if ($result && $result->num_rows > 0) {
            $cargo = array();
            while ($row = $result->fetch_assoc()) {
                $cargo[] = $row;
            }
            $conexion->close();
            return $cargo;
        }
        $conexion->close();
    }
    return false;
}
