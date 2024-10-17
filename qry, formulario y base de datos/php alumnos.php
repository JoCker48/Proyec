<?php
// Conexión a la base de datos
include_once '../php/main.php';
// Conectar a la base de datos
$db = conexion();
// Obtener los datos del formulario
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$direccion = $_POST['direccion'];
$nacionalidad = $_POST['nacionalidad'];
$sexo = $_POST['sexo'];
$cedula_representante = $_POST['cedula_representante'];

// Insertar los datos en la tabla alumnos
$sql = "INSERT INTO alumnos (nombres, apellidos, fecha_nacimiento, direccion, nacionalidad, sexo, cedula_representante)
VALUES ('$nombres', '$apellidos', '$fecha_nacimiento', '$direccion', '$nacionalidad', '$sexo', $cedula_representante)";

if ($db->query($sql) === TRUE) {
    echo "Registro exitoso.";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}

$db->close();
?>
