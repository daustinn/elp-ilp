<?php
require_once('modelo/conexion.php');

// FUNCION DE OBTENER TODOS LOS DATOS
function getTipo_objetivos()
{
    $conexion = connectToDatabase();
    if ($conexion) {
        $query = "SELECT * FROM tipo_objetivo ORDER BY created_at desc";
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

// FUNCION DE OBTENER UN SOLO DATO POR ID
function getTipoObjetivoById($id)
{
    $conexion = connectToDatabase();
    if ($conexion) {
        $query = "SELECT * FROM tipo_objetivo WHERE id = '$id'"; // Cambio en la consulta SQL
        $result = $conexion->query($query);
        if ($result && $result->num_rows > 0) {
            $tipo_objetivo = $result->fetch_assoc(); // Obtén el primer registro
            $conexion->close();
            return $tipo_objetivo;
        }
        $conexion->close();
    }
    return false;
}
