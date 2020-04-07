    <?php

    $db=mysqli_connect("localhost","root","","mysite");

    ?>
    <?php
    include "./koneksi.php";
    $query="SELECT * FROM tiket";
    $result = mysqli_query($connect,$query);
    $num=mysqli_num_rows($result);
    ?>
    <?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>tiket</title>
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
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tiket
                        </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Aktif</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="tiket.php">Menunggu</a>
                    </div>
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
            <div style="margin-left:auto;color:white;">
                                        <?php
                                        include "./koneksi.php";
                                        echo $_SESSION['username'];
                                        ?>
            </div>
            <div class="dropleft" >
                <?php
                    $user=$_SESSION['username'];
                    $query = $connect->query("SELECT * FROM user WHERE username LIKE '%$user%'");
                    $data = mysqli_fetch_assoc($query);
                    if($data['gambar'] != ""){
                        echo "<img style='height: 1cm;width: 1cm;' src='../uploads/".$data['gambar']."' alt='' class=' dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' id='dropdownMenu2' srcset='' name='gambar' hspace='5'>";    
                    }else{
                        echo '<img style="height: 1cm;width: 1cm;" src="../gambar/fotokosong.png" alt="" class=" dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dropdownMenu2" srcset="" type="file" name="gambar" hspace="5">';
                    }
                ?>
                <form class="dropdown-menu p-4" action="aksi.php" method="POST" enctype="multipart/form-data" style="margin-top:45px;">
                    <div class="form-group">
                        <label for="exampleDropdownFormEmail2">Masukan Gambar Profile</label>
                        <input type="file" name="gambare" value="<?=isset($_POST['gambare']) ? $_POST['gambare'] : ''?>" >
                    </div>
                    <button type="submit" name="kirim" class="btn btn-primary">kirim</button>
                </form>
            </div>
        </div>
        </nav>

                            <center>
                            <br>
                            <h1>TIKET ANDA</h1>
                            <div style="margin-top:50px;">
                                <table class="table-striped table-dark" width="80%" cellpadding="10" >
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
                                        include "./koneksi.php";
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
                                            echo "<td><a href='delete.php?id_tiket=".$data['id_tiket']."' onclick='return confirm(\"apakah anda yakin ingin menghapus data?\")'><img src='../gambar/delete.webp' alt='' width='32' height='32' title='DELETE'></a></td>";
                                            echo "<td><a href='bayar.php?id_tiket=".$data['id_tiket']."' onclick='return confirm(\"yakin anda ingin membayar ?\")'><img src='../gambar/transaksi.png' alt='' width='32' height='32' title='BAYAR'></a></td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                </div>
                            </center>

        </body>
    </html>
