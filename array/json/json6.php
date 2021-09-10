<?php

$data = [
  [
      "dosen" => "Aceng Fikri", 
      "submenu" => [
      [ "nama" => "Abdul",
      "MataKuliah" => [
      ["MataKuliah" => "MTK"],
      ["MataKuliah" => "IPA"],
      ["MataKuliah" => "IPS"]],

      "Hobi" => [
      ["Hobi" => "Bermain Game"],
      ["Hobi" => "Ngevlog"]]],

      [ "nama" =>
       "Asep",
      "MataKuliah" => [
      ["MataKuliah" => "B.Indonesia"],
      ["MataKuliah" => "B.Inggris"],
      ["MataKuliah" => "B.Sunda"]],
      
      "Hobi" => [
      ["Hobi" => "Traveling"],
      ["Hobi" => "Berolahraga"]]],

      [ "nama" => "Agus",
      "MataKuliah" => [
      ["MataKuliah" => "PKN"],
      ["MataKuliah" => "BK"],
      ["MataKuliah" => "Pkk"]],

      "Hobi" => [
      ["Hobi" => "Bermain Golf"],
      ["Hobi" => "Bermain Basket"]]],
  ]
  ],

  ["dosen" => "Ujang Betok", 
  "submenu" => [
      [ "nama" => "alex",
      "MataKuliah" => [
      ["MataKuliah" => "Matematika"],
      ["MataKuliah" => "Bahasa Indonesia"],
      ["MataKuliah" => "Bahasa Inggris"]],

      "Hobi" => [
      ["Hobi" => "Futsal"],
      ["Hobi" => "Bermain"]]],

      [ "nama" =>
       "christian",
      "MataKuliah" => [
      ["MataKuliah" => "Matematika"],
      ["MataKuliah" => "B indonesia"],
      ["MataKuliah" => "Sejarah Peradaban Islam"]],
      
      "Hobi" => [
      ["Hobi" => "Traveling"],
      ["Hobi" => "Berkuda"]]],

      [ "nama" => "charles",
      "MataKuliah" => [
      ["MataKuliah" => "Pendidikan Pancasila"],
      ["MataKuliah" => "Bingbingan Konseling"],
      ["MataKuliah" => "Pendidikan Kewarga Negaran"]],

      "Hobi" => [
      ["Hobi" => "Bermain Golf"],
      ["Hobi" => "Bermain Billiar"]]],
  ]
  ],
];

           echo json_encode($data);

?>