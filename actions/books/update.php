<?php

$id = $_POST['id'];
$title = $_POST['title'];
$isbn = $_POST['isbn'];
$year = $_POST['year'];
$stock = $_POST['stock'];
$category_id = $_POST['category_id'];
$description = $_POST['description'];
$author_ids = $_POST['author_ids'];

echo "<h1>Data Buku Berhasil Diupdate</h1>";

print_r([
    "id" => $id,
    "title" => $title,
    "isbn" => $isbn,
    "year" => $year,
    "stock" => $stock,
    "category_id" => $category_id,
    "description" => $description,
    "author_ids" => $author_ids
]);
?>