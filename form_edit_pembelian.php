<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan</title>
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="x-icon" href="images/20240919_171719.png">
</head>

<style>
    body {
        background-color: #f3a72c;
    }
</style>

<body>
<div class="container mt-5">   
        <h1 class="text-center mb-4">
            <img src="images/firebowl.png" alt="Logo" style="width: 100px; height: auto; vertical-align: middle;"> 
            Edit Pesanan
        </h1>
        <?php
        include "koneksi.php";
        
        $id = $_GET['id'];
        
        $query = "SELECT * FROM pembelian WHERE id = '$id'";
        $execution = mysqli_query($koneksi, $query);

        while ($data = mysqli_fetch_array($execution)) {  ?>
            <form action="update_data.php?id=<?=$id?>" method="post">
                <div class="mb-3">
                    <label for="Nama" class="form-label">Nama</label>
                    <input type="text" name="Nama" id="Nama" class="form-control" placeholder="Masukkan nama lengkap Anda" value="<?= $data['Nama'] ?>">
                </div>

                <div class="mb-3">
                    <label for="No_telp" class="form-label">No Telpon</label>
                    <input type="number" name="No_telp" id="No_telp" class="form-control" placeholder="Masukkan nomor telepon" value="<?= $data['No_telp'] ?>" pattern="[0-9]{10,15}">
                    <small class="form-text text-muted">Masukkan nomor telepon yang valid (10-15 digit).</small>
                </div>

                <div class="mb-3">
                    <label for="Tanggal" class="form-label">Tanggal Pengiriman</label>
                    <input type="date" name="Tanggal" id="Tanggal" class="form-control" value="<?= $data['Tanggal'] ?>">
                </div>

                <div class="mb-3">
                    <label for="Tempat_Pengiriman" class="form-label">Tempat Pengiriman</label>
                    <input type="text" name="Tempat_Pengiriman" id="Tempat_Pengiriman" class="form-control" placeholder="Masukkan alamat pengiriman" value="<?= $data['Tempat_Pengiriman'] ?>">
                </div>

                <fieldset class="mb-3">
                    <legend class="form-label">Menu</legend>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="card">
                                <img src="images/ayamsuwir.jpg" class="card-img-top" alt="Ayam Suwir Kemangi">
                                <div class="card-body text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="Menu[]" id="Menu1" value="Ayam Suwir Kemangi" <?= in_array("Ayam Suwir Kemangi", explode(", ", $data['Menu'])) ? 'checked' : '' ?>>
                                        <label class="form-check-label" for="Menu1">Ayam Suwir Kemangi</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <div class="card">
                                <img src="images/cumisambalado.jpg" class="card-img-top" alt="Cumi Balado">
                                <div class="card-body text-center">
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="Menu[]" id="Menu2" value="Cumi Balado" <?= in_array("Cumi Balado", explode(", ", $data['Menu'])) ? 'checked' : '' ?>>
                                        <label class="form-check-label" for="Menu2">Cumi Balado</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <div class="mb-3">
                    <label for="Porsi_ayam" class="form-label">Porsi Ayam Suwir Kemangi</label>
                    <input type="number" name="Porsi_ayam" id="Porsi_ayam" class="form-control" min="0" placeholder="Masukkan jumlah porsi (jika ada)" value="<?= $data['Porsi_ayam'] ?>">
                </div>
                <div class="mb-3">
                    <label for="Porsi_cumi" class="form-label">Porsi Cumi Balado</label>
                    <input type="number" name="Porsi_cumi" id="Porsi_cumi" class="form-control" min="0" placeholder="Masukkan jumlah porsi (jika ada)" value="<?= $data['Porsi_cumi'] ?>">
                </div>

                <div class="form-group">
                    <label class="col-md-2 col-form-label" for="metode_pembayaran">Metode Pembayaran</label>
                    <div class="col-md-20">
                        <select class="form-control" name="metode_pembayaran" id="metode_pembayaran">
                            <option value="<?= $data['metode_pembayaran'] ?>"><?= $data['metode_pembayaran'] ?></option>
                            <option value="Gopay">Gopay</option>
                            <option value="Tunai" <?= $data['metode_pembayaran'] == 'Tunai' ? 'selected' : '' ?>>Tunai</option>
                            <option value="Dana">Dana</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary w-100">Buat Pesanan</button>
            </form>
        <?php } ?>
    </div>

    <script src="dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>