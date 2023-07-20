<?php
/**
 * Consulta y obtiene la lista de puntaje .
 *
 * @return array|false Array con los datos del puntaje o false en caso de error.
 */

include 'modelo/conexion.php';
function obtenerListaPuntaje()
{
    $conexion = connectToDatabase();
    if ($conexion) {
        $query = "SELECT * FROM puntaje";
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