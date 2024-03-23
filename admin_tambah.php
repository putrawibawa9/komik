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
        <br>
        <h3 class="text-center">Update Data Pengguna</h3>
        <br>
        <form action="admin_tambah_proses.php" method="post" enctype="multipart/form-data">
            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Email Pengguna</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>
            <div class="mb-3 row">
                <label for="password1" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="password1" name="password1"  required 
                        minlength="3">
                    </div>
                </div>
            <div class="mb-3 row">
                <label for="password2" class="col-sm-2 col-form-label">Ulangi Password</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="password2" name="password2"  required 
                        minlength="3">
                        <span id="cekPassword"></span>
                    </div>
                </div>
                <select class="form-select" aria-label="Default select example" id="id_matkul" name="id_matkul" required>
                        <option value=" ">- Pilih Level Pengguna -</option>
                        <option value="0">Admin</option>
                        <option value="1">Pegawai</option>
                       
                    </select>
           
            <div class="mb-3 row">
                    <label for="date" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                         <button type="submit" class="btn btn-outline-primary">Kirim</button>
                         <button type="reset" class="btn btn-outline-secondary">Reset</button>
                    </div>
            </div>
    <script>
        document.getElementById("password2").addEventListener("input", function() {
        var password1 = document.getElementById("password1").value;
        var password2 = document.getElementById("password2").value;
        var passwordMatch = document.getElementById("cekPassword");
        if (password1 !== password2) {
        passwordMatch.innerHTML = "Password tidak cocok!";
        passwordMatch.style.color = "red";
        } else {
        passwordMatch.innerHTML = "Password cocok";
        passwordMatch.style.color = "green";
        }
        });
        </script>

        <!-- formulir end -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>