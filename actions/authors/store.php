<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['store'])) {
    $name = $_POST['name'];
    $bio = $_POST['bio'];

    echo '<h1>Penulis berhasil dibuat</h1>';
    print_r($_POST);
} else {
    echo '<h1>Permintaan tidak valid</h1>';
}
?>