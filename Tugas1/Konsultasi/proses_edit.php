<?php
include '../koneksi.php';

// get variable from form input

$nama_dokter = $_POST["nama_dokter"];
$spesialis = $_POST["spesialis"];
$pasien = $_POST["pasien"];
$diagnosa = $_POST["diagnosa"];


$result = mysqli_query($conn, "UPDATE `konsultasi` set  `id_dokter` = '$nama_dokter', `spesialis` = '$spesialis', `id_pasien` = '$pasien', `id_diagnosa` = '$diagnosa' where `id_konsultasi`='$_GET[id]'");

header("Location:index.php");
