<?php

$db=mysqli_connect("localhost","root","","mysite");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style type="text/css">
.kotak{
background:white;
width: 450px;
margin: 80px auto;
padding: 30px 20px;
box-shadow: 0 0 5px gray;
}
body{
    background: blue;
}
</style>
</head>
<body>
<form class="kotak" action="login.php" method="post">
<h1 style="text-align:center;text-transform: uppercase;">DAFTAR</h1>
  <div class="form-row">
    <div class="col-auto">
      <label for="validationDefault01">nama</label>
      <input type="text" name="nama" class="form-control" id="validationDefault01" value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>" required>
    </div>
  </div>
  <div class="form-row">
    <div class="col-auto">
      <label for="validationDefaultUsername">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
        </div>
        <input type="text" name="username"class="form-control" id="validationDefaultUsername" placeholder="8 digit" value="<?=isset($_POST['username']) ? $_POST['username'] : ''?>"  required>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-auto">
      <label for="validationDefault03">Password</label>
      <div class="input-group">
        <div class="input-group-prepend">
        </div>
        <input type="password" name="password" class="form-control" id="validationDefault03" placeholder="8 digit" value="<?=isset($_POST['password']) ? $_POST['password'] : ''?>"  required>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-auto">
      <label for="validationDefault04">Alamat</label>
      <input type="text" name="alamat" class="form-control" id="validationDefault04" value="<?=isset($_POST['alamat']) ? $_POST['alamat'] : ''?>"required>
    </div>
  </div>
  <div class="form-row">  
    <div class="col-auto">
      <label for="validationDefault02">No HP</label>
      <input type="number" name="no_hp" class="form-control" id="validationDefault01" value="<?=isset($_POST['no_hp']) ? $_POST['no_hp'] : ''?>" required>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
      Setuju dengan syarat dan ketentuan
      </label>
    </div>
  </div>
  <button class="btn btn-primary" type="submit" name="submit">Submit</button>
</form>

</body>
</html>