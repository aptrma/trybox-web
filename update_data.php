<?php

include "koneksi.php";

$id = $_GET['id'];

$nama = $_POST['Nama'];
$no_telp = $_POST['No_telp'];
$tanggal = $_POST['Tanggal'];
$tempat_pengiriman = $_POST['Tempat_Pengiriman'];
$metode_pembayaran = $_POST['metode_pembayaran'];
$menu_items = isset($_POST['Menu']) ? $_POST['Menu'] : []; 
$porsi_ayam = $_POST['Porsi_ayam'];
$porsi_cumi = $_POST['Porsi_cumi'];

$menu_string = implode(", ", $menu_items);

$query = "UPDATE pembelian SET id='$id', Nama='$nama', No_telp='$no_telp', Tanggal='$tanggal', Tempat_Pengiriman='$tempat_pengiriman', metode_pembayaran='$metode_pembayaran', Porsi_ayam='$porsi_ayam', Porsi_cumi='$porsi_ayam' WHERE id='$id'";
$execution = mysqli_query($koneksi, $query);

    if ($execution) {
    echo "Data Berhasil Masuk";
} else {
    echo "Data Gagal Masuk";
}


?>
<link rel="stylesheet" href="dist/css/bootstrap.css">
<br><br>

