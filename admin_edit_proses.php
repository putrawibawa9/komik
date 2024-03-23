<?php
session_start();
include "koneksi.php";
cekSession();
cekCookies();

$email      =$_POST ['email'];
$password1      =md5($_POST ['password1']);
$level      =$_POST ['level'];

$query = "UPDATE tb_admin
            SET email  = '$email', 
                password = '$password',
                level = '$level',
            WHERE id_admin = '$id'";
mysqli_query($koneksi, $query);

header("location: admin.php");
        
?>