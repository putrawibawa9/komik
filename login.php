<?php
session_start();
include "koneksi.php";

$email    = $_POST['email'];
$password = md5($_POST['password']);

$query = "SELECT * FROM tb_admin WHERE email = '$email' AND password = '$password'";
$data = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($data);

//kalo ketemu = 1, klo engga ketemu = 0 datanya
$count = mysqli_num_rows($data);
//kalo ketemu $count = 1, klo ga ketemu $count = 0

//jika email atau passwordnya salah input
if($count == 0) {
    header("location:index.php?pesan=notfound");
    //ada satu field name "pesan", valuenya "notfound" menggunakan method get
} else {
    //buat session
    $_SESSION = array(
        'id_admin'  => $row['id_admin'],
        'email'     => $row['email'],
        'level'     => $row['level']
    );

    //buat cookies
    $expired = time() + 60 * 60;
    // 1:12 + 1jam -> 2:12 user harus relogin 
    setcookie("id_admin", $row['id_admin'], $exprired, "/");

    header("location:beranda.php");

}
?>