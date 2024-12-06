<?php
include 'koneksi.php';
$nama_siswa =$_POST['nama_siswa'];
$alamat_siswa=$_POST['alamat_siswa'];
$jk_siswa=$_POST['jk_siswa'];
$agama_siswa=$_POST['agama_siswa'];
$asal_sekolah=$_POST['asal_sekolah'];
mysqli_query($koneksi, "insert into data_siswa values('','$nama_siswa','$alamat_siswa','$jk_siswa','$agama_siswa','$asal_sekolah')");
header("location:index.php");
?>