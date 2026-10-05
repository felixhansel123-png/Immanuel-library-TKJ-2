<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $bio = $_POST['bio'];

    echo '<h1>Profil berhasil diupdate</h1>';
    print_r($_POST);
} else {
    echo '<h1>Permintaan tidak valid</h1>';
}
?>