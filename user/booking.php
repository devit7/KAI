<?php

$db=mysqli_connect("localhost","root","","mysite");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style type="text/css" >
    @import "../css/booking.css";
    </style>
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

        <div class="kotak">
            <div class="pemesanan">
                <h4>PEMESANAN TIKET</h4>
            </div>
                <form action="simpan.php" method="post">
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <img src="../assets/icons/geo-alt.svg" alt="" width="32" height="32" title="Stasiun Asal">
                            <select class="custom-select" id="validationDefault04" name="stasiun_asal" value="<?=isset($_POST['stasiun_asal']) ? $_POST['stasiun_asal'] : ''?>"  required>
                                <option selected disabled >Stasiun Asal</option>
                                <option>malang baru</option>
                                <option>malang kota lama</option>
                                <option>mojokerto</option>
                                <option>bojonegoro</option>
                                <option>sidoarjo</option>
                            </select>
                            
                            <img src="../assets/icons/geo-alt.svg" alt="" width="32" height="32" title="Stasiun Tujuan">
                            <select class="custom-select" id="validationDefault04" name="stasiun_tujuan" value="<?=isset($_POST['stasiun_tujuan']) ? $_POST['stasiun_tujuan'] : ''?>"  required>
                                <option selected disabled >Stasiun Tujuan</option>
                                <option>malang baru</option>
                                <option>malang kota lama</option>
                                <option>mojokerto</option>
                                <option>bojonegoro</option>
                                <option>sidoarjo</option>
                            </select>

                            <img src="../assets/icons/Calendar.svg" alt="" width="32" height="32" title="Tanggal Keberangkatan">
                            <input type="date" class="form-control" id="validationDefaultUsername" placeholder="Tanggal Berangkat" aria-describedby="inputGroupPrepend2" name="tanggal_keberangkatan" value="<?=isset($_POST['tanggal_keberangkatan']) ? $_POST['tanggal_keberangkatan'] : ''?>" required>
                            
                            <img src="../assets/icons/people-fill.svg" alt="" width="32" height="32" title="Penumpang">
                            <select class="custom-select" id="validationDefault04" name="penumpang" value="<?=isset($_POST['penumpang']) ? $_POST['penumpang'] : ''?>"  required>
                                <option selected disabled >Penumpang</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>

                            <img src="../assets/icons/terminal.svg" alt="" width="32" height="32" title="kereta">
                            <select class="custom-select" id="validationDefault04" name="kereta" value="<?=isset($_POST['kereta']) ? $_POST['kereta'] : ''?>" required>
                                <option selected disabled >Kereta</option>
                                <option>mutiara sentosa</option>
                                <option>majapahit</option>
                                <option>kertajaya</option>
                                <option>jayabaya</option>
                            </select>

                            <img src="../assets/icons/clock.svg" alt="" width="32" height="32" title="jam">
                            <select class="custom-select" id="validationDefault04" name="jam" value="<?=isset($_POST['jam']) ? $_POST['jam'] : ''?>" required>
                                <option selected disabled >Jam</option>
                                <option>04 00</option>
                                <option>09 00</option>
                                <option>12 30</option>
                                <option>19 42</option>
                            </select>

                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary" value="submit" name="submit" >
                </form>
        </div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>