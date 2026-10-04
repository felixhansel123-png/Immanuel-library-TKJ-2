<?php


$name = $_POST['name'];
$bio = $_POST['bio'];

echo "<h1>Data Penulis Berhasil Ditambahkan</h1>";

print_r([
    "name" => $name,
    "bio" => $bio
]);



?>