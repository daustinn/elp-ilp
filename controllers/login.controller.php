<?php

/**
 * Validates user credentials and initiates a session if login is successful.
 */
session_start();

/**
 * Handles the login form submission.
 *
 * This function retrieves the username and password submitted via the login form,
 * connects to the database, and validates the credentials. If the credentials are
 * valid, it initiates a session for the user.
 */
function handleLoginForm()
{

    if (isset($_POST['btningresar'])) {
        $usuario = $_POST['usuario'];
        $password = $_POST['contraseña'];
        $conexion = connectToDatabase();

        //QUERY SQL
        $query_sql = "SELECT 
                        colaborador.id as 'id_colab',
                        colaborador.nombre, 
                        colaborador.apellido,
                        usuario.id as 'id_usuario',
                        usuario.usuario,
                        rol.nombre as 'rol',
                        cargo.nombre as 'cargo',
                        sede.lugar as 'sede',
                        puesto.puesto,
                        puesto.tipo_puesto
                        FROM colaborador
                        INNER JOIN usuario ON colaborador.idusuario = usuario.id
                        INNER JOIN rol ON usuario.idrol = rol.id
                        INNER JOIN cargo ON colaborador.idcargo = cargo.id
                        INNER JOIN sede ON colaborador.idsede = sede.id
                        INNER JOIN puesto ON colaborador.idpuesto = puesto.id
                        WHERE usuario = '$usuario'  AND contraseña = '$password'";

        if ($conexion) {
            $usuario = $conexion->real_escape_string($usuario);
            $password = $conexion->real_escape_string($password);
            $query = $query_sql;
            $result = $conexion->query($query);

            if ($result && $result->num_rows > 0) {
                // Valid credentials, initiate session and store additional user information
                $row = $result->fetch_assoc();
                $_SESSION['id_colab'] = $row['id_colab'];
                $_SESSION['nombre'] = $row['nombre'];
                $_SESSION['apellido'] = $row['apellido'];
                $_SESSION['id_usuario'] = $row['id_usuario'];
                $_SESSION['usuario'] = $row['usuario'];
                $_SESSION['rol'] = $row['rol'];
                $_SESSION['cargo'] = $row['cargo'];
                $_SESSION['sede'] = $row['sede'];
                $_SESSION['puesto'] = $row['puesto'];
                $_SESSION['tip_puesto'] = $row['tip_puesto'];
                $_SESSION['loggedin'] = true;

                // Redirect the user to the index.php page
                header('Location: index.php');
                exit();
            } else {
                // Invalid credentials, display error message
                echo '<div class="p-2 mb-2 bg-red-500 text-white rounded-lg">Credenciales no válidas. Inténtalo de nuevo.</div>';
            }

            // Close the database connection
            $conexion->close();
        } else {
            // Error connecting to the database
            echo "Error connecting to the database";
        }
    }
}

// Call the handleLoginForm function to process the login form submission
handleLoginForm();
