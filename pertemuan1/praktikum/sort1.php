<?php
$ar_buah = ["m"=>"mangga", "a"=>"apel", "s"=>"semangka", "n"=>"nanas"]

echo'<ol>';
sort($ar_buah);
echo'<hr/>';
echo'</ol>';
foreach ($ar_buah as $key => $value) {
    echo '<li>' . $key . ' - ' . $value . '</li>';
}
echo '<ol>';
?>