<?php

{
    class komputer
    {
        public $pemilik = "Antimage";
        public $merk = "Asus ROG";
        public $ukuran = 42;

        public function komputerNyala()
        {
            return "Komputer di nyalakan";
        }
        public function komputerMati()
        {
            return "Komputer di matikan";
        }
    }
    $kom = new komputer();
    echo "Nama pemilik : " . $kom->pemilik . "<br>";
    echo "Merk Komputer : " . $kom->merk . "<br>";
    echo "Ukuran komputer : " . $kom->ukuran . "<br>";
    echo "Kondisi Komputer : " . $kom->komputerNyala() . "<hr>";

    $kom2 = new komputer();
    echo "Nama pemilik : " . $kom2->pemilik = "Wann <br>";
    echo "Merk komputer : " . $kom2->merk = "Acer <br>";
    echo "Ukuran komputer : " . $kom2->ukuran = "35 <br>";
    echo "Kondisi komputer : " . $kom2->komputerMati() . "<hr>";

    $kom3 = new komputer();
    echo "Nama pemilik : " . $kom3->pemilik = "Oura <br>";
    echo "Merk komputer : " . $kom3->merk = "ASUS <br>";
    echo "Ukuran komputer : " . $kom3->ukuran = "45 <br>";
    echo "Kondisi komputer : " . $kom3->komputerNyala() . "<hr>";

    $kom4 = new komputer();
    echo "Nama pemilik : " . $kom4->pemilik = "REKT <br>";
    echo "Merk komputer : " . $kom4->merk = "ASUS <br>";
    echo "Ukuran komputer : " . $kom4->ukuran = "35 <br>";
    echo "Kondisi komputer : " . $kom4->komputerNyala() . "<hr>";

    $kom5 = new komputer();
    echo "Nama pemilik : " . $kom5->pemilik = "Ferxic <br>";
    echo "Merk komputer : " . $kom5->merk = "Samsung <br>";
    echo "Ukuran komputer : " . $kom5->ukuran = "50 <br>";
    echo "Kondisi komputer : " . $kom5->komputerNyala() . "<hr>";

}

?>