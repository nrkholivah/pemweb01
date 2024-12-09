<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>SI SEKOLAH | DATA SISWA</h2>
    <br/>
    <a href="index.php">Kembali</a>
    <h3>Edit Data Siswa</h3>
    <?php
     include 'koneksi.php';
     if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $data = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id='$id'");
        while($d=mysqli_fetch_array($data)){
            ?>
            <form action="edit_aksi.php" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d ['id'];?>">
                        <input type="text" name="nama" value="<?php echo $d ['nama'];?>">
                    </td>
                </tr>
                <tr>
                    <td>Nis</td>
                    <td><input type="number" name="nis" value="<?php echo $d ['nis'];?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value="<?php echo $d ['alamat'];?>"></td>
                </tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
                </tr>
            </table>
        </form>
        <?php
        }
    }

        ?>
    </body>
    </html>
</body>
</html>