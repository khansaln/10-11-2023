<?php
include '../koneksi.php';

$result = mysqli_query($conn, "DELETE from `konsultasi` where `id_konsultasi` = '$_GET[id_konsultasi]'");

header("Location:index.php");
