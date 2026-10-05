<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    echo "<h1>Pengguna dengan ID {$id} berhasil dihapus</h1>";
} else {
    echo '<h1>ID pengguna tidak ditemukan</h1>';
}