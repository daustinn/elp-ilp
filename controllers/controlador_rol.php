<?php
/**
 * Consulta y obtiene la lista de rol .
 *
 * @return array|false Array con los datos del rol o false en caso de error.
 */

include 'modelo/conexion.php';
function obtenerListaRol()
{
    $conexion = connectToDatabase();
    if ($conexion) {
        $query = "SELECT * FROM rol";
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