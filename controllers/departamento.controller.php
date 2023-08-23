<?php
require_once('../modelo/conexion.php');
session_start();

// Variable para almacenar el mensaje de alerta
$alertMessage = "";

//SI ELMETODO ES POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //PUT
    if (isset($_POST["_method"]) && $_POST["_method"] === "PUT") {
        // Es una solicitud "PUT"
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];

        // Realizar la actualización usando la función actualizarrol()
        $result = updateDepartamento($id, $nombre);
        if ($result === true) {
            $_SESSION['alert_type'] = 'success';
            $_SESSION['alert_message'] = "Departamento <strong>$nombre</strong> actualizado correctamente.";
        } else {
            $_SESSION['alert_type'] = 'danger';
            $_SESSION['alert_message'] = $result;
        }
        header('Location: ../departamentos.php');
    }
    //POST 
    else {
        $nombre = $_POST["nombre"];

        $result = createDepartamento($nombre);
        if ($result === true) {
            $_SESSION['alert_type'] = 'success';
            $_SESSION['alert_message'] = "Departamento <strong>$nombre</strong> creado exitosamente.";
        } else {
            $_SESSION['alert_type'] = 'danger';
            $_SESSION['alert_message'] = $result;
        }
        header('Location: ../Departamentos.php');
    }
}

function createDepartamento($nombre)
{
    // Conectar a la base de datos
    $conexion = connectToDatabase();

    // Verificar si el rol ya existe por su nombre
    $query_check = "SELECT id FROM departamento WHERE nombre = '$nombre'";
    $result_check = $conexion->query($query_check);

    if ($result_check->num_rows > 0) {
        // Departamento ya existe, retornar un mensaje de error
        return "Ya existe un departmento con el nombre <strong>$nombre</strong>.";
    } else {
        // Departemento no existe, proceder con la inserción
        $query_insert = "INSERT INTO departamento (nombre) VALUES ('$nombre')";
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

function updateDepartamento($id, $nuevoNombre)
{
    // Conectar a la base de datos
    $conexion = connectToDatabase();

    // Verificar si el rol ya existe por su ID
    $query_check = "SELECT id FROM departamento WHERE id = '$id'";
    $result_check = $conexion->query($query_check);

    if ($result_check->num_rows === 0) {
        // Departamento no existe, retornar un mensaje de error
        return "El departamento con el ID <strong>$id</strong> no existe.";
    } else {
        // Departamento existe, proceder con la actualización
        $query_update = "UPDATE departamento SET nombre = '$nuevoNombre' WHERE id = '$id'";
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
