<?php
include 'koneksi.php';
$id = $_POST['id_siswa'];
$nama_siswa =$_POST['nama_siswa'];
$alamat_siswa=$_POST['alamat_siswa'];
$jk_siswa=$_POST['jk_siswa'];
$agama_siswa=$_POST['agama_siswa'];
$asal_sekolah=$_POST['asal_sekolah'];

mysqli_query($koneksi,"update data_siswa set nama_siswa='$nama_siswa', alamat_siswa='$alamat_siswa',jk_siswa='$jk_siswa',
agama_siswa='$agama_siswa',asal_sekolah='$asal_sekolah' where id_siswa='$id'");
header("location:index.php");
?>