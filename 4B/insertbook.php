<?php
include 'connection.php';

$judul = $_POST["judul"];
$gambar = $_POST["gambar"] ;
$categori = $_POST["category_id"];
$penulis = $_POST["writer_id"] ;
$year = $_POST["year"];


$sql = "INSERT INTO book_tb (name, category_id, witer_id,publication_year, img) VALUES ('$judul', $categori, $penulis, $year, '$gambar')";
$res = $conn->query($sql);


header('LOCATION:index.php');