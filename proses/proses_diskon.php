<?php
if (isset($_POST['tambah'])){
    $harga=$_POST['harga'];
    $diskon=$_POST['diskon'];
    $syarat=400000;
    $total=$harga-$harga*$diskon/100;
}

if ($harga>=$syarat)
    echo "Anda mendapat diskon $diskon%, harga setelah diskon $total";
else
    echo "Anda tidak mendapat diskon";

?>