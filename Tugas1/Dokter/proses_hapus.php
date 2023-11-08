<?php
include '../koneksi.php';

$result = mysqli_query($conn, "DELETE from `dokter` where `id_dokter` = '$_GET[id]'");

header("Location:index.php");
