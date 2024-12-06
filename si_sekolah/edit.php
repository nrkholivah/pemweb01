<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT DATA SISWA</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
</head>
<body>
    <h2>EDIT DATA SISWA</h2>
    <br/>
    <a href="index.php">Kembali</a>
    <br/>
    <br/>
    <h3>Edit Data Siswa</h3>
    <?php
     include 'koneksi.php';
     if (isset($_GET['id_siswa'])) {
        $id = $_GET['id_siswa'];
        $data = mysqli_query($koneksi, "SELECT * FROM data_siswa WHERE id_siswa='$id'");
        while($d=mysqli_fetch_array($data)){
        // Cek apakah data ditemukan
        //if (mysqli_num_rows($data) > 0) {
          //  $d = mysqli_fetch_array($data); 
    ?>
    <form action="update.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="hidden" name="id_siswa" value="<?php echo $d ['id_siswa'];?>">
                    <input type="text" name="nama_siswa" value="<?php echo $d ['nama_siswa'];?>">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat_siswa" value="<?php echo $d ['alamat_siswa'];?>"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jk_siswa" value="laki-laki" <?php echo ($d['jk_siswa'] == 'laki-laki') ? 'checked' : ''; ?>> Laki-laki
                    <input type="radio" name="jk_siswa" value="perempuan" <?php echo ($d['jk_siswa'] == 'perempuan') ? 'checked' : ''; ?>> Perempuan
                </td>
            </tr>
            <tr>
                <td>Agama Siswa</td>
               
                <td>
                    <select name="agama_siswa">
                    <option value="Islam" <?php echo ($d['agama_siswa'] == 'Islam') ? 'selected' : ''; ?>>Islam</option>
                        <option value="Kristen" <?php echo ($d['agama_siswa'] == 'Kristen') ? 'selected' : ''; ?>>Kristen</option>
                        <option value="Hindu" <?php echo ($d['agama_siswa'] == 'Hindu') ? 'selected' : ''; ?>>Hindu</option>
                        <option value="Budha" <?php echo ($d['agama_siswa'] == 'Budha') ? 'selected' : ''; ?>>Budha</option>
                    </select>
                </td>

            </tr>
            <tr>
                <td>Asal Sekolah</td>
                <td><input type="text" name="asal_sekolah" value="<?php echo $d ['asal_sekolah'];?>"></td>
            </tr>
            <td></td>
            <td><input type="submit" value="SIMPAN"></td>
        </table>
    </form>
    <?php
    }
}
    ?>
</body>
</html>