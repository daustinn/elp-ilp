<?php
/**
 * Consulta y obtiene la lista de usuario.
 *
 * @return array|false Array con los datos de los colaboradores o false en caso de error.
 */

include 'modelo/conexion.php';
function obtenerListaUsuario()
{
    $conexion = connectToDatabase();
    if ($conexion) {
        $query = "SELECT * FROM usuario";
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
