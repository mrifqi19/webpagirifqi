<?php
$hari = "Mon";
switch ($hari){
    case "Mon" : $hari = "Minggu"; break;
    case "Sun" : $hari = "Senin"; break;
    case "Tue" : $hari = "Selasa"; break;
    case "Wed" : $hari = "Rabu"; break;
    case "Thu" : $hari = "Kamis"; break;
    case "Fri" : $hari = "Jumat"; break;
    case "Sat" : $hari = "Sabtu"; break;
    default : $hari = "Libur";
}
echo "Hari ini hari <b>$hari</b>";

echo "<hr>";

$tahun = 1995;
$kabisat = ($tahun%4 == 0) ? "KABISAT" : "BUKAN KABISAT";
echo "Tahun <b>$tahun</b> $kabisat";

echo "<hr>";

$nama = "Muhammad Rifqi";
$nim = "1304101010060";
$jurusan = "Teknik Sipil";
$score = 80;
$harian = ($score*0.1);
$quis = ($score*0.15);
$uts = ($score*0.35);
$uas = ($score*0.4);
$a = 83;
$b = 72;
$c = 65;
$d = 50;
$e = 0;
$nilai = ($harian + $quis + $uts + $uas);
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


?>