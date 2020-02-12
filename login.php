<?php
$user = "rifqi";
$pass = "1234";
if ($user == "muhammad" && $pass == "1212")
    echo "Admin";
elseif ($user == "rifqi" && $pass == "1234")
    echo "Login Berhasil";
else
    echo "Login Gagal";

echo "<hr>";

$user = "1";
if (isset($user))
    echo "Variabel tidak ada/belum terbentuk";
else
    echo "Variabel ada";
?>