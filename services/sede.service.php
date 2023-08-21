<?php
<<<<<<< HEAD
require_once('modelo/conexion.php');


=======
>>>>>>> 42aca6e4213e54ac0fd7e5932b897faf1de89615

function getSedes()
{
    $conexion = connectToDatabase();
    if ($conexion) {
<<<<<<< HEAD
        $query = "SELECT * FROM sede";
        $result = $conexion->query($query);
        if ($result && $result->num_rows > 0) {
            $sede = array();
            while ($row = $result->fetch_assoc()) {
                $sede[] = $row;
            }
            $conexion->close();
            return $sede;
=======
        $query = "SELECT * FROM sedex   ";
        $result = $conexion->query($query);
        if ($result && $result->num_rows > 0) {
            $sedes = array();
            while ($row = $result->fetch_assoc()) {
                $sedes[] = $row;
            }
            $conexion->close();
            return $sedes;
>>>>>>> 42aca6e4213e54ac0fd7e5932b897faf1de89615
        }
        $conexion->close();
    }
    return false;
}
