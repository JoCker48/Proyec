<head>
    <link rel="stylesheet" href="../css/consulta_pagos.css">
    <link rel="stylesheet" href="../css/botones.css">
</head>
<body>

    <h2>Cédula</h2>

    <form action="../php/consulta_pagos.php" method="POST">
        <label for="cedula">Buscar:</label>
        <input type="text" name="cedula" id="cedula"> 
    </form>

    <p></p>

    <table>
        <thead>
            <tr>
                <th>Cédula</th>
                <th>Fecha de Pago</th>
                <th>Status</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody id="content">
            <!-- Los datos se llenarán aquí -->
        </tbody>
    </table>

    <script>
        getData();

        function getData() {
            let input = document.getElementById("cedula").value;
            let content = document.getElementById("content");
            let url = "./php/consulta_pagos.php";  // Corrige la URL

            let formData = new FormData();  // Corrige el nombre de la clase
            formData.append("cedula", input);  // Envía el valor del input

            fetch(url, {
                method: "POST",
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                content.innerHTML = data;
            })
            .catch(err => console.log(err));
        }
    </script>

</body>
