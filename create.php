<?php
include 'koneksi.php';
$project_n = $_POST['project_n'];
$descrip_add = $_POST['descrip_add']; 
$query = mysqli_query($connect, "INSERT INTO data (project_n, descrip_add) VALUES ('$project_n', '$descrip_add')");
if ($query) {
    echo "<div class='alert alert-succes' style='text-align:center;'>Data berhasil disimpan!</div>";
}else{
    echo "<div class='alert alert-danger>Upload gagal</div>";
}
?>