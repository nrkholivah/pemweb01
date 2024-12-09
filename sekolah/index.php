<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD </title>
    <h2>SI SEKOLAH | DATA SISWA</h2>
    <br/>
    <a href="tambah.php">+ Tambah Data</a>
    <br/>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIS</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no=1;
        $data= mysqli_query($koneksi,"select*from siswa");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $d['nama'];?></td>
            <td><?php echo $d['nis'];?></td>
            <td><?php echo $d['alamat'];?></td> 
        <td>
            <a href="edit.php?id=<?php echo $d['id'];?>">EDIT</a>
            <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
        </td>
        </tr>
            <?php
        }
        ?>
    </table>
    </body>
</html>