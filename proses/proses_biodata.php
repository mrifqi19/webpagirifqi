<?php
error_reporting(0);
if (isset($_POST['tambah'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $tempat = $_POST['tempat'];
    $tl = $_POST['tl'];
    $hp = $_POST['hp'];
    $hobi1 = $_POST['hobi1'];
    $hobi2 = $_POST['hobi2'];
    $hobi3 = $_POST['hobi3'];
    $hobi4 = $_POST['hobi4'];
    $hobi5 = $_POST['hobi5'];
    
    echo "Nama Saya <b>$nama</b><br>";
    echo "Email Saya <b>$email</b><br>";
    echo "Saya Seorang <b>$jk</b><br>";
    echo "Alamat Saya di <b>$alamat</b><br>";
    echo "Tempat Lahir Saya di <b>$tempat</b><br>";
    echo "Tanggal Lahir Saya <b>$tl</b><br>";
    echo "Nomor HP Saya <b>$hp</b><br>";
    echo "Hobi Saya adalah <b>$hobi1 $hobi2 $hobi3 $hobi4 $hobi5</b><br>";
}
?>