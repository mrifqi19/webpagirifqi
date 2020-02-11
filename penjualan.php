<hr>
<?php
    $jual=100000;
    $potongan=0.1;
    $beli=$jual-($jual*$potongan);
        echo "Harga Beli = Rp $beli,00";

    echo "<br>";
    echo "<hr>";

    $jumlah=10;
    if($jumlah % 2 == 0)
        echo "Halaman Genap";
    else
        echo "Halaman Ganjil";

    echo "<hr>";

    $jumlah=9;
    if($jumlah % 2 == 0)
        echo "Halaman Genap";
    else if($jumlah % 3 == 0)
        echo "Halaman Utama";
    else
        echo "Halaman Ganjil";
    
    echo "<hr>";

    $a=10;
    $b=5;
    $c=7;
    $d=8;
    $tambah=($a+$c);
    $kurang=($b-$d);
    $kali=($a*$d);
    $bagi=($a/$b);
    $hasil=14;
    if($hasil == 17)
        echo "Nilai Anda adalah $tambah";
    else if($hasil == -3)
        echo "Nilai Anda adalah $kurang";
    else if($hasil == 80)
        echo "Nilai Anda adalah $kali";
    else if($hasil == 2)
        echo "Nilai Anda adalah $bagi";
    else
        echo "Nilai Anda Belum Diinput";

    echo "<hr>";

    $nim = "1304101010060";
    $nama = "Muhammad Rifqi";
    $umur = "24 tahun";
    $IPK = "3.35";
    $status = 3;
        echo "NIM : $nim <br>";
        echo "Nama : $nama <br>";
        print "Umur : $umur <br>";
        printf ("Nilai : %.3f <br>",$IPK);
    if ($status == 1)
        echo "Status : Aktif";
    else if ($status == 2)
        echo "Status : Tidak Aktif";
    else if ($status == 3)
        echo "Status : Alumni";
    else if ($status == 4)
        echo "Status : Drop Out";

    echo "<hr>";

    define ("NAMA", "Muhammad Rifqi");
    define ("NIM", "1304101010060");
    define ("UMUR", "24 tahun");
    define ("NILAI", 3.35);
    define ("NOHP", "085277333197");

        echo "Nama : " .NAMA;
        echo "<br>NIM : " .NIM;
        echo "<br>Umur : " .UMUR;
        echo "<br>Nilai : " .NILAI;
        echo "<br>NO.HP : " .NOHP;

    echo "<hr>";

    $gaji = 1000000;
    $pajak = 0.025;
    $thp = $gaji-($gaji*$pajak);
        echo "Gaji sebelum dipotong pajak = Rp. $gaji <br>";
        echo "Gaji setelah dipotong pajak = Rp. $thp";

    echo "<hr>"; 

    $a = 5;
    $b = 4;
        echo "$a == $b : ".($a == $b);
        echo "<br>$a != $b : ".($a != $b);
        echo "<br>$a > $b : ".($a > $b);
        echo "<br>$a < $b : ".($a < $b);
        echo "<br>($a != $b) && ($a > $b) : ".(($a != $b) && ($a > $b));
        echo "<br>($a != $b) || ($a > $b) : ".(($a != $b) || ($a > $b));
    
    echo "<hr>";

    $senin = "Upacara";
    $selasa = "Kerja";
    $rabu = "Kerja Lagi";
    $kamis = "Cari Uang";
    $jumat = "Shalat Jumat";
    $sabtu = "Istirahat";
    $minggu = "Siap-siap Kerja";
    $hari = 3;
        if ($hari == "Upacara")
            echo "$senin";
        else if ($hari == "Kerja")
            echo "$selasa";
        else if ($hari == "Kerja Lagi")
            echo "$rabu";
        else if ($hari == "Cari Uang")
            echo "$kamis";
        else if ($hari == "Shalat Jumat")
            echo "$jumat";
        else if ($hari == "Istirahat")
            echo "$sabtu";
        else if ($hari == "Siap-siap Kerja")
            echo "$minggu";
        else
            echo "Tahun Baru";
    
    echo "<hr>";

    $nama = "Muhammad Rifqi";
    $nim = "1304101010060";
    $jurusan = "Teknik Sipil";
    $a = 83;
    $b = 72;
    $c = 65;
    $d = 50;
    $e = 0;
    $nilai = "50";
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