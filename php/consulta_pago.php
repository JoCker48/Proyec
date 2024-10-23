<head>
    <link rel="stylesheet" href="../css/tabla.css">
</head>
<?php
include_once './php/main.php';
// Conectar a la base de datos
$db = conexion();


$sql = "SELECT id, cedula, fechaP, statusP FROM pagos";
$stmt = $db->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();


if ($result->num_rows > 0) {
    echo "<table class='tabla'><tr><th>ID</th><th>Cédula</th><th>Fecha de Pago</th><th>Status de Pago</th></tr>";
    
    // Iterar sobre las filas de resultados
    while($row = $result->fetch_assoc()) {
        // Traducir el campo statusP de TINYINT (0 o 1) a un valor legible
        $status = $row["statusP"] ? "Completado" : "Pendiente";
        
        echo "<tr><td>" . htmlspecialchars($row["id"]). "</td>
              <td>" . htmlspecialchars($row["cedula"]). "</td>
              <td>" . htmlspecialchars($row["fechaP"]). "</td>
              <td>" . htmlspecialchars($status). "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados";
}