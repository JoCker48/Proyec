<head>
    <link rel="stylesheet" href="../css/tabla.css">
</head>
<?php
require '../php/main.php';
// Conectar a la base de datos
$db = conexion();

$columns = ['cedula', 'fechaP', 'statusP'];
$table   = 'pagos';

$cedula = isset($_POST['cedula']) ? $db->real_escape_string($_POST['cedula']) : null;

$sql = "SELECT " . implode(", ", $columns) . " FROM $table";
$resultado = $db->query($sql);
$num_row = $resultado->num_rows;

$html = '';

if ($num_row > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $html .= '<tr>';
        $html .= '<td>' . $row['cedula'] . '</td>';
        $html .= '<td>' . $row['fechaP'] . '</td>';
        $html .= '<td>' . $row['statusP'] . '</td>';
        $html .= '<td><a href="#">editar</a></td>';
        $html .= '<td><a href="#">eliminar</a></td>';
        $html .= '</tr>';
    }
} else {
    $html .= '<tr>';
    $html .= '<td colspan="5">No hay datos</td>';
    $html .= '</tr>';
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);

?>
