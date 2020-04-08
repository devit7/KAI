<?php
if (isset($_POST['submit'])) {
include "./koneksi.php";
    $id=$_POST['id'];
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $alamat=$_POST['alamat'];
    $no_hp=$_POST['no_hp'];

    mysqli_query($connect,"UPDATE user SET nama='$nama',username='$username', password='$password', alamat='$alamat', no_hp='$no_hp'  where id='$id' ");

        header("location:index.php");

    }else{
        echo"gk mencet submit";
        }
?>