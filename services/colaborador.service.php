<?php
require_once('modelo/conexion.php');



function getColaboradores()
{
    $conexion = connectToDatabase();
    if ($conexion) {
        $query = "SELECT
                    colaborador.id,
                    colaborador.dni,
                    colaborador.nombres,
                    colaborador.apellidos,
                    usuario.usuario AS 'usuario',
                    cargo.nombre AS 'cargo',
                    sede.lugar AS 'sede',
                    puesto.nombre AS 'puesto',
                    area.nombre AS 'area',
                    departamento.nombre as 'departamento',
                    sup.nombres as 'supervisor',
                    colaborador.created_at
                FROM
                    colaborador
                INNER JOIN usuario ON colaborador.idusuario = usuario.id
                INNER JOIN cargo ON colaborador.idcargo = cargo.id
                INNER JOIN sede ON colaborador.idsede = sede.id
                INNER JOIN puesto ON colaborador.idpuesto = puesto.id
                INNER JOIN area ON colaborador.idarea = area.id
                INNER JOIN departamento ON colaborador.iddepartamento = departamento.id
                INNER JOIN colaborador as sup ON colaborador.idsupervisor = sup.id ORDER BY colaborador.created_at desc";
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


function getRolById($id)
{
    $conexion = connectToDatabase();
    if ($conexion) {
        $query = "SELECT * FROM colaborador WHERE id = '$id'"; // Cambio en la consulta SQL
        $result = $conexion->query($query);
        if ($result && $result->num_rows > 0) {
            $colaborador = $result->fetch_assoc(); // Obtén el primer registro
            $conexion->close();
            return $colaborador;
        }
        $conexion->close();
    }
    return false;
}
