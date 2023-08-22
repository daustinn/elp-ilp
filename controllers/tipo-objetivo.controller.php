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
        $result = updateTipoObjetivo($id, $nombre, $descripcion);
        if ($result === true) {
            $_SESSION['alert_type'] = 'success';
            $_SESSION['alert_message'] = "Tipo de objetivo <strong>$nombre</strong> actualizado correctamente.";
        } else {
            $_SESSION['alert_type'] = 'danger';
            $_SESSION['alert_message'] = $result;
        }
        header('Location: ../tipo-objetivos.php');
    }
    //POST 
    else {
        $nombre = $_POST["nombre"];
        $descripcion = $_POST["descripcion"];
        $result = createTipoObjetivo($nombre, $descripcion);
        if ($result === true) {
            $_SESSION['alert_type'] = 'success';
            $_SESSION['alert_message'] = "Tipo de objetivo <strong>$nombre</strong> creado exitosamente.";
        } else {
            $_SESSION['alert_type'] = 'danger';
            $_SESSION['alert_message'] = $result;
        }
        header('Location: ../tipo-objetivos.php');
    }
}

function createTipoObjetivo($nombre, $descripcion)
{
    // Conectar a la base de datos
    $conexion = connectToDatabase();

    // Verificar si el Tipo objetivo ya existe por su nombre
    $query_check = "SELECT id FROM tipo_objetivo WHERE nombre = '$nombre'";
    $result_check = $conexion->query($query_check);

    if ($result_check->num_rows > 0) {
        // Tipo objetivo ya existe, retornar un mensaje de error
        return "Ya existe un tipo con el nombre <strong>$nombre</strong>.";
    } else {
        // Tipo objetivo no existe, proceder con la inserción
        $query_insert = "INSERT INTO tipo_objetivo (nombre, descripcion) VALUES ('$nombre', '$descripcion')";
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

function updateTipoObjetivo($id, $nuevoNombre, $nuevaDescripcion)
{
    // Conectar a la base de datos
    $conexion = connectToDatabase();

    // Verificar si el Tipo objetivo ya existe por su ID
    $query_check = "SELECT id FROM tipo_objetivo WHERE id = '$id'";
    $result_check = $conexion->query($query_check);

    if ($result_check->num_rows === 0) {
        // Tipo objetivo no existe, retornar un mensaje de error
        return "El Tipo de objetivo con el ID <strong>$id</strong> no existe.";
    } else {
        // Tipo objetivo existe, proceder con la actualización
        $query_update = "UPDATE tipo_objetivo SET nombre = '$nuevoNombre', descripcion = '$nuevaDescripcion' WHERE id = '$id'";
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
