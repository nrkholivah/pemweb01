<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
        <h3>Siswa yang sudah mendaftar</h3>
        <br/>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    <br/>
    <br/>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th>Tindakan</th>
        </tr>
    <?php 
    include 'koneksi.php';
        // Misalkan $db adalah koneksi ke database yang sudah dibuat sebelumnya//
        $no=1;
        $data= mysqli_query($koneksi,"select*from data_siswa");
        while($d = mysqli_fetch_array($data)){
            ?>
        <tr>
          <td><?php echo $no++;?></td>
          <td><?php echo $d['nama_siswa'];?></td>
          <td><?php echo $d['alamat_siswa'];?></td>
          <td><?php echo $d['jk_siswa'];?></td> 
          <td><?php echo $d['agama_siswa'];?></td> 
          <td><?php echo $d['asal_sekolah'];?></td>
          <td>
            <a href="edit.php?id_siswa=<?php echo $d['id_siswa'];?>">EDIT</a>
            <a href="hapus.php?id_siswa=<?php echo $d['id_siswa']; ?>">HAPUS</a>
        </td>
        </tr>
            <?php
        }
        ?>
    </table>
    </body>
</html>