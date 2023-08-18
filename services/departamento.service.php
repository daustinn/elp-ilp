<?php
function registrarDepartamento($nombre)
{
    $conexion = connectToDatabase();
    if (!$conexion) {
        die("Error al conectar con la base de datos: " . mysqli_connect_error());
    }
    // Escapar el valor del lugar para evitar inyección de SQL
    $nombre = mysqli_real_escape_string($conexion,$nombre);
    $consulta = "INSERT INTO departamento (nombre) VALUES (' $nombre')";

    // Ejecutar la consulta
    if (mysqli_query($conexion, $consulta)) {
        echo "Departamento registrado correctamente.";
    } else {
        echo "Error al registrar el Departamento: " . mysqli_error($conexion);
    }
    header('Location: ../departamento.php');
    // Cerrar la conexión a la base de datos
    $conexion->close();
}


function obtenerDepartamento()
{
    $conexion = connectToDatabase();
    if ($conexion) {
        $query = "SELECT * FROM departamento";
        $result = $conexion->query($query);
        if ($result && $result->num_rows > 0) {
            $departamento = array();
            while ($row = $result->fetch_assoc()) {
                $departamento[] = $row;
            }
            $conexion->close();
            return $departamento;
        }
        $conexion->close();
    }
    return false;
}
