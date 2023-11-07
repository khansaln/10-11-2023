<?php
include '../koneksi.php';

// get variable from form input
$id_konsultasi = $_POST["id_konsultasi"];
$nama_dokter = $_POST["nama_dokter"];
$pasien = $_POST["pasien"];
$diagnosa = $_POST["diagnosa"];




$result = mysqli_query($conn, "INSERT INTO `konsultasi` (`id_konsultasi`, `id_dokter`, `id_pasien`, `diagnosa`) VALUES ('$id_konsultasi', '$nama_dokter', '$pasien', '$diagnosa');");

header("Location:index.php");
