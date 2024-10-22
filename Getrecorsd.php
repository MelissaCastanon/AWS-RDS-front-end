<?php
// getRecords.php
header('Content-Type: application/json');

// Incluye el archivo de conexión
require 'connect.php';

// Especifica la tabla que quieres consultar (modifica si es necesario)
$table = 'country';

try {
// Prepara la consulta SQL
$stmt = $conn ->query("SELECT * FROM $table");

// Obtén todos los registros como un arreglo asociativo
$records = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Devuelve los registros en formato JSON
echo json_encode($records);

} catch (PDOException $e) {
// En caso de error, devuelve un mensaje en JSON
echo json_encode(['error' => $e->getMessage()]);
}
?>