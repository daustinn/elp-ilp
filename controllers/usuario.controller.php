<?php

require_once('../modelo/conexion.php');
session_start();

// Variable para almacenar el mensaje de alerta
$alertMessage = "";


//SI ELMETODO ES POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];
    $rol = $_POST["rol"];
    $result = createUser($usuario, $contraseña, $rol);
    if ($result === true) {
        $_SESSION['alert_type'] = 'success';
        $_SESSION['alert_message'] = "Usuario <strong>$usuario</strong> creado exitosamente.";
    } else {
        $_SESSION['alert_type'] = 'danger';
        $_SESSION['alert_message'] = $result;
    }
    header('Location: ../usuarios.php');
}

// SI EL MÉTODO ES DELETE
if ($_SERVER["REQUEST_METHOD"] == "DELETE") {
    $userId = $_REQUEST["id"];
    $result = changeUserStatus($userId);
}

function createUser($usuario, $contraseña, $rol)
{
    // Conectar a la base de datos
    $conexion = connectToDatabase();

    // Verificar si el usuario ya existe por su correo
    $query_check = "SELECT id FROM usuario WHERE usuario = '$usuario'";
    $result_check = $conexion->query($query_check);

    if ($result_check->num_rows > 0) {
        // Usuario ya existe, retornar un mensaje de error
        return "Ya existe un usuario con el correo <strong>$usuario</strong>.";
    } else {
        // Usuario no existe, proceder con la inserción
        $query_insert = "INSERT INTO usuario (usuario, contraseña, idrol) VALUES ('$usuario', '$contraseña', '$rol')";
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

function changeUserStatus($userId)
{
    echo $userId;

    // Conectar a la base de datos
    $conexion = connectToDatabase();

    // Consulta preparada para cambiar el estado
    $sql = "UPDATE usuario SET status = CASE WHEN status = 1 THEN 0 ELSE 1 END WHERE id = ?";

    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("i", $userId); // Corregido aquí

    if ($stmt->execute()) {
        echo "Estado del usuario actualizado correctamente";
    } else {
        echo "Error al actualizar el estado del usuario: " . $stmt->error;
    }

    // Cerrar el statement y la conexión
    $stmt->close();
    $conexion->close();
}
