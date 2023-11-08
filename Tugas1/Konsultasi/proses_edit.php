<?php
include '../koneksi.php';

// get variable from form input

$nama_dokter = $_POST["nama_dokter"];
$nama_pasien = $_POST["nama_pasien"];
$diagnosa = $_POST["diagnosa"];


$result = mysqli_query($conn, "UPDATE `konsultasi` set  `id_dokter` = '$nama_dokter', `id_pasien` = '$nama_pasien', `id_diagnosa` = '$diagnosa' where `id_konsultasi`='$_GET[id]'");


header("Location:index.php");
