<?php
error_reporting(0);
if (isset($_POST['tambah'])){
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $harian = $_POST['harian'];
    $quiz = $_POST['quiz'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $a = 83;
    $b = 72;
    $c = 65;
    $d = 50;
    $e = 0;
    $nilai = ($harian*0.1) + ($quiz*0.15) + ($uts*0.35) + ($uas*0.4);
    
    echo "Nama Saya $nama<br>";
    echo "$nim<br>";
    echo "Jurusan $jurusan<br>";
    if ($nilai <= $d)
        echo "Dengan Jumlah Nilai $nilai, Memperoleh Grade E";
    else if ($nilai <= $c)
        echo "Dengan Jumlah Nilai $nilai, Memperoleh Grade D";
    else if ($nilai <= $b)
        echo "Dengan Jumlah Nilai $nilai, Memperoleh Grade C";
    else if ($nilai <= $a) 
        echo "Dengan Jumlah Nilai $nilai, Memperoleh Grade B";
    else if ($nilai > $a)
        echo "Dengan Jumlah Nilai $nilai, Memperoleh Grade A";
    else
        echo "Nilai Belum Terisi";
}
?>