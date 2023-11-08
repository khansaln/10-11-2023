<?php
include '../koneksi.php';

$result = mysqli_query($conn, "DELETE from `konsultasi` where `id_konsultasi` = '$_GET[id]'");

header("Location:index.php");
