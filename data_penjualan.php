<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penjualan Firebowl</title>
    <link rel="stylesheet" href="dist/css/bootstrap.css">
    <link rel="icon" type="x-icon" href="images/20240919_171719.png">
</head>

<body class="bg-dark">

<div class="container">
    <a class="btn btn-primary mt-2 mb-2" href="form_pembelian.php">Form Pembelian</a>

    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>No Telp</th>
                <th>Tanggal</th>
                <th>Tempat Pengiriman</th>
                <th>Menu</th>
                <th>Porsi Ayam</th>
                <th>Porsi Cumi</th>
                <th>Metode Pembayaran</th>
                <th>Tanggal Pembelian</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "koneksi.php";

            $query = "SELECT * FROM pembelian";

            $execution = mysqli_query($koneksi, $query);

            if (mysqli_num_rows($execution) > 0) {
                $no = 1;
                foreach ($execution as $e) { ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $e['Nama'] ?></td>
                        <td><?= $e['No_telp'] ?></td>
                        <td><?= $e['Tanggal'] ?></td>
                        <td><?= $e['Tempat_Pengiriman'] ?></td>
                        <td><?= $e['Menu'] ?></td>
                        <td><?= $e['Porsi_ayam'] ?></td>
                        <td><?= $e['Porsi_cumi'] ?></td>
                        <td><?= $e['metode_pembayaran'] ?></td>
                        <td><?= $e['Submission_Time'] ?></td>
                        <td>
                            <a class="btn btn-light mt-2 mb-2 btn-sm" href="form_edit_pembelian.php?id=<?= $e['id'] ?>">Edit</a>
                            <a class="btn btn-light mt-2 mb-2 btn-sm" href="delete_data.php?id=<?= $e['id'] ?>">Hapus</a>
                        </td>
                    </tr>
            <?php }
            }
            ?>
        </tbody>
    </table>
</div>
<script src="dist/js/bootstrap.js"></script>
</body>

</html>