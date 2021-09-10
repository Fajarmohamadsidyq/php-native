<?php

$kartumem = "ya";
$uang = 250000;
$diskon = 0;
$total = 0;

if ($kartumem == "ya") {
    if ($uang >= 250000) {
        $diskon = 0.1 * $uang;
    } elseif ($total >= 100000) {
        $diskon = 0.05 * $uang;
    }
} else {
    if ($total >= 100000) {
        $diskon = 0.025 * $uang;
    }
}

$total = $uang - $diskon;
echo "Kartu member = $kartumem <br>";
echo "Total harga = $uang <br>";
echo "Diskon = $diskon <br>";
echo "Total yang harus di bayar = $total";

?>