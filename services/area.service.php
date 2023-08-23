<?php
require_once('modelo/conexion.php');


function getArea()
{
    $conexion = connectToDatabase();
    if ($conexion) {
        $query = "SELECT * FROM area ORDER BY created_at desc";
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

function getAreaById($id)
{
    $conexion = connectToDatabase();
    if ($conexion) {
        $query = "SELECT * FROM area WHERE id = '$id'"; // Cambio en la consulta SQL
        $result = $conexion->query($query);
        if ($result && $result->num_rows > 0) {
            $area = $result->fetch_assoc(); // Obtén el primer registro
            $conexion->close();
            return $area;
        }
        $conexion->close();
    }
    return false;
}
