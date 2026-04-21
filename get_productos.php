<?php
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_app";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo json_encode(["error" => "Conexión fallida: " . $conn->connect_error]);
    exit;
}

$sql = "SELECT * FROM productos";
$result = $conn->query($sql);

$productos = array();
while($row = $result->fetch_assoc()) {
    $productos[] = $row;
}

echo json_encode($productos, JSON_UNESCAPED_UNICODE);
$conn->close();
?>
