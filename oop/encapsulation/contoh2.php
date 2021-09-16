<?php

class laptop
{
    public $pemilik;

    public function hidupkanLaptop()
    {
        return "Hidupkan laptop";
    }
}

$laptopnAnto = new laptop();
$laptopnAnto->pemilik = "Anto";
echo $laptopnAnto->pemilik;
echo $laptopnAnto->hidupkanLaptop();
