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
    <title>Formulir-Komik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
    <!-- navbar start -->
    <?php include "menu.php"?>
        <!-- navbar end -->

        <!-- formulir start -->
    <div class="container">
        <h3 class="text-center">Formulir Customer</h3>
        <br>
        <form action="customer_tambah_proses.php" method="post" enctype="multipart/form-data">
            <div class="mb-3 row">
                <label for="id_customer" class="col-sm-2 col-form-label">ID Customer</label>
                    <div class="col-sm-10">
                        <input type="id_customer" class="form-control" id="id_customer" name="id_customer" required>
                    </div>
                </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                </div>
            <div class="mb-3 row">
                <label for="no_hp" class="col-sm-2 col-form-label">No Handphone</label>
                    <div class="col-sm-10">
                        <input type="no_hp" class="form-control" id="no_hp" name="no_hp" required>
                    </div>
                </div>
            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" required>
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