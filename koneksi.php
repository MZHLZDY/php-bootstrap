<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "project_bootstrap";

$connect = mysqli_connect ($server, $user, $password, $database);
if (!$connect){
    die ("koneksi gagal : ".mysqli_connect_error());
}
?>