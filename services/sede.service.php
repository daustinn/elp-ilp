<?php
function registrarSede($lugar)
{
    $conexion = connectToDatabase();
    if (!$conexion) {
        die("Error al conectar con la base de datos: " . mysqli_connect_error());
    }
    // Escapar el valor del lugar para evitar inyección de SQL
    $lugar = mysqli_real_escape_string($conexion, $lugar);
    $consulta = "INSERT INTO sede (lugar) VALUES ('$lugar')";

    // Ejecutar la consulta
    if (mysqli_query($conexion, $consulta)) {
        echo "Sede registrada correctamente.";
    } else {
        echo "Error al registrar la sede: " . mysqli_error($conexion);
    }
    header('Location: ../sedes.php');
    // Cerrar la conexión a la base de datos
    $conexion->close();
}


function obtenerSedes()
{
    $conexion = connectToDatabase();
    if ($conexion) {
        $query = "SELECT * FROM sede";
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
