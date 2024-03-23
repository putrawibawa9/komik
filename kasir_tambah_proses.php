<?php
session_start();
include "koneksi.php";
cekSession();
cekCookies();

$id_kasir    = $_POST['id_kasir'];
$nama_kasir    = $_POST['nama_kasir'];

$query  = "INSERT INTO tb_kasir(id_kasir, nama_kasir)
            VALUES ('$id_kasir','$nama_kasir')";
mysqli_query($koneksi, $query);

header("location: kasir.php");
?>