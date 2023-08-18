<?php
function registrarPuesto($nombre)
{
    $conexion = connectToDatabase();
    if (!$conexion) {
        die("Error al conectar con la base de datos: " . mysqli_connect_error());
    }
    // Escapar el valor del lugar para evitar inyección de SQL
    $nombre = mysqli_real_escape_string($conexion, $nombre);
    $consulta = "INSERT INTO puesto (nombre) VALUES ('$nombre')";

    // Ejecutar la consulta
    if (mysqli_query($conexion, $consulta)) {
        echo "Puesto registrado correctamente.";
    } else {
        echo "Error al registrar el puesto: " . mysqli_error($conexion);
    }
    header('Location: ../puesto.php');
    // Cerrar la conexión a la base de datos
    $conexion->close();
}


function obtenerPuesto()
{
    $conexion = connectToDatabase();
    if ($conexion) {
        $query = "SELECT * FROM puesto";
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
