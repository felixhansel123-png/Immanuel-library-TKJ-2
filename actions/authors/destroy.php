<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    echo "<h1>Penulis dengan ID {$id} berhasil dihapus</h1>";
} else {
    echo '<h1>ID penulis tidak ditemukan</h1>';
}