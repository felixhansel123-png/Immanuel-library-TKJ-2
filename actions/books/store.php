<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['store'])) {
    $title = $_POST['title'];
    $isbn = $_POST['isbn'];
    $year = $_POST['year'];
    $stock = $_POST['stock'];
    $categoryId = $_POST['category_id'];
    $description = $_POST['description'];
    $authorIds = isset($_POST['author_ids']) ? $_POST['author_ids'] : [];

    echo '<h1>Data berhasil dibuat</h1>';
    print_r($_POST);
} else {
    echo '<h1>Permintaan tidak valid</h1>';
}
?>