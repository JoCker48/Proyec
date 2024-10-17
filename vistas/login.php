<head>
    <title>Colegio Almirante José Padilla Zulia</title>
    <link rel="stylesheet" href="../css/login.css">
    <script>
        document.addEventListener('keydown', function(event) {
        if (event.key === 'ArrowUp' || event.key === 'ArrowDown') {event.preventDefault();}
        });
    </script>
</head>
<body>
    <header>
        <h1>Colegio Almirante José Padilla Zulia</h1>
        <nav>
            <ul>
                <li><a href="#home">Inicio</a></li>
                <li><a href="#inicio_sesion">Inicio de Sesión</a></li>
                <li><a href="#registro">Registro</a></li>
            </ul>
        </nav>
    </header>

    <div class="rebody">
        <section id="home" class="home">
            <h2>Bienvenidos al Colegio Almirante José Padilla Zulia</h2>
            <p>En nuestro colegio nos dedicamos a la excelencia académica y al desarrollo integral de nuestros estudiantes.</p>
        </section>


        <section id="inicio_sesion">
            <h2>Inicio de Sesión</h2>
            <form id="login-form" action="../php/bd_login.php" method="post">
                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" required>
                <label for="clave">Clave:</label>
                <input type="password" id="clave" name="clave" required>
                <input type="submit" value="Iniciar Sesión">
            </form>
        </section>

        <section id="registro">
            <h2>Registro</h2>
            <form action="../php/bd_register.php" method="post">
                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" required autocomplete="off">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required autocomplete="off">
                <label for="clave">Clave:</label>
                <input type="password" id="clave" name="clave" required autocomplete="off">
                <input type="submit" value="Rellenar Preguntas">
            </form>
        </section>
    </div>

    <footer>
        <p>&copy; 2024 Colegio Almirante José Padilla Zulia</p>
    </footer>

    </body>