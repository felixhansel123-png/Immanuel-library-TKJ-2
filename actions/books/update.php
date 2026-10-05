<?php
if (
    isset($_POST['id']) &&
    isset($_POST['title']) &&
    isset($_POST['isbn']) &&
    isset($_POST['year']) &&
    isset($_POST['stock']) &&
    isset($_POST['category_id']) &&
    isset($_POST['description'])
) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $isbn = $_POST['isbn'];
    $year = $_POST['year'];
    $stock = $_POST['stock'];
    $categoryId = $_POST['category_id'];
    $description = $_POST['description'];
    $authors = isset($_POST['authors']) ? $_POST['authors'] : [];

    echo '<h1>Data Buku Berhasil Diupdate</h1>';
    print_r($_POST);
} else {
    echo '<h1>Data tidak lengkap</h1>';
}