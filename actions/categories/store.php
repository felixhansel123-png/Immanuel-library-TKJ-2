<?php

$name = $_POST['name'];
$description = $_POST['description'];

echo "<h1>Data Kategori Berhasil Ditambahkan</h1>";

print_r([
    "name" => $name,
    "description" => $description
]);

?>