<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

include '../index.php';

$sql = "SELECT * FROM produk";
$result = $conn->query($sql);

$templates = [];

while ($row = $result->fetch_assoc()) {
    $templates[] = $row;
}

echo json_encode($templates);
$conn->close();
?>
