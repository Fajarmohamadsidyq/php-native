<?php

$nilai = 88;

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

echo "Nilai anda : $nilai <br>";
echo "Grade      : $grade";

?>