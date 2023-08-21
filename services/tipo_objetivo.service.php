<?php
require_once('modelo/conexion.php');

function GetTipo_objetivos()
{
    $conexion = connectToDatabase();
    if ($conexion) {
        $query = "SELECT * FROM tipo_objetivo";
        $result = $conexion->query($query);
        if ($result && $result->num_rows > 0) {
            $tipo_objetivo = array();
            while ($row = $result->fetch_assoc()) {
                $tipo_objetivo[] = $row;
            }
            $conexion->close();
            return $tipo_objetivo;
        }
        $conexion->close();
    }
    return false;
}
