<?php
/**
 * Consulta y obtiene la lista de tipo_objetivo.
 *
 * @return array|false Array con los datos de las sedes en caso de error.
 */

include 'modelo/conexion.php';
function obtenerListaTipo_objetivo()
{
    $conexion = connectToDatabase();
    if ($conexion) {
        $query = "SELECT * FROM tipo_objetivo";
        $result = $conexion->query($query);
        if ($result && $result->num_rows > 0) {
            $tipo_objetivos = array();
            while ($row = $result->fetch_assoc()) {
                $tipo_objetivos[] = $row;
            }
            $conexion->close();
            return $tipo_objetivos;
        }
        $conexion->close();
    }
    return false;
}