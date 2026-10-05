<?php
if (isset($_POST['name']) && isset($_POST['bio'])) {
    $name = $_POST['name'];
    $bio = $_POST['bio'];

    echo '<h1>Penulis berhasil dibuat</h1>';
    print_r($_POST);
} else {
    echo '<h1>Data tidak lengkap</h1>';
}