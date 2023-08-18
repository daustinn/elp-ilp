<?php
function registrarArea($nombre)
{
    $conexion = connectToDatabase();
    if (!$conexion) {
        die("Error al conectar con la base de datos: " . mysqli_connect_error());
    }
    // Escapar el valor del lugar para evitar inyección de SQL
    $nombre = mysqli_real_escape_string($conexion, $nombre);
    $consulta = "INSERT INTO area (nombre) VALUES ('$nombre')";

    // Ejecutar la consulta
    if (mysqli_query($conexion, $consulta)) {
        echo "Area registrada correctamente.";
    } else {
        echo "Error al registrar el area: " . mysqli_error($conexion);
    }
    header('Location: ../area.php');
    // Cerrar la conexión a la base de datos
    $conexion->close();
}


function obtenerArea()
{
    $conexion = connectToDatabase();
    if ($conexion) {
        $query = "SELECT * FROM area";
        $result = $conexion->query($query);
        if ($result && $result->num_rows > 0) {
            $area = array();
            while ($row = $result->fetch_assoc()) {
                $area[] = $row;
            }
            $conexion->close();
            return $area;
        }
        $conexion->close();
    }
    return false;
}
