<?php
$siswa = ["Tian", "Asep", "Ahong", "cipe"]

//menampilkan array awal
echo "<br>array awal : <br>";
print_r($siswa);

//menghapus elemen terakhir dari array
$orang_terakhir = array_pop($siswa);

//menampilkan elemen yang dihapus
echo "<br>Elemen yang akan dihapus" .$orang_terahkir; <br>";

//menampilkan array setelah penghapusan
echo "<br>array setelah penghapusan :<br>";
print_r($siswa);
?>