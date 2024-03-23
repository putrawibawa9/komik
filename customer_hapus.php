<?php
session_start();
include "koneksi.php";
cekSession();
cekCookies();

$id = $_GET['id'];

$query = "DELETE FROM tb_customer WHERE id_customer = '$id'";
mysqli_query($koneksi,$query);

header("location: customer.php");
?>