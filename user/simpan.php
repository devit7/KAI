<?php
if (isset($_POST['submit'])) {
    include "./koneksi.php";
    $stasiun_asal=$_POST['stasiun_asal'];
    $stasiun_tujuan=$_POST['stasiun_tujuan'];
    $tanggal_keberangkatan=$_POST['tanggal_keberangkatan'];
    $penumpang=$_POST['penumpang'];
    $kereta=$_POST['kereta'];
    $jam=$_POST['jam'];
    
    $sql = mysqli_connect('localhost', 'root', '', 'mysite');
    $query = "INSERT INTO tiket (stasiun_asal, stasiun_tujuan, tanggal_keberangkatan, penumpang, kereta, jam) VALUES ('$stasiun_asal', '$stasiun_tujuan', '$tanggal_keberangkatan','$penumpang','$kereta''$jam')";
    
    if ( mysqli_query($sql, $query) ) {
      echo'berhasil tersimpan';
      eader("location:tiket.php");
      }else{
        echo 'gagal tersimpan'.mysqli_connect_error();
      }
  }else{
  echo"tidak menekan submit";
  }
?>