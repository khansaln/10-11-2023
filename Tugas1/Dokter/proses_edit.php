<?php
include '../koneksi.php';

// get variable from form input
$id = $_POST["id"];
$nama_dokter = $_POST["nama_dokter"];
$spesialis = $_POST["spesialis"];
$alamat = $_POST["alamat"];
$no_telp = $_POST["no_telp"];




$result = mysqli_query($conn, "UPDATE `dokter` set `nama_dokter` = '$nama_dokter', `spesialis` = '$spesialis', `alamat` = '$alamat', `no_telp` = '$no_telp' where `id` = '$_GET[id]'");

header("Location:index.php");
