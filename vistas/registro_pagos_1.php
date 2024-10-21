<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Pagos</title>
</head>
<body>
    <h2>Formulario de Registro de Pagos</h2>
    <form action="insertar_pago.php" method="POST">
        <label for="cedula">Cédula del Representante:</label><br>
        <input type="number" id="cedula" name="cedula" required><br><br>

        <label for="fechaP">Fecha del Pago:</label><br>
        <input type="date" id="fechaP" name="fechaP" required><br><br>

        <label for="statusP">Estado del Pago (1 = Completado, 0 = Pendiente):</label><br>
        <select id="statusP" name="statusP" required>
            <option value="1">Completado</option>
            <option value="0">Pendiente</option>
        </select><br><br>

        <input type="submit" value="Registrar Pago">
    </form>
</body>
</html>
