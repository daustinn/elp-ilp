<?php
/**
 * Consulta y obtiene la lista de Evaluacion .
 *
 * @return array|false Array con los datos de los evaluacion o false en caso de error.
 */

include 'modelo/conexion.php';
function obtenerListaEvaluacion()
{
    $conexion = connectToDatabase();
    if ($conexion) {
        $query = "SELECT * FROM evaluacion";
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
