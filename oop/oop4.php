<?php

{
    class persegi
    {
        public $sisi;

        public function luasPersegi()
        {
            return ($this->sisi * $this->sisi);
        }
        public function kelilingPersegi()
        {
            return 4*$this->sisi;
        }
    }
    $persegi = new persegi();
    $persegi->sisi=10;
    echo "Sisi : " .$persegi->sisi;
    echo "<br>";
    echo "Luas Persegi :" .$persegi->luasPersegi(). "<br>";
    echo "keliling Persegi :" .$persegi->kelilingPersegi(). "<hr>";
}

?>