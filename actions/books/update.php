<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $isbn = $_POST['isbn'];
    $year = $_POST['year'];
    $stock = $_POST['stock'];
    $categoryId = $_POST['category_id'];
    $description = $_POST['description'];
    $authors = isset($_POST['authors']) ? $_POST['authors'] : [];

    echo '<h1>Data berhasil diupdate</h1>';
    print_r($_POST);
} else {
    echo '<h1>Permintaan tidak valid</h1>';
}
?>