<?php
$ar_buah = ["semangka", "apel", "mangga", "pisang", "kedelai"];

//memanggil array
echo "buah ke 2 adalah $ar_buah[2]";


//mencetak jumlah array
echo "<br>jumlah array: " . count($ar_buah);

//mencetak seluruh buah
echo '<ol>';
foreach ($ar_buah as $buah) {
    echo '<li>' . $buah . '</li>';
    }
echo '<ol>';
//menambahkan buah
$ar_buah[]="duren";

//hapus buah index ke 1
unset($ar_buah[1]);

//ubah index ke 4 menjadi "jambu"
$ar_buah[4] = "jambu";

//mencetak seluruh buah dengan indexnya
echo '<ul>';
foreach ($ar_buah as $key => $av) {
    echo '<li>' . $key . ' -nama buah ' . $av . '</li>';
    }

    echo '</ul>';

?>