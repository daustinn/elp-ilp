<?php



function  obtenerObjetivo_detalles()
{
    $conexion = connectToDatabase();
    if ($conexion) {
        $query = "SELECT * FROM objetivo_detalles";
        $result = $conexion->query($query);
        if ($result && $result->num_rows > 0) {
            $objetivo_detalles = array();
            while ($row = $result->fetch_assoc()) {
                $objetivo_detalles[] = $row;
            }
            $conexion->close();
            return $objetivo_detalles;
        }
        $conexion->close();
    }
    return false;
}
