<?php

if (isset($_GET['id'])) {
   $id = $_GET['id'];
    echo "Penulis pada ID $id sudah di hapus.";
    echo "<br>";
    echo "<a href='../../pages/authors/index.php'>Kembali ke daftar penulis</a>";
} else {
    echo "ID tidak ditemukan.";
}

?>