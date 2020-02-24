<?php
include"../koneksi/koneksi.php";

    if(isset($_POST['signup'])){
        $id=$_POST['id_user'];
        $nama_user=$_POST['nama_user'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $email=$_POST['email'];
        $level=$_POST['level'];

        // query
        $signup=mysqli_query($koneksi,"INSERT INTO user VALUES ('$id','$nama_user','$username','$password','$email','$level')") or die (mysqli_error($input_query));
        // pengecekan
        $cek=mysqli_num_rows($signup);
        // menampilkan definisi data
        $data=mysqli_fetch_assoc($signup);

        if($input_query){
            echo"Account Successfully Created";
            // <div class="alert alert-success" role="alert">
            //     <h4 class="alert-heading">Account Successfully Created!</h4>
            //     <hr>
            //     <p class="mb-0">Account has been created, please log in to see your profile</p>
            // </div>
        }
        else{
        echo"Login Gagal";
        }
    }
?>