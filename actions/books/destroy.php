<?php

if (isset($_GET['id']) && $_SERVER['REQUEST_METHOD'] === 'GET') {
   $id = $_GET['id'];
    echo "Buku pada ID $id sudah di hapus.";
    echo "<br>";
    echo "<a href='../../pages/books/index.php'>Kembali ke daftar buku</a>";
} else {
    echo "ID tidak ditemukan.";
}

?>