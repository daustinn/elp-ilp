<?php
function registrarCargo($nombre)
{
    $conexion = connectToDatabase();
    if (!$conexion) {
        die("Error al conectar con la base de datos: " . mysqli_connect_error());
    }
    // Escapar el valor del lugar para evitar inyección de SQL
    $nombre = mysqli_real_escape_string($conexion, $nombre);
    $consulta = "INSERT INTO cargo (nombre) VALUES ('$nombre')";

    // Ejecutar la consulta
    if (mysqli_query($conexion, $consulta)) {
        echo "Cargo registrado correctamente.";
    } else {
        echo "Error al registrar el cargo: " . mysqli_error($conexion);
    }
    header('Location: ../cargo.php');
    // Cerrar la conexión a la base de datos
    $conexion->close();
}


function obtenerCargo()
{
    $conexion = connectToDatabase();
    if ($conexion) {
        $query = "SELECT * FROM cargo";
        $result = $conexion->query($query);
        if ($result && $result->num_rows > 0) {
            $cargo = array();
            while ($row = $result->fetch_assoc()) {
                $cargo[] = $row;
            }
            $conexion->close();
            return $cargo;
        }
        $conexion->close();
    }
    return false;
}
