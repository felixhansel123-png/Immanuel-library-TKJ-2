<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    echo "<h1>Buku dengan ID {$id} berhasil dihapus</h1>";
} else {
    echo '<h1>ID buku tidak ditemukan</h1>';
}