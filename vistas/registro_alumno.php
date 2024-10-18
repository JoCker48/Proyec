<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Alumnos</title>
</head>
<body>
    <h2>Formulario de Registro de Alumnos</h2>
    <form action="insertar_alumno.php" method="POST">
        <label for="nombres">Nombres:</label><br>
        <input type="text" id="nombres" name="nombres" required><br><br>

        <label for="apellidos">Apellidos:</label><br>
        <input type="text" id="apellidos" name="apellidos" required><br><br>

        <label for="fecha_nacimiento">Fecha de Nacimiento:</label><br>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required><br><br>

        <label for="direccion">Dirección:</label><br>
        <input type="text" id="direccion" name="direccion"><br><br>

        <label for="nacionalidad">Nacionalidad:</label><br>
        <input type="text" id="nacionalidad" name="nacionalidad"><br><br>

        <label for="sexo">Sexo:</label><br>
        <select id="sexo" name="sexo" required>
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
        </select><br><br>

        <label for="cedula_representante">Cédula del Representante:</label><br>
        <input type="number" id="cedula_representante" name="cedula_representante" required><br><br>

        <input type="submit" value="Registrar Alumno">
    </form>
</body>
</html>
