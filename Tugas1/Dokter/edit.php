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

    $dokter = mysqli_query($conn, "SELECT * from konsultasi where id ='$_GET[id_konsultasi]'");

    while ($k = mysqli_fetch_array($konsultasi)) {
        $id = $k["id"];
        $nama_dokter = $k["nama_dokter"];
        $spesialis = $k["spesialis"];
        $alamat = $k["alamat"];
        $no_telp = $k["no_telp"];
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
        </table>
        <input type="submit" name="Submit" value="Simpan">
    </form>
</body>

</html>