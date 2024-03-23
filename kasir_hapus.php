<?php
session_start();
include "koneksi.php";
cekSession();
cekCookies();

$id = $_GET['id'];

$query = "DELETE FROM tb_kasir WHERE id_kasir = '$id'";
mysqli_query($koneksi,$query);

header("location: kasir.php");
?>