<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['role'])) {
    echo 'Data berhasil dibuat: ';
    print_r($_POST);
} else {
    echo "Data pengguna belum lengkap.";
}