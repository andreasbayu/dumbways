<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "dumbways";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    echo "koneksi Gagal";
}

?>