<?php
include"../koneksi/koneksi.php";
error_reporting(0);

    if (isset($_POST['tambah'])){
        $id=uniqid();
        $nama = $_POST['nama'];

        $foto=$_FILES['foto']['name'];
        $nama_foto=explode(".",$foto);
        $ekstensi=end($nama_foto);
        $foto_temp=$_FILES['foto']['tmp_name'];
        $md5foto=md5($foto).".".$ekstensi;
        
        $tempat_lahir = $_POST['tempat'];
        $tanggal_lahir = $_POST['tanggal'];
        $jk = $_POST['jk'];
        $alamat = $_POST['alamat'];
        $email = $_POST['email'];
        $hp = $_POST['hp'];
        $hobi1 = $_POST['hobi1'];
        $hobi2 = $_POST['hobi2'];
        $hobi3 = $_POST['hobi3'];
        $hobi4 = $_POST['hobi4'];
        $hobi5 = $_POST['hobi5'];
        $hobi = ($hobi1.','.$hobi2.','.$hobi3.','.$hobi4.','.$hobi5);

        $submit=mysqli_query($koneksi,"INSERT INTO biodata VALUES('$id','$nama','$md5foto','$tempat_lahir','$tanggal_lahir','$jk','$alamat','$email','$hp','$hobi')") or die (mysqli_error($submit));
        
        if ($submit){
            echo"
            <script>
                alert('Biodata Berhasil Diinput',window.location.href='../mysql_biodata.php')
            </script>";
        }
        elseif ($submit){
            echo "
            <script>
                alert('Biodata Gagal Diinput',window.location.href='../mysql_biodata.php')
            </script>";
        }
    }
?>