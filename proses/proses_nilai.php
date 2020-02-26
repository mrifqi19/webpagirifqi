<?php
include"../koneksi/koneksi.php";

if (isset($_POST['tambah'])){
    $id=uniqid();
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
    $nilai = ($harian*0.1) + ($quiz*0.15) + ($uts*0.35) + ($uas*0.4);

    if ($nilai <= $d)
        $grade="E";
    else if ($nilai <= $c)
        $grade="D";
    else if ($nilai <= $b)
        $grade="C";
    else if ($nilai <= $a) 
        $grade="B";
    else if ($nilai > $a)
        $grade="A";
    else
        echo "Nilai Belum Terisi";

    $submit=mysqli_query($koneksi,"INSERT INTO mahasiswa VALUES('$id','$nama','$nim','$jurusan','$harian','$quiz','$uts','$uas','$nilai','$grade')") or die (mysqli_error($submit));
    
    if ($submit){
        echo"
        <script>
            alert('Nilai Berhasil Diinput',window.location.href='../mysql_nilai.php')
        </script>";
    }
    elseif ($submit){
        echo "
        <script>
            alert('Nilai Gagal Diinput',window.location.href='../mysql_nilai.php')
        </script>";
    }
}
?>