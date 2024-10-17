<?php
include_once '../php/main.php';
// Conectar a la base de datos
$db = conexion();

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $clave = password_hash($_POST['clave'], PASSWORD_DEFAULT);

    header('Location: /index.php#registro_preguntas');

    $pregunta1 = $_POST['pregunta1'];
    $pregunta2 = $_POST['pregunta2'];
    $pregunta3 = $_POST['pregunta3'];



    // Verificar si el usuario o el correo ya existen
    $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' OR email='$email'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        echo "Error: El usuario o el correo ya están registrados.";
    } else {
        // Insertar los datos si no existen
        $sql = "INSERT INTO usuarios (usuario, email, clave) VALUES ('$usuario', '$email', '$clave')";
        if ($db->query($sql) === TRUE) {
            echo "registro exitoso";
        } else {
            echo "Error: " . $sql . "<br>" . $db->error;
        }
    }
}

$db->close();

