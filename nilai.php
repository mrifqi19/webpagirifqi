<?php
echo "<hr>";

$nama = "Muhammad Rifqi";
$nim = "1304101010060";
$jurusan = "Teknik Sipil";
$a = 83;
$b = 72;
$c = 65;
$d = 50;
$e = 0;
$nilai = "85";
    if ($nilai <= $d)
        echo "Grade yang Diperoleh oleh : $nama ($nim) Jurusan $jurusan adalah E";
    else if ($nilai <= $c)
        echo "Grade yang Diperoleh oleh : $nama ($nim) Jurusan $jurusan adalah D";
    else if ($nilai <= $b)
        echo "Grade yang Diperoleh oleh : $nama ($nim) Jurusan $jurusan adalah C";
    else if ($nilai <= $a) 
        echo "Grade yang Diperoleh oleh : $nama ($nim) Jurusan $jurusan adalah B";
    else if ($nilai > $a)
        echo "Grade yang Diperoleh oleh : $nama ($nim) Jurusan $jurusan adalah A";
    else
        echo "Nilai Belum Terisi";

echo "<hr>";

$nama = "Muhammad Rifqi";
$nim = "1304101010060";
$jurusan = "Teknik Sipil";
$harian = 80;
$quis = 80;
$uts = 65;
$uas = 85;
$a = 83;
$b = 72;
$c = 65;
$d = 50;
$e = 0;
$nilai = ($harian*0.1) + ($quis*0.15) + ($uts*0.35) + ($uas*0.4);
    if ($nilai <= $d)
        echo "Dengan Jumlah Nilai $nilai, $nama ($nim) Jurusan $jurusan Memperoleh Grade E";
    else if ($nilai <= $c)
        echo "Dengan Jumlah Nilai $nilai, $nama ($nim) Jurusan $jurusan Memperoleh Grade D";
    else if ($nilai <= $b)
        echo "Dengan Jumlah Nilai $nilai, $nama ($nim) Jurusan $jurusan Memperoleh Grade C";
    else if ($nilai <= $a) 
        echo "Dengan Jumlah Nilai $nilai, $nama ($nim) Jurusan $jurusan Memperoleh Grade B";
    else if ($nilai > $a)
        echo "Dengan Jumlah Nilai $nilai, $nama ($nim) Jurusan $jurusan Memperoleh Grade A";
    else
        echo "Nilai Belum Terisi";
    
echo "<hr>";


?>