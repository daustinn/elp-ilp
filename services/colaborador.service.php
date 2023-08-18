<?php

function obtenerColaborador()
{
    $conexion = connectToDatabase();
    if ($conexion) {
        $query = "SELECT * FROM colaborador";
        $result = $conexion->query($query);
        if ($result && $result->num_rows > 0) {
            $colaborador = array();
            while ($row = $result->fetch_assoc()) {
                $colaborador[] = $row;
            }
            $conexion->close();
            return $colaborador;
        }
        $conexion->close();
    }
    return false;
}
