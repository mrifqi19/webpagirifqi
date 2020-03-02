<?php
include"../koneksi/koneksi.php";

    if(isset($_POST['signup'])){
        $id=uniqid();
        $nama_user=$_POST['nama_user'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $email=$_POST['email'];
        $level=$_POST['level'];

        // query
        $signup=mysqli_query($koneksi,"INSERT INTO user VALUES('$id','$nama_user','$username','$password','$email','$level')") or die (mysqli_error($signup));
    
        
        if($signup){
            echo"
            <script>
                alert('Account Successfully Created',window.location.href='../mysql_login.php')
            </script>";
            // echo"Account Successfully Created";
        }
        else{
        echo"Login Gagal";
        }
    }
?>