<?php
include"../koneksi/koneksi.php";

    if (isset($_POST['tambah'])){
        $id=uniqid();
        $nama_barang=$_POST['barang'];
        $harga_barang=$_POST['harga'];
        $stok_barang=$_POST['stok'];
        $kategori_barang=$_POST['kategori'];

        $input=mysqli_query($koneksi,"INSERT INTO barang VALUES('$id','$nama_barang','$harga_barang','$stok_barang','$kategori_barang')") or die (mysqli_error($input));

        if ($input){
            echo"
            <script>
                alert('Barang Berhasil Diinput',window.location.href='../diskon_mysql.php')
            </script>";
        }
        elseif ($input){
            echo "
            <script>
                alert('Barang Gagal Diinput',window.location.href='../diskon_mysql.php')
            </script>";
        }
    }
?>