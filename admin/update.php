<?php
include "./koneksi.php";
    $id=$_GET['id'];
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $alamat=$_POST['alamat'];
    $no_hp=$_POST['no_hp'];

    $query="UPDATE user SET nama='$nama',username='$username', password='$password', alamat='$alamat', no_hp='$no_hp'  where id='$id' ";
    $sql = mysqli_connect('localhost', 'root', '', 'mysite');
   
    if ( mysqli_query($sql, $query) ) {
        echo 'berhasil tersimpan';
        header("location:index.php");
      }else{
        echo 'gagal tersimpan'.mysqli_error($connect);
      }
?>