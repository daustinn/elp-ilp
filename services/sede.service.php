<?php
require_once('modelo/conexion.php');



function getSedes()
{
    $conexion = connectToDatabase();
    if ($conexion) {
        $query = "SELECT * FROM sedes";
        $result = $conexion->query($query);
        if ($result && $result->num_rows > 0) {
            $sedes = array();
            while ($row = $result->fetch_assoc()) {
                $sedes[] = $row;
            }
            $conexion->close();
            return $sedes;
        }
        $conexion->close();
    }
    return false;
}
