<?php
include"../koneksi/koneksi.php";

    if(isset($_POST['login'])){
        $username=$_POST['username'];
        $password=$_POST['password'];

        // query
        $login=mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' and password='$password'");
        // pengecekan
        $cek=mysqli_num_rows($login);
        // menampilkan definisi data
        $data=mysqli_fetch_assoc($login);

        if($cek>0){
            if($data['level']=="admin"){
                $_SESSION['username']=$data['username'];
                $_SESSION['level']=$data['level'];
                $_SESSION['status']='login';
                header('location:../index.php');
            }
            elseif($data['level']=="user"){
                $_SESSION['username']=$data['username'];
                $_SESSION['level']=$data['level'];
                $_SESSION['status']='login';
                header('location:../bootstrap_nilai.php');
            }
        }
        else{
        echo"Login Gagal";
        }
    }
?>