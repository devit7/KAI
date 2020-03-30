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
      }else{
        echo 'gagal tersimpan'.mysqli_connect_error();
      }
  }else{
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">KAI</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item ">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tiket.php">Tiket</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="booking.php">Booking</a>
            </li>
        
        </ul>

        <ul class="navbar-nav" >
            <li class="nav-item">
            <a class="nav-link" href="../index.php">logout</a>
            </li>
        </ul>
    </div>
    </nav>

                        <center>
                        <br>
                        <h1>TIKET ANDA</h1>
                            <table class="table-striped table-dark" width="80%" cellpadding="10" style="margin-top:50px;">
                                <thead>
                                    <tr>
                                    <th scope="col">STASIUN ASAL</th>
                                    <th scope="col">STASIUN tujuan</th>
                                    <th scope="col">TANGGAL BERANGKAT</th>
                                    <th scope="col">PENUMPANG</th>
                                    <th scope="col">KERETA</th>
                                    <th scope="col">JAM BERANGKAT</th>
                                    <th scope="col" colspan="2">AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include "koneksi.php";
                                    $query = "SELECT * FROM tiket";
                                    $sql = mysqli_query($connect,$query);
                                    while($data = mysqli_fetch_array($sql)){
                                        echo "<tr>";
                                        echo "<td>".$data['stasiun_asal']."</td>";
                                        echo "<td>".$data['stasiun_tujuan']."</td>";
                                        echo "<td>".$data['tanggal_keberangkatan']."</td>";
                                        echo "<td>".$data['penumpang']."</td>";
                                        echo "<td>".$data['kereta']."</td>";
                                        echo "<td>".$data['jam']."</td>";
                                        echo "<td><a href='edit.php?id_user=".$data['NIK']."'><button type='button'>Edit</submit></a></td>";
                                        echo "<td><a href='delete.php?id_user=".$data['NIK']."' onclick='return confirm(\"apakah anda yakin ingin menghapus data?\")'><button type='button'>Delete</submit></a></td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </center>

    </body>
</html>
