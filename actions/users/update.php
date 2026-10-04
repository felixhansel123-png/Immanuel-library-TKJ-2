<?php
if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['role'])) {
    echo 'Data terupdate: ';
    print_r($_POST);
} else {
    echo "Data pengguna belum lengkap.";
}