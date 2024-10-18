<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Dinámico</title>
    <link rel="stylesheet" href="styles.css"> <!-- Opcional: añadir estilos -->
</head>
<body>
    <!-- Menú de navegación -->
    <nav>
        <ul>
            <li><a href="index.php?menu=registro">registro</a></li>
            <li><a href="index.php?menu=consulta">consulta</a></li>
            <li><a href="index.php?menu=borrar">borrar</a></li>
        </ul>
    </nav>

    <!-- Contenido dinámico -->
    <section>
        <?php
        // Verificar si el parámetro "menu" está en la URL
        if (!isset($_GET['menu']) || $_GET['menu'] == "") {
            $_GET['menu'] = "inicio"; // Valor por defecto: "inicio"
        }

        // Verificar si existe el archivo correspondiente al menú seleccionado
        if (is_file("./secciones/" . $_GET['menu'] . ".php")) {
            include "./secciones/" . $_GET['menu'] . ".php"; // Incluir el archivo correspondiente
        } else {
            include "./secciones/404.php"; // Mostrar página de error si no existe la sección
        }
        ?>
    </section>
</body>
</html>