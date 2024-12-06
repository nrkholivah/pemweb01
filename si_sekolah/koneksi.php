<?php
$koneksi = mysqli_connect("localhost", "root", "", "sekolahan");
if(mysqli_connect_error()){
    echo "Gagal terhubung dengan database: " . mysqli_connect_error();
}
?>