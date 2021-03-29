<?php
include 'connection.php';
$input = json_decode(file_get_contents('php://input'), true);
$name = $input["name"];
$sql = "INSERT INTO writer_tb (name) VALUES ('$name')";
$conn->query($sql);
echo "HEH"


?>
