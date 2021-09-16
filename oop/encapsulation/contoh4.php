<?php

class laptop
{
    public $procie = 'Core i7';
    protected $VGA = 'GTX 1050';

    public function gaming()
    {
        return "Wushh wushh";
    }
}

class ROG extends laptop
{
    public $procie = 'Core i9';
}

$asus = new ROG();
echo $asus->procie;
if (property_exists($asus, "VGA")) {
    echo "<br>Laptop ini mempunyai VGA<br>";
}
echo $asus->gaming();
