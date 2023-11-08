<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php
                include '../koneksi.php';
                $query = mysqli_query($conn, "SELECT * from konsultasi as k join dokter as d on k.id_dokter = d.id_dokter join pasien as p on k.id_pasien = p.id_pasien join diagnosa as dg  on dg.id_diagnosa=k.id_diagnosa;");
                ?>
                <center>
                    <h1>DATA KONSULTASI</h1>
                </center>
                <a class="btn btn-info" style="margin-bottom:5px" href="tambah.php?nama_halaman=Tambah Dokter"> Tambah Data </a>
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            Nama Dokter
                        </th>
                        <th>
                            Spesialis
                        </th>
                        <th>
                            Nama Pasien
                        </th>
                        <th>
                            Alamat
                        </th>
                        <th>
                            Telepon
                        </th>
                        <th>
                            Diagnosa
                        </th>
                        <th>
                            Tanggal Berobat
                        </th>
                        <th>
                            Aksi
                        </th>
                    </tr>
                    <?php
                    if (mysqli_num_rows($query) > 0) {
                        $no = 1;
                        while ($data = mysqli_fetch_array($query)) {
                    ?>
                            <tr>
                                <td> <?php echo $data["id_konsultasi"] ?></td>
                                <td> <?php echo $data["nama_dokter"] ?> </td>
                                <td> <?php echo $data["spesialis"] ?> </td>
                                <td> <?php echo $data["nama_pasien"] ?> </td>
                                <td> <?php echo $data["alamat"] ?></td>
                                <td> <?php echo $data["no_telp"] ?></td>
                                <td> <?php echo $data["nama_penyakit"] ?> </td>
                                <td> <?php echo $data["tgl_berobat"] ?> </td>
                                <td> <a href="proses_hapus.php?id=<?php echo $data["id_konsultasi"] ?>" class="label label-danger"> Delete </a> &nbsp; <a href="edit.php?id=<?php echo $data["id_konsultasi"] ?>" class="label label-warning"> Ubah </a></td>
                            </tr>
                        <?php } ?>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</html>