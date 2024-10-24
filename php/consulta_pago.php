<head>
    <link rel="stylesheet" href="../css/tabla.css">
</head>

<?php
include_once './php/main.php';
// Conectar a la base de datos
// Conectar a la base de datos
$db = conexion();

// Definir el número de resultados por página
$results_per_page = 10; // Cambia este número según lo que necesites

// Saber en qué página está el usuario
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

// Calcular el número inicial de resultados para la consulta SQL
$start_from = ($page - 1) * $results_per_page;

// Consultar el número total de registros en la tabla para calcular el número de páginas
$sql_total = "SELECT COUNT(id) AS total FROM pagos";
$result_total = $db->query($sql_total);
$row_total = $result_total->fetch_assoc();

// Asegúrate de que haya un resultado antes de usar la variable
if ($row_total) {
    $total_records = $row_total['total']; // Total de registros
    $total_pages = ceil($total_records / $results_per_page); // Número total de páginas
}

// Consultar con paginación
$sql = "SELECT id, cedula, fechaP, statusP FROM pagos LIMIT ?, ?";
$stmt = $db->prepare($sql);
$stmt->bind_param("ii", $start_from, $results_per_page);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<table class='tabla'><tr><th>ID</th><th>Cédula</th><th>Fecha de Pago</th><th>Status de Pago</th><th>Acciones</th></tr>";

    // Iterar sobre las filas de resultados
    while($row = $result->fetch_assoc()) {
        $status = $row["statusP"] ? "Completado" : "Pendiente";

        echo "<tr>
            <td>" . htmlspecialchars($row["id"]). "</td>
            <td>" . htmlspecialchars($row["cedula"]). "</td>
            <td>" . htmlspecialchars($row["fechaP"]). "</td>
            <td>" . htmlspecialchars($status). "</td>
            <td>
                <a href='editar.php?id=" . htmlspecialchars($row["id"]) . "'>Editar</a> |
                <a href='eliminar.php?id=" . htmlspecialchars($row["id"]) . "' onclick='return confirm(\"¿Estás seguro de eliminar este registro?\")'>Eliminar</a>
            </td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados";
}

// Colocar la paginación fuera de la tabla
if (isset($total_pages) && $total_pages > 1) {
    echo "<div class='pagination'>";
    for ($i = 1; $i <= $total_pages; $i++) {
        echo "<div class='pagination-item'>
                <a href='?vista=consulta_pagos_0&page=" . $i . "'>" . $i . "</a>
              </div>";
    }
    echo "</div>";
} else {
    echo "<p>No hay más páginas disponibles.</p>";
}

?>
