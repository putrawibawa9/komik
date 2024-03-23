<?php
session_start();
include "koneksi.php";
cekSession();
cekCookies();

$id = $_GET['id'];

$query = "DELETE FROM tb_komik WHERE id_komik = '$id'";
mysqli_query($koneksi,$query);

header("location: komik.php");
?>