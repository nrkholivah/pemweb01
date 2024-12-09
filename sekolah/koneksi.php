<?php
$koneksi = mysqli_connect("localhost", "root", "", "sekolah");
if(mysqli_connect_error()){
    echo "Gagal terhubung dengan database: " . mysqli_connect_error();
}
?>