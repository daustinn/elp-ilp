<?php


function obtenerDepartamento()
{
    $conexion = connectToDatabase();
    if ($conexion) {
        $query = "SELECT * FROM departamento";
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
