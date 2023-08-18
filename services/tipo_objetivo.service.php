<?php
function registrarTipo_objetivo($nombre, $descripcion)
{
    $conexion = connectToDatabase();
    if (!$conexion) {
        die("Error al conectar con la base de datos: " . mysqli_connect_error());
    }
    // Escapar el valor del lugar para evitar inyección de SQL
    $nombre = mysqli_real_escape_string($nombre, $descripcion);
    $consulta = "INSERT INTO tipo_objetivo (nombre, descripcion) VALUES ('$nombre, $descripcion')";

    // Ejecutar la consulta
    if (mysqli_query($conexion, $consulta)) {
        echo "Tipo objetivo registrado correctamente.";
    } else {
        echo "Error al registrar Tipo objetivo: " . mysqli_error($conexion);
    }
    header('Location: ../tipo_objetivo.php');
    // Cerrar la conexión a la base de datos
    $conexion->close();
}


function obtenerTipo_objetivo()
{
    $conexion = connectToDatabase();
    if ($conexion) {
        $query = "SELECT * FROM tipo_objetivo";
        $result = $conexion->query($query);
        if ($result && $result->num_rows > 0) {
            $tipo_objetivo = array();
            while ($row = $result->fetch_assoc()) {
                $tipo_objetivo[] = $row;
            }
            $conexion->close();
            return $tipo_objetivo;
        }
        $conexion->close();
    }
    return false;
}
