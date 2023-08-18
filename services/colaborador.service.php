<?php
function registrarColaborador($dni, $nombres, $apellidos, $idusuario, $idcargo, $idsede, $idpuesto, $idarea, $iddepartamento, $idsupervisor)
{
    $conexion = connectToDatabase();
    if (!$conexion) {
        die("Error al conectar con la base de datos: " . mysqli_connect_error());
    }
    // Escapar el valor del lugar para evitar inyección de SQL
    $nombres = mysqli_real_escape_string($conexion, $dni, $nombres, $apellidos, $idusuario, $idcargo, $idsede, $idpuesto, $idarea, $iddepartamento, $idsupervisor);
    $consulta = "INSERT INTO colaborador (dni, nombres, apellidos, idusuario, idcargo, idsede, idpuesto,idarea,iddepartamento,idsupervisor) VALUES ('$dni, $nombres, $apellidos, $idusuario, $idcargo, $idsede, $idpuesto, $idarea, $iddepartamento, $idsupervisor')";

    // Ejecutar la consulta
    if (mysqli_query($conexion, $consulta)) {
        echo "Colaborador registrado correctamente.";
    } else {
        echo "Error al registrar al Colaborador: " . mysqli_error($conexion);
    }
    header('Location: ../colaborador.php');
    // Cerrar la conexión a la base de datos
    $conexion->close();
}


function obtenerColaborador()
{
    $conexion = connectToDatabase();
    if ($conexion) {
        $query = "SELECT * FROM colaborador";
        $result = $conexion->query($query);
        if ($result && $result->num_rows > 0) {
            $colaborador = array();
            while ($row = $result->fetch_assoc()) {
                $colaborador[] = $row;
            }
            $conexion->close();
            return $colaborador;
        }
        $conexion->close();
    }
    return false;
}
