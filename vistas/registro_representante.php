<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio de Sesión y Registro</title>
    <link rel="stylesheet" href="/css/formularios.css">
</head>
<body>
    <div class="rebody">
        <section>
            <h2>Formulario de Registro de Representante</h2>
            <form action="../php/registro_representante.php" method="POST">
                <div class="formularios">
                    <label for="nombre">Nombre del Representante:</label><br>
                    <input type="text" id="nombre" name="nombre" required><br><br>

                    <label for="apellido">Apellido del Representante:</label><br>
                    <input type="text" id="apellido" name="apellido" required><br><br>

                    <label for="cedula">Cédula:</label><br>
                    <input type="text" id="cedula" name="cedula" required><br><br>

                    <label for="fecha_nacimiento">Fecha de Nacimiento:</label><br>
                    <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required><br><br>

                    <label for="direccion">Dirección:</label><br>
                    <textarea id="direccion" name="direccion" required></textarea><br><br>

                    <label for="nacionalidad">Nacionalidad:</label><br>
                    <input type="text" id="nacionalidad" name="nacionalidad" required><br><br>

                    <label for="sexo">Sexo:</label><br>
                    <select id="sexo" name="sexo" required>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                    </select><br><br>
                </div>
                <input type="submit" value="Registrar">
            </form>
        </section>
    </div>
</body>
</html>
