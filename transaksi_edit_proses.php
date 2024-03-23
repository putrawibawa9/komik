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

$query = "UPDATE tb_pesan
            SET id_transaksi = '$id_transaksi',
                id_customer  = '$id_customer',
                id_komik  = '$id_komik',
                id_kasir  = '$id_kasir',
                jumlah_item  = '$jumlah_item',
                total_harga  = '$total_harga'
            WHERE id_transaksi = '$id'";
mysqli_query($koneksi, $query);

header("location: transaksi.php");
        
?>