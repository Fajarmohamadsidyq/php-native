<?php

//Looping php json

$dataMhs = '[
    {"nama": "alex", "domisili": "amerika"},
    {"nama": "vinales", "domisili": "spanyol"},
    {"nama": "ronaldo", "domisili": "portugal"},
    {"nama": "messi", "domisili": "argentina"}
]';

$data = json_decode($dataMhs);
foreach ($data as $mhs ) {
    echo "Nama : " . $mhs->nama . "<br>";
    echo "Domisili :" . $mhs->domisili;
    echo "<hr>";
}

?>