<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan</title>
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon"  type="x-icon" href="images/20240919_171719.png">
</head>

<style>
    body {
        background-color: #f3a72c;
    }
</style>

<body class="bg-warning">
    <div class="container mt-5">   
        <h1 class="text-center mb-4">
        <img src="images/firebowl.png" alt="Logo" style="width: 100px; height: auto; vertical-align: middle;"> 
            Form Pemesanan</h1>
        <form action="proses_data.php" method="post">
            <div class="mb-3">
                <label for="Nama" class="form-label">Nama</label>
                <input type="text" name="Nama" id="Nama" class="form-control" placeholder="Masukkan nama lengkap Anda" required>
            </div>

            <div class="mb-3">
                <label for="No_telp" class="form-label">No Telpon</label>
                <input type="number" name="No_telp" id="No_telp" class="form-control" placeholder="Masukkan nomor telepon" required pattern="[0-9]{10,15}">
                <small class="form-text text-muted">Masukkan nomor telepon yang valid (10-15 digit).</small>
            </div>

            <div class="mb-3">
                <label for="Tanggal" class="form-label">Tanggal Pengiriman</label>
                <input type="date" name="Tanggal" id="Tanggal" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="Tempat_Pengiriman" class="form-label">Tempat Pengiriman</label>
                <input type="text" name="Tempat_Pengiriman" id="Tempat_Pengiriman" class="form-control" placeholder="Masukkan alamat pengiriman" required>
            </div>

            <fieldset class="mb-3">
                <legend class="form-label">Menu</legend>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="card">
                            <img src="images/ayamsuwir.jpg" class="card-img-top" alt="Ayam Suwir Kemangi">
                            <div class="card-body text-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="Menu[]" id="Menu1" value="Ayam Suwir Kemangi">
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
                                <input class="form-check-input" type="checkbox" name="Menu[]" id="Menu2" value="Cumi Balado">
                                    <label class="form-check-label" for="Menu2">Cumi Balado</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>

            <div class="mb-3">
                <label for="Porsi_ayam" class="form-label">Porsi Ayam Suwir Kemangi</label>
                <input type="number" name="Porsi_ayam" id="Porsi_ayam" class="form-control" min="0" value="0" placeholder="Masukkan jumlah porsi (jika ada)">
            </div>
            <div class="mb-3">
                <label for="Porsi_cumi" class="form-label">Porsi Cumi Balado</label>
                <input type="number" name="Porsi_cumi" id="Porsi_cumi" class="form-control" min="0" value="0" placeholder="Masukkan jumlah porsi (jika ada)">
            </div>

            <div class="form-group mb-3">
                <label class="col-md-2 col-form-label" for="metode_pembayaran">Metode Pembayaran</label>
                <div class="col-md-20">
                    <select class="form-control" name="metode_pembayaran" id="metode_pembayaran">
                    <option value="Gopay">Gopay</option>
                    <option value="Tunai" selected="selected">Tunai</option>
                    <option value="Dana">Dana</option>
                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-primary w-100">Buat Pesanan</button>
        </form>
    </div>

    <script src="dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>