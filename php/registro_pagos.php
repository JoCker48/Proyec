<?php
// Conexión a la base de datos
include_once '../php/main.php';
// Conectar a la base de datos
$db = conexion();

// Obtener los datos del formulario
$cedula = $_POST['cedula'];
$fechaP = $_POST['fechaP'];
$statusP = $_POST['statusP'];

// Insertar los datos en la tabla pagos
$sql = "INSERT INTO pagos (cedula, fechaP, statusP)
VALUES ($cedula, '$fechaP', $statusP)";

if ($db->query($sql) === TRUE) {
    echo "Pago registrado exitosamente.";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}

$db->close();
?>
