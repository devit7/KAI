<?
session_start();
if(!isset($_GET['id'])){
  header("Location: ./index.php");
}
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
    <title>home</title>
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
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="../gambar/tampilan1.jpg" class=" w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="../gambar/tampilan2.jpg" class=" w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="../gambar/tampilan3.jpg" class=" w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

        <div class="bg-secondary">Upaya pencegahan virus CORONA terus di tingkatkan</div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>