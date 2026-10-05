<?php
if (
    isset($_POST['name']) &&
    isset($_POST['email']) &&
    isset($_POST['password']) &&
    isset($_POST['role'])
) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    echo '<h1>Pengguna berhasil dibuat</h1>';
    print_r($_POST);
} else {
    echo '<h1>Data tidak lengkap</h1>';
}