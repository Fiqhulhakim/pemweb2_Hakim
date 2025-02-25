<?php
//array push
$komponen = ["mobo", "cpu", "ram", "gpu"];

//menambahkan elemen di akhir array
array_push($komponen, "psu", "cassing");

echo "setelah push<br>";
foreach ($komponen as $k) {
    echo "$k <br>";
    }

?>