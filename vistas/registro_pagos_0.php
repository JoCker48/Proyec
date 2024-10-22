<!DOCTYPE html>
<html lang="es">
<head>
    <title>Registro de Pagos</title>
    <link rel="stylesheet" href="/css/formularios.css">
</head>
<body>
    <div class="rebody">
        <h2>Formulario de Registro de Pagos</h2>
        <form action="../php/registro_pagos.php" method="POST">
            <div class="formularios">
                <label for="cedula">Cédula del Representante:</label><br>
                <input type="number" id="cedula" name="cedula" required><br><br>

                <label for="fechaP">Fecha del Pago:</label><br>
                <input type="date" id="fechaP" name="fechaP" required><br><br>

                <label for="statusP">Estado del Pago (1 = Completado, 0 = Pendiente):</label><br>
                <select id="statusP" name="statusP" required>
                    <option value="1">Completado</option>
                    <option value="0">Pendiente</option>
                </select><br><br>
            </div>
            <input type="submit" value="Registrar Pago">
        </form>
    </div>
</body>
</html>
