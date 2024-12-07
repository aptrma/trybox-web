<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dist/css/bootstrap.css">
</head>
<body>

<?php
include "koneksi.php"; 

date_default_timezone_set('Asia/Jakarta');

$id = rand(111111, 999999);
$nama = $_POST['Nama'];
$no_telp = $_POST['No_telp'];
$tanggal = $_POST['Tanggal'];
$tempat_pengiriman = $_POST['Tempat_Pengiriman'];
$metode_pembayaran = $_POST['metode_pembayaran'];
$menu_items = $_POST['Menu'];
$porsi_ayam = $_POST['Porsi_ayam'];
$porsi_cumi = $_POST['Porsi_cumi'];

$submission_time = date('Y-m-d H:i:s');

if (empty($menu_items)) {
    die("Harap pilih setidaknya satu menu!");
}

$portions = [
    "Ayam Suwir Kemangi" => $porsi_ayam,
    "Cumi Balado" => $porsi_cumi,
];

$success = true; 
foreach ($menu_items as $item) {
    $query = "INSERT INTO pembelian (Nama, No_telp, Tanggal, Tempat_Pengiriman, Menu, Porsi_ayam, Porsi_cumi, metode_pembayaran, Submission_Time)
            VALUES ('$nama', '$no_telp', '$tanggal', '$tempat_pengiriman', '$item', $porsi_ayam, $porsi_cumi, '$metode_pembayaran', '$submission_time')";

    $execution = mysqli_query($koneksi, $query);
    if (!$execution) {
        echo "Gagal menyimpan pesanan untuk menu: $item. Error: " . mysqli_error($koneksi);
    }
}

if ($success) {
    echo '<div class="container mt-5"> 
            <div class="alert alert-success text-center bg-warning" role="alert"> 
                <h4 class="alert-heading">Pesanan berhasil dipesan!</h4> 
                <p>Terima Kasih Sudah Memesan, Jangan Lupa buat Repeat Order ya!.</p> 
            </div> 
        </div>';
    header("refresh:3;url=index.php");
    exit(); 
}
?>
</body>
<script src="dist/js/bootstrap.js"></script>
</html>