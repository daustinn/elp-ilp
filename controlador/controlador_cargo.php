<?php
/**
 * Consulta y obtiene la lista de cargo.
 *
 * @return array|false Array con los datos de cargo o false en caso de error.
 */

include 'modelo/conexion.php';
function obtenerListaCargo()
{
    $conexion = connectToDatabase();
    if ($conexion) {
        $query = "SELECT * FROM cargo";
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

function modificarCargo()

{
    $conexion = connectToDatabase();
    if ($conexion) {
        $query = " UPDATE  cargo set nombre ='Nuevonombre' WHERE id= 1 ";
        $result = $conexion->query($query);
        if ($result && $result->num_rows > 0) {
            $colaboradores = array();
            while ($row = $result->fetch_assoc()) {
                $colaboradores[] = $row;
            }
            $conexion->close();
            return $colaboradores;
        }
        $conexion->close();x
    }
    return false;

}

function eliminarCargo()
{
    $conexion = connectToDatabase();
    if ($conexion) {
        $query = " UPDATE  FROM cargo WHERE id= 1 ";
        $result = $conexion->query($query);
        if ($result && $result->num_rows > 0) {
            $colaboradores = array();
            while ($row = $result->fetch_assoc()) {
                $colaboradores[] = $row;
            }
            $conexion->close();
            return $colaboradores;
        }
        $conexion->close();x
    }
    return false;

}