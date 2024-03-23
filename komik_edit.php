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
        <h3 class="text-center">Formulir Komik</h3>
        <br>
        <?php $id = $_GET['id'];
        $query = "SELECT * FROM tb_komik WHERE id_komik = '$id'";
        $data = mysqli_query($koneksi,$query);
        $row = mysqli_fetch_assoc($data)
        ?>

        <form action="komik_edit_proses.php" method="post" enctype="multipart/form-data">
        <div class="mb-3 row">
                <label for="id_komik" class="col-sm-2 col-form-label">ID Komik</label>
                    <div class="col-sm-10">
                        <input type="id_komik" class="form-control" value =" <?= $row['id_komik']?>" id="id_komik" name="id_komik" required>
                    </div>
                </div>
            <div class="mb-3 row">
                <label for="judul_komik" class="col-sm-2 col-form-label">Judul Komik</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value =" <?= $row['judul_komik']?>" id="judul_komik" name="judul_komik" required>
                    </div>
                </div>
            <div class="mb-3 row">
                <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                    <div class="col-sm-10">
                        <input type="penulis" class="form-control" value =" <?= $row['penulis']?>" id="penulis" name="penulis" required>
                    </div>
                </div>
            <div class="mb-3 row">
                <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                    <div class="col-sm-10">
                        <input type="penerbit" class="form-control" value =" <?= $row['penerbit']?>" id="penerbit" name="penerbit" required>
                    </div>
                </div>
                <div class="mb-3 row">
                <label for="tahun" class="col-sm-2 col-form-label">Tahun Terbit</label>
                    <div class="col-sm-10">
                        <input type="tahun" class="form-control" value =" <?= $row['tahun']?>" id="tahun" name="tahun" required>
                    </div>
                </div>
            <div class="mb-3 row">
                <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="harga" class="form-control" value =" <?= $row['harga']?>" id="harga" name="harga" required>
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