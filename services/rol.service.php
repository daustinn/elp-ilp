<?php

function getRoles()
{
    $conexion = connectToDatabase();
    //QUERY SQL
    $query =  "SELECT * FROM rol";

    if ($conexion) {
        $result = $conexion->query($query);
        if ($result && $result->num_rows > 0) {
            $rol = array();
            while ($row = $result->fetch_assoc()) {
                $rol[] = $row;
            }
            $conexion->close();
            return $rol;
        }
        $conexion->close();
    }
    return false;
}
