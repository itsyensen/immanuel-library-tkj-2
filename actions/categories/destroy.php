<?php

if (isset($_GET['id'])) {
   $id = $_GET['id'];
    echo "Category pada ID $id sudah di hapus.";
    echo "<br>";
    echo "<a href='../../pages/categories/index.php'>Kembali ke daftar kategori</a>";
} else {
    echo "ID tidak ditemukan.";
}

?>