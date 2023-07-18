<?php
/**
 * Consulta y obtiene la lista de area.
 *
 * @return array|false Array con los datos de las areas o false en caso de error.
 */

include 'modelo/conexion.php';
function obtenerListaAarea()
{
    $conexion = connectToDatabase();
    if ($conexion) {
        $query = "SELECT * FROM area";
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
