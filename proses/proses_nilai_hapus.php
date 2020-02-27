<?php
include"../koneksi/koneksi.php";

    if (isset($_GET['id_mahasiswa'])){
        $id=$_GET['id_mahasiswa'];

        $delete=mysqli_query($koneksi,"DELETE FROM mahasiswa WHERE id_mahasiswa='$id'") or die (mysqli_error($delete));
        
        if ($delete){
            echo"
            <script>
                alert('Nilai Berhasil Dihapus',window.location.href='../mysql_nilai.php')
            </script>";
        }
        elseif ($delete){
            echo "
            <script>
                alert('Nilai Gagal Dihapus',window.location.href='../mysql_nilai.php')
            </script>";
        }
    }
?>