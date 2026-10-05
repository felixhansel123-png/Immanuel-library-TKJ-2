<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $bio = $_POST['bio'];

    echo '<h1>Penulis berhasil diupdate</h1>';
    print_r($_POST);
} else {
    echo '<h1>Permintaan tidak valid</h1>';
}
?>