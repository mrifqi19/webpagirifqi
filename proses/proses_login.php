<?php
session_start();
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
                echo"
                <script>
                    alert('Anda Telah Login',window.location.href='../admin/index.php')
                </script>";
            // header('location:../index.php');
            }
            elseif($data['level']=="user"){
                $_SESSION['username']=$data['username'];
                $_SESSION['level']=$data['level'];
                $_SESSION['status']='login';
                echo"
                <script>
                    alert('Anda Telah Login',window.location.href='../home.php')
                </script>";
                // header('location:../mysql_nilai.php');
            }
        }
        else{
            echo"
            <script>
                alert('Username dan Password Salah',window.location.href='../index.php')
            </script>";
        }
    }
?>