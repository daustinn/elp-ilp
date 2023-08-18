<?php
function registrarObjetivo($nombre, $descripcion, $porcentaje, $indicadores_logros, $idcolaborador, $idtipo_objetivo, $idobjetivo_detalles)
{
    $conexion = connectToDatabase();
    if (!$conexion) {
        die("Error al conectar con la base de datos: " . mysqli_connect_error());
    }
    // Escapar el valor del lugar para evitar inyección de SQL
    $nombre = mysqli_real_escape_string($nombre, $descripcion, $porcentaje, $indicadores_logros, $idcolaborador, $idtipo_objetivo, $idobjetivo_detalles);
    $consulta = "INSERT INTO objetivo (nombre, descripcion, porcentaje, indicadores_logros, idcolaborador, idtipo_objetivo, idobjetivo_detalles) VALUES ('$nombre, $descripcion, $porcentaje, $indicadores_logros, $idcolaborador, $idtipo_objetivo, $idobjetivo_detalles')";

    // Ejecutar la consulta
    if (mysqli_query($conexion, $consulta)) {
        echo "Objetivo  registrado correctamente.";
    } else {
        echo "Error al registrar el objetivo : " . mysqli_error($conexion);
    }
    header('Location: ../objetivo.php');
    // Cerrar la conexión a la base de datos
    $conexion->close();
}


function obtenerObjetivo()
{
    $conexion = connectToDatabase();
    if ($conexion) {
        $query = "SELECT * FROM objetivo";
        $result = $conexion->query($query);
        if ($result && $result->num_rows > 0) {
            $objetivo = array();
            while ($row = $result->fetch_assoc()) {
                $objetivo[] = $row;
            }
            $conexion->close();
            return $objetivo;
        }
        $conexion->close();
    }
    return false;
}
