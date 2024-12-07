<?php

include "koneksi.php";

$id = $_GET['id'];

$query = "DELETE FROM pembelian WHERE id = '$id'";

$execution = mysqli_query($koneksi, $query);

if ($execution) {
    echo "<script>alert('Data Berhasil Dihapus')</script>";
} else {
    echo "<script>alert('Data tidak berhasil Dihapus')</script>";
}


