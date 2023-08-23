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
        $descripcion = $_POST["descripcion"];
        // Realizar la actualización usando la función actualizarrol()
        $result = updateRol($id, $nombre, $descripcion);
        if ($result === true) {
            $_SESSION['alert_type'] = 'success';
            $_SESSION['alert_message'] = "Rol <strong>$nombre</strong> actualizado correctamente.";
        } else {
            $_SESSION['alert_type'] = 'danger';
            $_SESSION['alert_message'] = $result;
        }
        header('Location: ../roles.php');
    }
    //POST 
    else {
        $nombre = $_POST["nombre"];
        $descripcion = $_POST["descripcion"];
        $result = createRol($nombre, $descripcion);
        if ($result === true) {
            $_SESSION['alert_type'] = 'success';
            $_SESSION['alert_message'] = "Rol <strong>$nombre</strong> creado exitosamente.";
        } else {
            $_SESSION['alert_type'] = 'danger';
            $_SESSION['alert_message'] = $result;
        }
        header('Location: ../roles.php');
    }
}

function createRol($nombre, $descripcion)
{
    // Conectar a la base de datos
    $conexion = connectToDatabase();

    // Verificar si el rol ya existe por su nombre
    $query_check = "SELECT id FROM rol WHERE nombre = '$nombre'";
    $result_check = $conexion->query($query_check);

    if ($result_check->num_rows > 0) {
        // Rol ya existe, retornar un mensaje de error
        return "Ya existe un rol con el nombre <strong>$nombre</strong>.";
    } else {
        // Rol no existe, proceder con la inserción
        $query_insert = "INSERT INTO rol (nombre, descripcion) VALUES ('$nombre', '$descripcion')";
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

function updateRol($id, $nuevoNombre, $nuevaDescripcion)
{
    // Conectar a la base de datos
    $conexion = connectToDatabase();

    // Verificar si el rol ya existe por su ID
    $query_check = "SELECT id FROM rol WHERE id = '$id'";
    $result_check = $conexion->query($query_check);

    if ($result_check->num_rows === 0) {
        // Rol no existe, retornar un mensaje de error
        return "El rol con el ID <strong>$id</strong> no existe.";
    } else {
        // Rol existe, proceder con la actualización
        $query_update = "UPDATE rol SET nombre = '$nuevoNombre', descripcion = '$nuevaDescripcion' WHERE id = '$id'";
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
