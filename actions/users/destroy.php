<?php

if (isset($_GET['id'])) {
   $id = $_GET['id'];
    echo "Pengguna pada ID $id sudah di hapus.";
    echo "<br>";
    echo "<a href='../../pages/users/index.php'>Kembali ke daftar pengguna</a>";
} else {
    echo "ID tidak ditemukan.";
}

?>