<?php
/**
 * Consulta y obtiene la lista de puesto.
 *
 * @return array|false Array con los datos del puesto o false en caso de error.
 */

include 'modelo/conexion.php';
function obtenerListaPuesto()
{
    $conexion = connectToDatabase();
    if ($conexion) {
        $query = "SELECT * FROM puesto";
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
