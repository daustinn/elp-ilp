<?php


require_once('../modelo/conexion.php');
session_start();

//SI ELMETODO ES POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dni = $_POST["dni"];
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $cargo = $_POST["idcargo"];
    $usuario = $_POST["idusuario"];
    $sede = $_POST["idsede"];
    $puesto = $_POST["idpuesto"];
    $area = $_POST["idarea"];
    $departamento = $_POST["iddepartamento"];
    $supervisor = $_POST["idsupervisor"];
    $result = createColaborador($dni, $nombres,  $apellidos, $usuario, $cargo,  $sede, $puesto, $area, $departamento, $supervisor);

    if ($result === true) {
        $_SESSION['alert_type'] = 'success';
        $_SESSION['alert_message'] = "Colaborador <strong>$nombres</strong> creado exitosamente.";
    } else {
        $_SESSION['alert_type'] = 'danger';
        $_SESSION['alert_message'] = $result;
    }
    header('Location: ../colaborador.php');
}




function createColaborador($dni, $nombres, $apellidos, $usuario, $cargo, $sede, $puesto, $area, $departamento, $supervisor)
{
    // Conectar a la base de datos
    $conexion = connectToDatabase();

    // Verificar si el colabordaor ya existe por su dni
    $query_check = "SELECT id FROM colaborador WHERE dni = '$dni'";
    $result_check = $conexion->query($query_check);

    if ($result_check->num_rows > 0) {
        // Usuario ya existe, retornar un mensaje de error
        return "Ya existe un colaborador con el dni <strong>$dni</strong>.";
    } else {
        // Usuario no existe, proceder con la inserción
        $query_insert = "INSERT INTO `colaborador` (`dni`, `nombres`, `apellidos`, `idusuario`, `idcargo`, `idsede`, `idpuesto`, `idarea`, `iddepartamento`, `idsupervisor`) VALUES
        ('$dni', '$nombres', '$apellidos', $usuario, $cargo, $sede, $puesto, $area, $departamento, $supervisor)";

        if ($conexion) {
            // Ejecutar la consulta
            if ($conexion->query($query_insert) === TRUE) {
                return true; // Indicar éxito
            } else {
                return false; // Indicar error
            }
            // Cerrar la conexión
            $conexion->close();
        }
    }
}


function updateColaborador($id, $nuevoDni, $nuevaNombres ,$nuevaApellidos, $nuevaIdusuario , $nuevaIdcargo , $nuevaIDsede , $nuevaIdpuesto , $nuevaIdarea , $nuevaIddepartamento,$nuevaIdsupervisor )
{
    // Conectar a la base de datos
    $conexion = connectToDatabase();

    // Verificar si el colaborador ya existe por su ID
    $query_check = "SELECT id FROM colaborador WHERE id = '$id'";
    $result_check = $conexion->query($query_check);

    if ($result_check->num_rows === 0) {
        // colaborador no existe, retornar un mensaje de error
        return "El colaborador con el ID <strong>$id</strong> no existe.";
    } else {
        // Rol existe, proceder con la actualización
        $query_update = "UPDATE colaborador SET dni = '$nuevoDni',  nombre = ' $nuevaNombres',apellidos = ' $nuevaApellidos', idusuario = ' $nuevaIdusuario', idcargo = ' $nuevaIdcargo ', idsede = ' $nuevaIDsede', idpuesto = '$nuevaIdpuesto ', idarea = '$nuevaIdarea ', iddepartameto = ' $nuevaIddepartamento' idsupervisor= ' $nuevaIdsupervisor' WHERE id = '$id'";
        if ($conexion) {
            // Ejecutar la consulta
            if ($conexion->query($query_update) === TRUE) {
                return true; // Indicar éxito
            } else {
                return false; // Indicar error
            }
            // Cerrar la conexión
            $conexion->close();
        }
    }
}

