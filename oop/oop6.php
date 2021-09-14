<?php

class kucing
{
    public $warna;
    public function __construct($warna)
    {
        $this->warna = $warna;
    }

    public function bersuara()
    {
        return "gok..gpk..auuuuuu";
    }

    public function berburu()
    {
        return "Berburu ikan";
    }
}

$kucing1 = new kucing("Hitam");
echo "Warna kucing 1 : " . $kucing1->warna . "<br>";

$kucing2 = new kucing("Oren");
echo "Warna kucing 2 : " . $kucing2->warna . "<br>";
