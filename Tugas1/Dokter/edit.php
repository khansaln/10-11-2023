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

    $dokter = mysqli_query($conn, "SELECT * from dokter where id='$_GET[id]'");

    while ($d = mysqli_fetch_array($dokter)) {
        $id = $d["id"];
        $nama_dokter = $d["nama_dokter"];
        $spesialis = $d["spesialis"];
        $alamat = $d["alamat"];
        $no_telp = $d["no_telp"];
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
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama_dokter" value="<?php echo $nama_dokter ?>"></td>
            </tr>
            <tr>
                <td>Spesialis</td>
                <td>:</td>
                <td><input type="text" name="spesialis" value="<?php echo $spesialis ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" value="<?php echo $alamat ?>"></td>
            </tr>
            <tr>
                <td>No.Telepon</td>
                <td>:</td>
                <td><input type="text" name="no_telp" value="<?php echo $no_telp ?>"></td>
            </tr>
        </table>
        <input type="submit" name="Submit" value="Simpan">
    </form>
</body>

</html>