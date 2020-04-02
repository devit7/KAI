<?php
    include "./koneksi.php";

    $stasiun_asal = $_POST['stasiun_asal'];
    $stasiun_tujuan = $_POST['stasiun_tujuan'];
    $tanggal_keberangkatan = $_POST['tanggal_keberangkatan'];
    $penumpang = $_POST['penumpang'];
    $kereta = $_POST['kereta'];
    $jam = $_POST['jam'];
    
    $query = "INSERT INTO tiket ( stasiun_asal, stasiun_tujuan, tanggal_keberangkatan, penumpang, kereta, jam) VALUES ('$stasiun_asal', '$stasiun_tujuan', '$tanggal_keberangkatan','$penumpang','$kereta','$jam')";
    
    $sql = mysqli_connect('localhost', 'root', '', 'mysite');

    if ( mysqli_query($sql, $query) ) {
      echo "Berhasil tambah data";
      header("Location: tiket.php");
    }else{
      echo "gagal tambah data".$query."<br>".mysqli_error($connect);
    }
?>