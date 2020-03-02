<?php
session_start();
include"../koneksi/koneksi.php";
session_destroy();
header('location:../mysql_login.php');


?>