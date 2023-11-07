<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
</head>

<body>
    <?php
    include '../koneksi.php';
    ?>

    <form action="proses_tambah.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>ID</td>
                <td>:</td>
                <td><input type="text" name="id_konsultasi"></td>
            </tr>
            <tr>
                <td>Nama Dokter</td>
                <td>:</td>
                <td>
                    <select name="dokter" id="dokter">
                        <?php
                        // Fetch data from the "items" table
                        $query = mysqli_query($conn, "SELECT * FROM dokter");
                        if (mysqli_num_rows($query) > 0) {
                            while ($data = mysqli_fetch_array($query)) {
                                echo "<option value='" . $data["id_dokter"] . "'>" . $data["nama_dokter"] . "</option>";
                            }
                        } else {
                            echo "<option value=''>No items available</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Nama Pasien</td>
                <td>:</td>
                <td>
                    <select name="pasien" id="pasien">
                        <?php
                        // Fetch data from the "items" table
                        $query = mysqli_query($conn, "SELECT * FROM pasien");
                        if (mysqli_num_rows($query) > 0) {
                            while ($data = mysqli_fetch_array($query)) {
                                echo "<option value='" . $data["id_pasien"] . "'>" . $data["nama_pasien"] . "</option>";
                            }
                        } else {
                            echo "<option value=''>No items available</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Diagnosa</td>
                <td>:</td>
                <td>
                    <select name="diagnosa" id="diagnosa">
                        <?php
                        // Fetch data from the "items" table
                        $query = mysqli_query($conn, "SELECT * FROM diagnosa");
                        if (mysqli_num_rows($query) > 0) {
                            while ($data = mysqli_fetch_array($query)) {
                                echo "<option value='" . $data["id_diagnosa"] . "'>" . $data["nama_penyakit"] . "</option>";
                            }
                        } else {
                            echo "<option value=''>No items available</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>

        </table>
        <input type="submit" name="Submit" value="Simpan">
    </form>
</body>

</html>