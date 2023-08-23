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
        $lugar = $_POST["lugar"];
        // Realizar la actualización usando la función actualizarrol()
        $result = updateSedes($id, $lugar );
        if ($result === true) {
            $_SESSION['alert_type'] = 'success';
            $_SESSION['alert_message'] = "Sede <strong>$lugar</strong> actualizado correctamente.";
        } else {
            $_SESSION['alert_type'] = 'danger';
            $_SESSION['alert_message'] = $result;
        }
        header('Location: ../sedes.php');
    }
    //POST 
    else {
        $lugar = $_POST["lugar"];
       

        $result = createSedes($lugar);
        if ($result === true) {
            $_SESSION['alert_type'] = 'success';
            $_SESSION['alert_message'] = "Sede <strong>$lugar</strong> creado exitosamente.";
        } else {
            $_SESSION['alert_type'] = 'danger';
            $_SESSION['alert_message'] = $result;
        }
        header('Location: ../sedes.php');
    }
}

function createSedes($lugar)
{
    // Conectar a la base de datos
    $conexion = connectToDatabase();

    // Verificar si el rol ya existe por su nombre
    $query_check = "SELECT id FROM sede WHERE lugar = '$lugar'";
    $result_check = $conexion->query($query_check);

    if ($result_check->num_rows > 0) {
        // Sede ya existe, retornar un mensaje de error
        return "Ya existe una sede con el nombre <strong>$lugar</strong>.";
    } else {
        // Sede no existe, proceder con la inserción
        $query_insert = "INSERT INTO sede (lugar) VALUES ('$lugar')";
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
//cambio de variable nuevolugar a lugar
function updateSedes($id, $nuevolugar)
{
    // Conectar a la base de datos
    $conexion = connectToDatabase();

    // Verificar si el rol ya existe por su ID
    $query_check = "SELECT id FROM sede WHERE id = '$id'";
    $result_check = $conexion->query($query_check);

    if ($result_check->num_rows === 0) {
        // Sede no existe, retornar un mensaje de error
        return "La sede con el ID <strong>$id</strong> no existe.";
    } else {
        // Sede existe, proceder con la actualización
        $query_update = "UPDATE sede SET lugar = '$nuevolugar',  WHERE id = '$id'";
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
