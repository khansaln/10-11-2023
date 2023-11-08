<?php
include '../koneksi.php';

// get variable from form input
$id_konsultasi = $_POST["id_konsultasi"];
$nama_dokter = $_POST["dokter"];
$pasien = $_POST["pasien"];
$diagnosa = $_POST["diagnosa"];
$tgl_berobat = $_POST["tgl_berobat"];

$result = mysqli_query($conn, "INSERT INTO `konsultasi` (`id_konsultasi`, `id_dokter`, `id_pasien`, `id_diagnosa`,`tgl_berobat`) VALUES ('$id_konsultasi', '$nama_dokter', '$pasien', '$diagnosa','$tgl_berobat');");

header("Location:index.php");
