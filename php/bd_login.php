<?php
include_once '../php/main.php';
// Conectar a la base de datos
$db = conexion();

// Validar el login
if (isset($_POST['email']) && isset($_POST['password'])) {
    $correo = $_POST['email'];
    $contraseña = $_POST['password'];


    // Recuperar id
    $consulta_id = "SELECT id_usuario FROM usuarios_admin WHERE correo = '$correo' ";
    $resultado_id = $db->query($consulta_id);

    $_SESSION['id']=$consulta_id;

    // Recuperar la contraseña encriptada del usuario
    $consulta = "SELECT contrasena FROM usuarios_admin WHERE correo = '$correo'";
    $resultado = $db->query($consulta);


    if ($resultado->num_rows == 1) {
        $row = $resultado->fetch_assoc();
        $contraseñaEncriptada = $row['contrasena'];

        // Verificar la contraseña
        if (password_verify($contraseña, $contraseñaEncriptada)) {

            function generarIdAleatorioValido() {
                // Generar un ID único
                $id = uniqid('', true);
            
                // Filtrar el ID para permitir solo caracteres válidos
                $caracteresValidos = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789,-';
                return preg_replace('/[^' . $caracteresValidos . ']/', '', $id);
            }
            
            // Ejemplo de uso:
            $idAleatorio = generarIdAleatorioValido();
            session_id($idAleatorio);
            
            // Iniciar la sesión del usuario
            session_start();

            $_SESSION['email'] = $correo;
            $_SESSION['id']=$resultado_id;
            


            
            // Redirigir a la página o aplicación correspondiente
            header("Location: /index.php?vista=home");
            exit;
			
        } else {
            echo '<p>Contraseña incorrecta.</p>';
        }
    } else {
        echo '<p>Email no encontrado.</p>';
    }
}