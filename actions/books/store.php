<?php
if (isset($_POST['title']) && isset($_POST['isbn']) && isset($_POST['year']) && isset($_POST['stock']) && isset($_POST['category_id']) && isset($_POST['description'])) {
    echo '<h1>Data berhasil dibuat</h1>';
    print_r($_POST);
} else {
    echo '<h1>Data tidak lengkap</h1>';
}
?>