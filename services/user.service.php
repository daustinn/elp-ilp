<?php
require_once('modelo/conexion.php');
/**
 * Obtiene la lista de usuarios con sus roles desde la base de datos.
 *
 * @return array|false Arreglo de usuarios con sus datos, o false si no hay usuarios.
 */
function getUsers()
{
    // Conectar a la base de datos
    $conexion = connectToDatabase();

    // Consulta SQL para obtener usuarios y sus roles
    $query = "SELECT
                usuario.id,
                usuario.usuario,
                usuario.contraseña,
                usuario.status,
                rol.id as 'id_rol',
                rol.descripcion as 'descripcion',
                rol.nombre as 'rol',
                usuario.created_at
              FROM
                usuario
              INNER JOIN rol ON usuario.idrol = rol.id ORDER BY created_at desc";

    if ($conexion) {
        // Ejecutar la consulta
        $result = $conexion->query($query);

        if ($result && $result->num_rows > 0) {
            $users = array();

            // Recorrer los resultados y almacenarlos en un arreglo
            while ($row = $result->fetch_assoc()) {
                $users[] = $row;
            }

            // Cerrar la conexión y devolver el arreglo de usuarios
            $conexion->close();
            return $users;
        }

        // Cerrar la conexión si no hay resultados
        $conexion->close();
    }

    return false; // Devolver false si no se puede conectar o no hay usuarios
}
