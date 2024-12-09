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
    <a href="index.php">Halaman Utama</a>
    <br/>
    <br/>
    <h3>Tambah Data Siswa</h3>
    <form action="tambah_aksi.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Nis</td>
                <td><input type="number" name="nis"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>
</html>