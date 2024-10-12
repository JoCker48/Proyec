<head>
    <link rel="stylesheet" href="./css/home.css">
</head>
<body>
    <header class="titulo">
        <h1>Clientes Pendientes</h1>
    </header>
    <div class="cuerpo">
        <div class="tabla">
            <?php

                require './php/main.php';

                // Crear conexión
                $conn = conexion();

                // Verificar conexión
                if ($conn->connect_error) {
                    die("Conexión fallida: " . $conn->connect_error);
                }

                // Consulta SQL
                $sql = "SELECT id_usuario, correo, contrasena FROM usuarios_admin";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                   // echo '<link href="./css/home.css" type="text/css" rel="stylesheet">';
                    echo "<table class='tabla'><tr><th>Id_Usuario</th><th>Correo</th><th>Contraseña</th></tr>";
                    // Salida de datos de cada fila
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["id_usuario"]. "</td><td>" . $row["correo"]. "</td><td>" . $row["contrasena"]. "</td></tr>";
                    }
                    echo "</table>";
                } else {
                    echo "0 resultados";
                }
                $conn->close();
            ?>
        </div>
    </div>
</body>