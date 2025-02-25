<?php
$rokok = ["samsu", "esse", "marlong", "kretek", "garpit"]

//menghapus elemen pertama
$awal = array_shift($rokok);
echo "elemen pertama yang dihapus adalah $awal\n";

//Hasil
echo"rokok yang dihapus : $awal <br>";
echo "array setelah shift <br>";
foreach ($rokok as $r) {
    echo "$r <br>";
    }
?>