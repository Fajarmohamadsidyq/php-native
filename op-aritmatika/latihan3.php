<?php

$nilai = 69;

if ($nilai > 90) {
    $grade = "A";
} elseif ($nilai > 80) {
    $grade = "B";
} else if ($nilai > 70) {
    $grade = "C";
} elseif ($nilai > 60) {
    $grade = "D";
} else {
    $grade = "Anda harus remedial";
}

switch ($grade) {
    case 'A' : $ket = "Pertahankan"; break;
    case 'B' : $ket = "Harus lebih baik lagi"; break;
    case 'C' : $ket = "Perbanyak belajar"; break;
    case 'D' : $ket = "Jangan keseringan maen"; break;
    case 'E' : $ket = "Kebanyakan bolos"; break;
    default : $ket = "Makan nya belajar biar ga bodo!!!!";
}

echo "Nilai : $nilai <br>";
echo "Grade : $grade <br>";
echo "Keterangan : $ket <br>";

?>