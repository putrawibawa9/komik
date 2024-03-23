<?php
session_start();
include "koneksi.php";
cekSession();
cekCookies();

$id_komik      = $_POST['id_komik'];
$judul_komik       = $_POST['judul_komik'];
$penulis     = $_POST['penulis'];
$penerbit      =$_POST ['penerbit'];
$tahun     = $_POST['tahun'];
$harga     = $_POST['harga'];

$query  = "INSERT INTO tb_komik (id_komik, judul_komik, penulis, penerbit, tahun, harga)
            VALUES ('$id_komik','$judul_komik','$penulis','$penerbit','$tahun','$harga')";
mysqli_query($koneksi, $query);

header("location: komik.php");
?>