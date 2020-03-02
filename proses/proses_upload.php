<?php
    if(isset($_POST['upload'])){
        $nama_file=$_FILES['file']['name'];
        $nama=explode(".",$nama_file);
        $ekstensi=end($nama);
        $nama_temp=$_FILES['file']['tmp_name'];
        $md5file=md5($nama_file).".".$ekstensi;

        $lokasi_upload="../upload/";

        $fungsi_upload=move_uploaded_file($nama_temp,$lokasi_upload.$md5file);

        if($fungsi_upload){
            echo"File Berhasil Di Upload";
        }
        else{
            echo"File Gagal Di Upload";
        }
    }

?>