<?php 

$database = "data_mahasiswa";
$username = "root";
$password = "";
$server   = "localhost";

$koneksi = mysqli_connect($server, $username, $password, $database);
    
if (mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}