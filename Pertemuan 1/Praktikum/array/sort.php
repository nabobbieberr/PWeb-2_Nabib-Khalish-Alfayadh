<?php
$ar_buah = ["a"=>"Apel", "m"=>"Mangga", "s"=>"Semangka", "b"=>"Bengkoang"];

echo '<ol>';
sort($ar_buah);
echo '<hr/>';
echo '</ol>';
foreach ($ar_buah as $key => $value) {
    echo '<li>' . $key . ' - ' . $value . '</li>';
}
echo '<ol>';
?>