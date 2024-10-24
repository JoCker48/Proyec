<head>
    <link rel="stylesheet" href="../css/consulta_pagos.css">
    <link rel="stylesheet" href="../css/botones.css">
    </head>
    <body>
        
        <h2>Cedula</h2>

            <form action="../php/consulta_pagos.php" method="POST">
            <label for="cedula">buscar:</label>
            <input type="text" name="cedula" id="cedula" > 
            </form>
            <p></p>
            <table>
                    <th>cedula</th>
                    <th>fechaP</th>
                    <th>statusP</th>
                    <th></th>
                    <th></th>
            <tbody id="content">
            </tbody>
            </table>
    </body>