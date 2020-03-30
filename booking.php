<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style type="text/css" >
    @import "./css/booking.css";
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
            <a class="nav-link" href="login.php">login</a>
            </li>
        </ul>
    </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Hai Login Dulu Ya!!</h1>
        </div>
    </div>

        <div class="kotak">
            <div class="pemesanan">
                <h4>PEMESANAN TIKET</h4>
            </div>
                <form action="login.php">
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                        
                            <img src="./assets/icons/geo-alt.svg" alt="" width="32" height="32" title="Stasiun Asal">
                            <select class="custom-select" id="validationDefault04" required>
                                <option selected disabled value="">Stasiun Asal</option>
                                <option>...</option>
                            </select>
                            
                            <img src="./assets/icons/geo-alt.svg" alt="" width="32" height="32" title="Stasiun Tujuan">
                            <select class="custom-select" id="validationDefault04" required>
                                <option selected disabled value="">Stasiun Tujuan</option>
                                <option>...</option>
                            </select>

                            <img src="./assets/icons/Calendar.svg" alt="" width="32" height="32" title="Tanggal Keberangkatan">
                            <input type="date" class="form-control" id="validationDefaultUsername" placeholder="Tanggal Berangkat" aria-describedby="inputGroupPrepend2" required>
                            
                            <img src="./assets/icons/people-fill.svg" alt="" width="32" height="32" title="Penumpang">
                            <select class="custom-select" id="validationDefault04" required>
                                <option selected disabled value="">Penumpang</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                    </div>
                <button class="btn btn-primary" type="submit">Submit form</button>
            </form>
        </div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>