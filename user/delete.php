<?php
    include "./koneksi.php";
    $id_tiket = $_GET['id_tiket'];

$query="DELETE FROM penduduk WHERE id_tiket='$id_tiket'";
$sql = mysqli_connect('localhost', 'root', '', 'mysite');

if (mysqli_query($sql, $query) ) {
    echo 'berhasil tersimpan';
    header("location:tiket.php");
  }else{
    echo 'gagal tersimpan'.mysqli_connect_error();
  }
?>