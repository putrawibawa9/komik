<?php
session_start();
include "koneksi.php";
cekSession();
cekCookies();

$id_transaksi      = $_POST['id_transaksi'];
$id_customer      = $_POST['id_customer'];
$id_komik     = $_POST['id_komik'];
$id_kasir      =$_POST ['id_kasir'];
$jumlah_item     =$_POST ['jumlah_item'];
$total_harga      =$_POST ['total_harga'];

$query  = "INSERT INTO tb_transaksi (id_transaksi, id_customer, id_komik, id_kasir, jumlah_item, total_harga)
            VALUES ('$id_transaksi','$id_customer','$id_komik','$id_kasir','$jumlah_item','$total_harga')";
mysqli_query($koneksi, $query);

header("location: transaksi.php");
?>