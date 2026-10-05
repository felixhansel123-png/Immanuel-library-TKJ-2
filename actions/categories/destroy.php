<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];

    echo "<h1>Kategori dengan ID {$id} berhasil dihapus</h1>";
} else {
    echo '<h1>Permintaan tidak valid</h1>';
}
?>