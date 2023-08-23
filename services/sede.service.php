<?php
require_once('modelo/conexion.php');

//FUNCION DE OBTENER DATOS
function getSedes()
{
    $conexion = connectToDatabase();
    if ($conexion) {
        $query = "SELECT * FROM sede ORDER BY created_at desc";
        $result = $conexion->query($query);
        if ($result && $result->num_rows > 0) {
            $sedes = array();
            while ($row = $result->fetch_assoc()) {
                $sedes[] = $row;
            }
            $conexion->close();
            return $sedes;
        }
        $conexion->close();
    }
    return false;
}
//FUNCION DE OBTENER UN SOLO DATO POR ID
function getSedesById($id)
{
    $conexion = connectToDatabase();
    if ($conexion) {
        $query = "SELECT * FROM sede WHERE id = '$id'"; // Cambio en la consulta SQL
        $result = $conexion->query($query);
        if ($result && $result->num_rows > 0) {
            $sedes = $result->fetch_assoc(); // Obtén el primer registro
            $conexion->close();
            return $sedes;
        }
        $conexion->close();
    }
    return false;
}
