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

        if ($conexion) {
            $usuario = $conexion->real_escape_string($usuario);
            $password = $conexion->real_escape_string($password);
            $query = "SELECT * FROM usuario WHERE usuario = '$usuario' AND contraseña = '$password'";
            $result = $conexion->query($query);

            if ($result && $result->num_rows > 0) {
                // Valid credentials, initiate session and store additional user information
                $row = $result->fetch_assoc();
                $_SESSION['id'] = $row['idusuario'];
                $_SESSION['usuario'] = $row['usuario'];
                $_SESSION['rol'] = $row['idrol'];
                $_SESSION['loggedin'] = true;

                // Redirect the user to the index.php page
                header('Location: index.php');
                exit();
            } else {
                // Invalid credentials, display error message
                echo '<div class="error rounded-lg">Invalid credentials. Please try again.</div>';
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
?>