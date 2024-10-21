<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio de Sesión y Registro</title>
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
     <section>
        <h2>Formulario de Registro de Representante</h2>
        <form action="procesar_registro.php" method="POST">
            <label for="nombre">Nombre del Representante:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>

            <label for="apellido">Apellido del Representante:</label>
            <input type="text" id="apellido" name="apellido" required><br><br>

            <label for="cedula">Cédula:</label>
            <input type="text" id="cedula" name="cedula" required><br><br>

            <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required><br><br>

            <label for="direccion">Dirección:</label>
            <textarea id="direccion" name="direccion" required></textarea><br><br>

            <label for="nacionalidad">Nacionalidad:</label>
            <input type="text" id="nacionalidad" name="nacionalidad" required><br><br>

            <label for="sexo">Sexo:</label>
            <select id="sexo" name="sexo" required>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
            </select><br><br>

            <input type="submit" value="Registrar">
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Colegio Almirante José Padilla Zulia</p>
    </footer>
</body>
</html>
