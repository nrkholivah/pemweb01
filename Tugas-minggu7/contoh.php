<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi PHP</title>
</head>

<body>
    <h1>Contoh PHP</h1>
    <h2>Daftar Absensi Mahasiswa</h2>
    <h3>Daftar List Mahasiswa dengan PHP</h3>
    <ol>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<li>Nama Mahasiswa ke-$i</li>";
        }
        ?>
    </ol>

    <h2>Contoh Penulisan PHP</h2>
    <?php echo "Hello, World";
    ?>
    <h2>Cara Menampilkan Nilai Variabel</h2>
    <?php
    $a = 'Saya sedang belajar PHP';
    $b = 5;
    print $a;
    echo $b;
    ?>

    <h2>Contoh Tipe Data Integer</h2>
    <?php
    $a = 14;
    $b = 16;
    $c = $a + $b;
    $d = "Hasil dari $a + $b =$c";
    echo $d;
    ?>

    <h2>Contoh Tipe Data Float</h2>
    <?php
    $a = 10.66;
    $b = 12.4;
    $c = "Hasil dari $a + $b = $c";
    echo $c;
    ?>

    <h2>Contoh Tipe Data String</h2>
    <?php
    $string1 = 'ini adalah string sederhana';
    $string2 = "ini adalah string yang bisa memiliki beberapa baris";
    $string3 = 'Dia berkata: "i\'ll be back"';

    echo $string1;
    echo "<br>";
    echo $string2;
    echo "<br>";
    echo $string3;
    echo "<br>";
    ?>

    <h2>Contoh Tipe Data Boolean</h2>
    <?php
    $benar = true;
    $salah = false;
    echo "benar = $benar, salah = $salah";
    ?>

    <h2>Contoh Operator Matematika</h2>
    <?php
    $hasil1 = -3;
    $hasil2 = 3 + 5;
    $hasil3 = 8 - 4.5;
    $hasil4 = 2 * 5;
    $hasil5 = 3 + 8 / 5 - 3;
    $hasil6 = 10 % 4;
    echo $hasil1;
    var_dump($hasil1);
    echo "<br>";
    echo $hasil2;
    var_dump($hasil2);
    echo "<br>";
    echo $hasil3;
    var_dump($hasil3);
    echo "<br>";
    echo $hasil4;
    var_dump($hasil4);
    echo "<br>";
    echo $hasil5;
    var_dump($hasil5);
    echo "<br>";
    echo $hasil6;
    var_dump($hasil6);
    ?>

    <h2>Tugas</h2>
    <?php
    $pemasukan = 50000000;
    $hutang1 = 16500000;
    $bunga1 = 5 / 100;
    $hutang2 = 9500000;
    $bunga2 = 4.5 / 100;
    $jumlahhutanga = $hutang1 + ($hutang1 * $bunga1);
    $jumlahhutangb = $hutang2 + ($hutang2 * $bunga2);
    echo "sisa uang adalah Rp. ";
    echo ($pemasukan - ($jumlahhutanga + $jumlahhutangb));
    echo "<br>";
    echo "jumlah total bunga Rp.";
    echo ($hutang1 * $bunga1) + ($hutang2 * $bunga2);

    echo "<br>Jumlah total hutang Rp.";
    echo $jumlahhutanga + $jumlahhutangb;
    echo "<br>";
    ?>


</html>