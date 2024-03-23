<?php
session_start();
include "koneksi.php";
cekSession();
cekCookies();

$id_komik      = $_POST['id_komik'];
$judul_komik       = $_POST['judul_komik'];
$penulis  = $_POST['penulis'];
$penerbit      =$_POST ['penerbit'];
$tahun     = $_POST['tahun'];
$harga     = $_POST['harga'];

$query = "UPDATE tb_komik
            SET id_komik  = '$id_komik', 
                judul_komik = '$judul_komik',
                penulis  = '$penulis',
                penerbit  = '$penerbit',
                tahun  = '$tahun',
                harga  = '$harga'
            WHERE id_komik = '$id'";
mysqli_query($koneksi, $query);

header("location: komik.php");
        
?>