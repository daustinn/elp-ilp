<?php
require_once('modelo/conexion.php');


function getRoles()
{
    $conexion = connectToDatabase();
    if ($conexion) {
        $query = "SELECT * FROM rol ORDER BY created_at desc";
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

function getRolById($id)
{
    $conexion = connectToDatabase();
    if ($conexion) {
        $query = "SELECT * FROM rol WHERE id = '$id'"; // Cambio en la consulta SQL
        $result = $conexion->query($query);
        if ($result && $result->num_rows > 0) {
            $rol = $result->fetch_assoc(); // Obtén el primer registro
            $conexion->close();
            return $rol;
        }
        $conexion->close();
    }
    return false;
}
