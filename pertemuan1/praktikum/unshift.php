<?php

$laptop = ["asus", "lenovo", "hp", "dell"];

//Menambahkan elemen di awal
array_unshift($laptop, "acer");

//Hasil
echo "Hasil";
foreach ($laptop as $p) {
    echo "<br>". $p ;
    }
?>