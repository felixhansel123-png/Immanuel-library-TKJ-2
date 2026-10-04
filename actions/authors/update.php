<?php
$id = $_POST['id'];
$name = $_POST['name'];
$bio = $_POST['bio'];

echo "<h1>Data Penulis Berhasil Diupdate</h1>";

print_r([
    "id" => $id,
    "name" => $name,
    "bio" => $bio
]);
?>