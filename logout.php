<?php
session_start();
session_unset();
session_destroy();

setcookie("id_admin", "", 0, "/");

header("location:index.php");

?>