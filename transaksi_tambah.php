<?php
session_start();
include "koneksi.php";
cekSession();
cekCookies();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir-Pemesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
    <!-- navbar start -->
    <?php include "menu.php"?>
        <!-- navbar end -->

        <!-- formulir start -->
    <div class="container">
        <h3 class="text-center">Formulir Transaksi</h3>
        <br>
        <form action="transaksi_tambah_proses.php" method="post" enctype="multipart/form-data">
            <div class="mb-3 row">
                <label for="id_transaksi" class="col-sm-2 col-form-label">ID Transaksi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id_transaksi" name="id_transaksi" required>
                    </div>
                </div>
            <div class="mb-3 row">
                <label for="id_customer" class="col-sm-2 col-form-label">ID Customer</label>
                    <div class="col-sm-10">
                        <input type="id_customer" class="form-control" id="id_customer" name="id_customer" required>
                    </div>
                </div>
            <div class="mb-3 row">
                <label for="id_komik" class="col-sm-2 col-form-label">ID Komik</label>
                    <div class="col-sm-10">
                        <input type="id_komik" class="form-control" id="id_komik" name="id_komik" required>
                    </div>
                </div>
            <div class="mb-3 row">
                <label for="id_kasir" class="col-sm-2 col-form-label">ID Kasir</label>
                    <div class="col-sm-10">
                        <input type="id_kasir" class="form-control" id="id_kasir" name="id_kasir" required>
                    </div>
                </div>
            <div class="mb-3 row">
                <label for="jumlah_item" class="col-sm-2 col-form-label">Jumlah Item</label>
                    <div class="col-sm-10">
                        <input type="jumlah_item" class="form-control" id="jumlah_item" name="jumlah_item" required>
                    </div>
                </div>
            <div class="mb-3 row">
                <label for="total_harga" class="col-sm-2 col-form-label">Total Harga</label>
                    <div class="col-sm-10">
                        <input type="total_harga" class="form-control" id="total_harga" name="total_harga" required>
                    </div>
                </div>
            </div>
            <div class="mb-3 row">
                    <label for="date" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                         <button type="submit" class="btn btn-outline-primary">Kirim</button>
                         <button type="reset" class="btn btn-outline-secondary">Reset</button>
                    </div>
            </div>
            
        </form>
    </div>
        <!-- formulir end -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>