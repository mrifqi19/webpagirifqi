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
    $hasil=2x;
    if($hasil == 17)
        echo "Nilai Anda adalah $tambah";
    else if($hasil == -3)
        echo "Nilai Anda adalah $kurang";
    else if($hasil == 80)
        echo "Nilai Anda adalah $kali";
    else if($hasil == 2)
        echo "Nilai Anda adalah $bagi";
?>