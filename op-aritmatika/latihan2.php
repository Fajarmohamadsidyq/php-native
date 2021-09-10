<?php

$grade = "A";
switch ($grade) {
    case 'A' : $grade = "Pertahankan"; break;
    case 'B' : $grade = "Harus lebih baik lagi"; break;
    case 'C' : $grade = "Perbanyak belajar"; break;
    case 'D' : $grade = "Jangan keseringan maen"; break;
    case 'E' : $grade = "Kebanyakan bolos"; break;
    default : $grade = "Format tidak sesuai";
}
echo "<b>$grade</b>";

?>