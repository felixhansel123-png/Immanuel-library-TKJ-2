<?php
if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['description'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];

    echo '<h1>Kategori berhasil diupdate</h1>';
    print_r($_POST);
} else {
    echo '<h1>Data tidak lengkap</h1>';
}
?>