<?php
include 'connection.php';

$judul = $_POST["name"];
$categori = $_POST["category_id"];
$penulis = $_POST["writer_id"] ;
$year = $_POST["year"];

$targetFolder = "assets/uploads/";
$filename = basename($_FILES["img"]["name"]);
$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
$target_file = $targetFolder.$filename;


echo $penulis." ".$judul." ".$imageFileType." ".$categori." ".$year;

if ($imageFileType == "png" || $imageFileType == jpg) {
    echo "masuk";
    move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
    $sql = "INSERT INTO book_tb (name, category_id, writer_id,publication_year, img) VALUES ('$judul', $categori, $penulis, $year, '$filename')";
    $conn->query($sql);
} else {
    echo "Gagal";
}