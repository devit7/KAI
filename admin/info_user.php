<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KAI</title>
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
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Daftar Booking
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="menunggu.php">Belum Bayar</a>
                    <a class="dropdown-item" href="aktif.php">Sudah bayar</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="info_user.php">Info user</a>
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
                            <h1>DATA AKUN USER</h1>
                            <div style="margin-top:30px;margin-left:80px;margin-right:80px;text-align:center;box-shadow: 0 0 10px gray;" >
                                <table class="table table-striped" width="" cellpadding="" >
                                <thead>
                                    <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">NAMA</th>
                                    <th scope="col">USERNAME</th>
                                    <th scope="col">PASSWORD</th>
                                    <th scope="col">ALAMAT</th>
                                    <th scope="col">NOMOR HP</th>
                                    <th scope="col" colspan="2">AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include "./koneksi.php";
                                    $no = 1;
                                    $data = mysqli_query($connect,"SELECT * from user");
                                    while($d = mysqli_fetch_array($data)){
                                        echo "<tr>";
                                        echo "<td>".$no++."</td>";
                                        echo "<td>".$d['nama']."</td>";
                                        echo "<td>".$d['username']."</td>";
                                        echo "<td>".$d['password']."</td>";
                                        echo "<td>".$d['alamat']."</td>";
                                        echo "<td>".$d['no_hp']."</td>";
                                        echo "<td><a href='update.php?id=".$d['id']."'><img src='../gambar/update.webp' alt='' width='32' height='32' title='UPDATE'></a></td>";
                                        echo "<td><a href='delete.php?id=".$d['id']."' onclick='return confirm(\"apakah anda yakin ingin menghapus data?\")'> <img src='../gambar/delete.webp' alt='' width='32' height='32' title='DELETE'> </a></td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                            </div>
                        </center>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>