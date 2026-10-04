<?php

$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];

echo "<h1>Data Kategori Berhasil Diupdate</h1>";

print_r([
    "id" => $id,
    "name" => $name,
    "description" => $description
]);

?>