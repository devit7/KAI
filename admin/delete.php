<?php
    include "./koneksi.php";
    $id = $_GET['id'];

$query="DELETE FROM user WHERE id='$id'";
$sql = mysqli_connect('localhost', 'root', '', 'mysite');

if (mysqli_query($sql, $query) ) {
    echo "berhasil tersimpan";
    header("location:info_user.php");
  }else{
    echo "gagal tersimpan".$query."<br>".mysqli_error($connect);
  }
?>