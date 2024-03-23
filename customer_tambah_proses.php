<?php
session_start();
include "koneksi.php";
cekSession();
cekCookies();

$id_customer     = $_POST['id_customer'];
$nama       = $_POST['nama'];
$no_hp      = $_POST['no_hp'];
$email      =$_POST ['email'];

$query  = "INSERT INTO tb_customer (id_customer, nama, no_hp,  email)
            VALUES ('$id_customer','$nama','$no_hp','$email')";
mysqli_query($koneksi, $query);

header("location: customer.php");
?>