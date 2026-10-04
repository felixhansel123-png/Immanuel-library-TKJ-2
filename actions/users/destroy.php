<?php
if (isset($_GET['id'])) {
    echo "Data dihapus: ";
    print_r(["id" => $_GET['id']]);
} else {
    echo "ID pengguna tidak ditemukan.";
}