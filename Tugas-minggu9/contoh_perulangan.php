<?php
//perulangan for//
for ($i= 0; $i < 10; $i++){
    echo "<h2> Ini perulangan ke-$i</h2>";
}
echo"<hr>";
//perulangan while//
$ulangi=0;
while($ulangi <10){
    echo "<p> Ini adalah perulangan ke-$ulangi</p>";
    $ulangi++;
}
echo"<hr>";
//perulangan do/while//
$ulangi =10;
do{
    echo "<p>ini adalah perulangan ke-$ulangi</p>";
    $ulangi--;
}while ($ulangi>0);
echo"<hr>";
//perulangan foreach//
$books=[
    "Panduan Belajar PHP untuk pemula",
    "Membangun aplikasi web dengan php",
    "Tutorial PHP dan MySQL",
    "Membuat Chat Bot dengan PHP",
];
echo "<h5>Judul buku php:</h5>";
echo "<ul>";
foreach($books as $buku){
    echo "<li>$buku</li>";
}
echo "</ul>";
echo"<hr>";
//perulangan bersarang//
for ($i=0; $i<5;$i++){
    for ($j=0;$j<10;$j++){
        echo "Ini perulangan ke ($i,$j)<br>";
    }
}
?>


