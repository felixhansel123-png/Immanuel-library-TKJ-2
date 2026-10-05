<?php
if (isset($_POST['name']) && isset($_POST['description'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];

    echo '<h1>Kategori berhasil dibuat</h1>';
    print_r($_POST);
} else {
    echo '<h1>Data tidak lengkap</h1>';
}
?>