<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>

<body>
    EDIT PAGE
    <?php
    include '../koneksi.php';

    $konsultasi = mysqli_query($conn, "SELECT * from konsultasi as k join dokter as d on k.id_dokter = d.id_dokter join pasien as p on k.id_pasien = p.id_pasien join diagnosa as dg  on dg.id_diagnosa=k.id_diagnosa where id_konsultasi ='$_GET[id]'");

    while ($k = mysqli_fetch_array($konsultasi)) {
        $id = $k["id_konsultasi"];
        $nama_dokter = $k["nama_dokter"];
        $spesialis = $k["spesialis"];
        $pasien = $k["nama_pasien"];
        $diagnosa = $k["nama_penyakit"];
    }
    ?>
    <form action="proses_edit.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>ID</td>
                <td>:</td>
                <td><input type="text" name="id" value="<?php echo $id ?>"></td>
            </tr>
            <tr>
                <td>Nama Dokter</td>
                <td>:</td>
                <td><input type="text" name="nama_dokter" value="<?php echo $nama_dokter ?>"></td>
            </tr>
            <tr>
                <td>Spesialis</td>
                <td>:</td>
                <td><input type="text" name="spesialis" value="<?php echo $spesialis ?>"></td>
            </tr>
            <tr>
                <td>Nama Pasien</td>
                <td>:</td>
                <td><input type="text" name="pasien" value="<?php echo $pasien ?>"></td>
            </tr>
            <tr>
                <td>Diagnosa</td>
                <td>:</td>
                <td><input type="text" name="diagnosa" value="<?php echo $diagnosa ?>"></td>
            </tr>
            <tr>
                <td>Tanggal Berobat</td>
                <td>:</td>
                <td><input type="date" name="tgl_berobat" value="<?php echo $tgl_berobat ?>"></td>
            </tr>
        </table>
        <input type="submit" name="Submit" value="Simpan">
    </form>
</body>

</html>