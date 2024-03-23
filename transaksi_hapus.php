<?php
session_start();
include "koneksi.php";
cekSession();
cekCookies();

$id = $_GET['id'];

$query = "DELETE FROM tb_transaksi WHERE id_transaksi = '$id'";
mysqli_query($koneksi,$query);

header("location: transaksi.php");
?>