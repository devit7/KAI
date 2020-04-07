<?php
session_start();
if(isset($_POST['kirim'])){
    include "./koneksi.php";
            $gambare=$_POST['gambare'];
            $nama_file=$_FILES['gambare']['name'];
            $source=$_FILES['gambare']['tmp_name'];
            $folder='../uploads/';
            $user=$_SESSION['username'];

            move_uploaded_file($source,$folder.$nama_file);
            $query="UPDATE user SET gambar='$nama_file' where username='$user'";
            $sql = mysqli_connect('localhost', 'root', '', 'mysite');
                if ( mysqli_query($sql, $query) ) {
                    header("Location: index.php");
                }else{
                    echo 'gagal tersimpan'.mysqli_error($connect);
                }
}else{
    
}
?>