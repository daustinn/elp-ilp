<?php
/**
 * Consulta y obtiene la lista de sede.
 *
 * @return array|false Array con los datos de las sedes en caso de error.
 */

include 'modelo/conexion.php';
function obtenerListaSede()
{
    $conexion = connectToDatabase();
    if ($conexion) {
        $query = "SELECT * FROM sede";
        $result = $conexion->query($query);
        if ($result && $result->num_rows > 0) {
            $colaboradores = array();
            while ($row = $result->fetch_assoc()) {
                $colaboradores[] = $row;
            }
            $conexion->close();
            return $colaboradores;
        }
        $conexion->close();
    }
    return false;
}
