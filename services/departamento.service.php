<?php
require_once('modelo/conexion.php');


function getDepartamento()
{
    $conexion = connectToDatabase();
    if ($conexion) {
        $query = "SELECT * FROM departamento ORDER BY created_at desc";
        $result = $conexion->query($query);
        if ($result && $result->num_rows > 0) {
            $departamento = array();
            while ($row = $result->fetch_assoc()) {
                $departamento[] = $row;
            }
            $conexion->close();
            return $departamento;
        }
        $conexion->close();
    }
    return false;
}

function getDepartamentoById($id)
{
    $conexion = connectToDatabase();
    if ($conexion) {
        $query = "SELECT * FROM departamento WHERE id = '$id'"; // Cambio en la consulta SQL
        $result = $conexion->query($query);
        if ($result && $result->num_rows > 0) {
            $departamento = $result->fetch_assoc(); // Obtén el primer registro
            $conexion->close();
            return $departamento;
        }
        $conexion->close();
    }
    return false;
}
