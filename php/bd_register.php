<?php
include_once '../php/main.php';
// Conectar a la base de datos
$db = conexion();

// Validar los datos del formulario
if (isset($_POST['email']) && isset($_POST['password'])) {
    $correo = $_POST['email'];
    $contraseña = $_POST['password'];

    // Validar el correo electrónico
     if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        echo '<p>Correo electrónico no válido.</p>';
        exit;
    }

    // Encriptar la contraseña
     $contraseñaEncriptada = password_hash($contraseña, PASSWORD_DEFAULT);

    // Comprobar si el correo ya existe
    $consulta = "SELECT * FROM usuarios_admin WHERE correo = '$correo'";
    $resultado = $db->query($consulta);

    if ($resultado->num_rows > 0) {
        echo '<p>El correo electrónico ya está registrado.</p>';
        exit;
    }

    // Registrar el usuario en la base de datos
    $consulta = "INSERT INTO usuarios_admin (correo, contrasena) VALUES ('$correo', '$contraseñaEncriptada')";
    $db->query($consulta);

    if ($db->affected_rows == 1) {
        echo "Usuario registrado con exito";
        exit;
    } else {
        header('Location: usuario_noregistrado.html');
        exit;
    }
}
