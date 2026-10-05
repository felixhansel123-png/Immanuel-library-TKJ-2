<?php
if (
    isset($_POST['id']) &&
    isset($_POST['name']) &&
    isset($_POST['email']) &&
    isset($_POST['role'])
) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    echo '<h1>Pengguna berhasil diupdate</h1>';
    print_r($_POST);
} else {
    echo '<h1>Data tidak lengkap</h1>';
}