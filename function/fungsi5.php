<?php

function hitungUmur($thn_lahir, $thn_skrng)
{
    $umur = $thn_skrng - $thn_lahir;
    return $umur;
}

function perkenalan($nama, $salam = "Assalamualaikum")
{
    echo $salam. ",";
    echo "Perkenalkan nama saya " . $nama . "<br/>";
    echo "Saya berusia" . hitungUmur(2021, 2004) . "tahun <br>/";
    echo "Senang berjumpa dengan kalian";
}

echo perkenalan("fajar");

?>