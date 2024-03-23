<?php
session_start();
include "koneksi.php";
cekSession();
cekCookies();

$id = $_GET['id'];

$query = "DELETE FROM tb_admin WHERE id_admin = '$id'";
mysqli_query($koneksi,$query);

header("location: admin.php");
?>