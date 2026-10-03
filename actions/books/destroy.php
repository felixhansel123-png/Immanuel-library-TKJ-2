<?php

$id = $_GET['id'];

echo "<h1>Data Buku Berhasil Dihapus</h1>";

print_r([
    "id" => $id
]);
echo "Data buku terhapus id: {$id}";
?>