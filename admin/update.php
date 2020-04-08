
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style type="text/css">
    @import "../css/update.css";
    </style>
  </head>
<body>
  <div class="kotak">
  <?php
	include './koneksi.php';
	$id = $_GET['id'];
  $data = mysqli_query($connect,"SELECT * from user where id='$id'");
	while($d = mysqli_fetch_array($data)){
    ?>
    <center>
    <h1>UPDATE</h1>
    </center>
    <form action="simpan.php" method="POST" >
        <div class="col-md-12 mb-3">
            <label for="validationDefault03">NAMA</label>
            <input type="hidden" name="id" value="<?php echo $d['id']; ?>" required>
            <input type="text" class="form-control" id="validationDefault03" name="nama" value="<?php echo $d['nama']; ?>" required>
        </div>
        <div class="col-md-12 mb-3">
            <label for="validationDefault05">USERNAME</label>
            <input type="text" class="form-control" id="validationDefault05" name="username" value="<?php echo $d['username']; ?>" required>
        </div>
        <div class="col-md-12 mb-3">
            <label for="validationDefault05">PASSWORD</label>
            <input type="text" class="form-control" id="validationDefault05" name="password" value="<?php echo $d['password']; ?>" required>
        </div>
        <div class="col-md-12 mb-3">
            <label for="validationDefault05">ALAMAT</label>
            <input type="text" class="form-control" id="validationDefault05" name="alamat" value="<?php echo $d['alamat']; ?>" required>
        </div>
        <div class="col-md-12 mb-3">
            <label for="validationDefault05">NO HP</label>
            <input type="text" class="form-control" id="validationDefault05" name="no_hp" value="<?php echo $d['no_hp']; ?>" required>
        </div>
        <button class="btn btn-primary" name="submit" type="submit">Submit</button>
    </div>
</form>
<?php 
	}
	?>
</body>
</html>