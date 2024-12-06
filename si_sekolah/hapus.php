<?php
include 'koneksi.php';
$id=$_GET['id_siswa'];
mysqli_query($koneksi,"delete from data_siswa where id_siswa='$id'");
header("location:index.php");
?>