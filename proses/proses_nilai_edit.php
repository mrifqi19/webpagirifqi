<?php
include"../koneksi/koneksi.php";

    if (isset($_GET['update'])){
        $id=$_GET['id'];
        $nama=$_GET['nama'];
        $nim=$_GET['nim'];
        $jurusan=$_GET['jurusan'];
        $harian=$_GET['harian'];
        $quiz=$_GET['quiz'];
        $uts=$_GET['uts'];
        $uas=$_GET['uas'];
        $a=83;
        $b=72;
        $c=65;
        $d=50;
        $nilai=($harian*0.1) + ($quiz*0.15) + ($uts*0.35) + ($uas*0.4);

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

        $update=mysqli_query($koneksi,"UPDATE mahasiswa SET nama='$nama',nim='$nim',jurusan='$jurusan',harian='$harian',quiz='$quiz',uts='$uts',uas='$uas',nilai='$nilai',grade='$grade' WHERE id_mahasiswa='$id'") or die (mysqli_error($update));
        
        if ($update){
            echo"
            <script>
                alert('Nilai Berhasil Diedit',window.location.href='../mysql_nilai.php')
            </script>";
        }
        elseif ($update){
            echo "
            <script>
                alert('Nilai Gagal Diedit',window.location.href='../mysql_nilai_edit.php')
            </script>";
        }
    }
?>