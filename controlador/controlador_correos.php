<?php
/**
 * Consulta y obtiene la lista de correos.
 *
 * @return array|false Array con los datos de los correos o false en caso de error.
 */

include 'modelo/conexion.php';
function obtenerListaCorreos()
{
    $conexion = connectToDatabase();
    if ($conexion) {
        $query = "SELECT * FROM correos";
        $result = $conexion->query($query);
        if ($result && $result->num_rows > 0) {
            $correos = array();
            while ($row = $result->fetch_assoc()) {
                $correos[] = $row;
            }
            $conexion->close();
            return $correos;
        }
        $conexion->close();
    }
    return false;
}
