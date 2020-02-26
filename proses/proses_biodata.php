<?php
include"../koneksi/koneksi.php";
error_reporting(0);

    if (isset($_POST['tambah'])){
        $id=uniqid();
        $nama = $_POST['nama'];
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

        $submit=mysqli_query($koneksi,"INSERT INTO biodata VALUES('$id','$nama','$tempat_lahir','$tanggal_lahir','$jk','$alamat','$email','$hp','$hobi1 $hobi2 $hobi3 $hobi4 $hobi5')") or die (mysqli_error($submit));
        
        if ($submit){
            echo"
            <script>
                alert('Biodata Berhasil Diinput',window.location.href='../biodata_mysql.php')
            </script>";
        }
        elseif ($submit){
            echo "
            <script>
                alert('Biodata Gagal Diinput',window.location.href='../biodata_mysql.php')
            </script>";
        }
    }
?>