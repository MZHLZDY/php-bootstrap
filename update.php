<?php
include 'koneksi.php';

$id = $_POST['id'];
$project_n = $_POST['project_n'];
$descrip_add = $_POST['descrip_add'];

$query = mysqli_query($connect, "UPDATE data SET project_n='$project_n', descrip_add ='$descrip_add' WHERE id='$id'");
if($query){
    echo "<div class='alert alert-succes' style='text-align:center;'>DATA BERHASIL DIUBAH</div>";
} else {
    echo "<div class='alert alert-danger'>UPDATE GAGAL!, COBA LAGI!</div>";
}
?>