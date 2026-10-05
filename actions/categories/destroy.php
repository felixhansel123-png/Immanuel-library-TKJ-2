<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    echo "<h1>Kategori dengan ID {$id} berhasil dihapus</h1>";
} else {
    echo '<h1>ID kategori tidak ditemukan</h1>';
}
?>