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
    <title>Formulir-Kasir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
    <!-- navbar start -->
    <?php include "menu.php"?>
        <!-- navbar end -->

        <!-- formulir start -->
    <div class="container">
        <h3 class="text-center">Formulir Kasir</h3>
        <br>

        <?php $id = $_GET['id'];
        $query = "SELECT * FROM tb_kasir WHERE id_kasir = '$id'";
        $data = mysqli_query($koneksi,$query);
        $row = mysqli_fetch_assoc($data)
        ?>

        <form action="kasir_edit_proses.php" method="post" enctype="multipart/form-data">
            <div class="mb-3 row">
                <label for="id_kasir" class="col-sm-2 col-form-label">ID Kasir</label>
                    <div class="col-sm-10">
                        <input type="id_kasir" value =" <?= $row['id_kasir']?>"  class="form-control" id="id_kasir" name="id_kasir" required>
                    </div>
                </div>
            <div class="mb-3 row">
                <label for="nama_kasir" class="col-sm-2 col-form-label">Nama Kasir</label>
                    <div class="col-sm-10">
                        <input type="text" value =" <?= $row['nama_kasir']?>" class="form-control" id="nama_kasir" name="nama_kasir" required>
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