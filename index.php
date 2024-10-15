<?php require "./inc/session_start.php"; 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
        <?php

        if(!isset($_GET['vista']) || $_GET['vista']==""){
            $_GET['vista']="login";
        }


        if(is_file("./vistas/".$_GET['vista'].".php") && $_GET['vista']!="login" && $_GET['vista']!="404"){


                

            /*== Cerrar sesion ==*/
            if((!isset($_SESSION['email']) || $_SESSION['email']=="")){
                include "./php/cerrarsesion.php";
                exit();
            }
            
            include "./inc/navbar.php";
            
            include "./vistas/".$_GET['vista'].".php";
            

            
            

        }else{
            if($_GET['vista']=="login"){
                include "./vistas/login.php";
            }else{
                include "./vistas/404.php";
            }
        }
        ?>
        
</body>
</html>
