<?php

include_once '../php/main.php';

$db = conexion();
// Procesar Registro de Representante
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cedula = $_POST['cedula'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $direccion = $_POST['direccion'];
    $nacionalidad = $_POST['nacionalidad'];
    $sexo = $_POST['sexo'];

    // Preparar consulta SQL
    $sql = "INSERT INTO representantes (nombre, apellido, cedula, fecha_nacimiento, direccion, nacionalidad, sexo) 
            VALUES ('$nombre', '$apellido', '$cedula', '$fecha_nacimiento', '$direccion', '$nacionalidad', '$sexo')";

    if ($db->query($sql) === TRUE) {
        echo "Registro completado con éxito";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }

    // Cerrar conexión
    $db->close();
}