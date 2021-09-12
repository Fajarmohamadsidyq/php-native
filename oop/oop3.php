<?php

{
    class segitiga
    {
        public $alas;
        public $tinggi;
        public $a, $b, $c;

        public function luasSegitiga()
        {
            return ($this->alas * $this->tinggi)/2;
        }
        public function kelilingSegitiga()
        {
            return ($this->a + $this->b + $this->c);
        }
    }
    $luas1 = new segitiga();
    $luas1->alas = 10;
    $luas1->tinggi = 15;
    $luas1->a=10;
    $luas1->b=10;
    $luas1->c=10;
    echo "Alas : " .$luas1->alas. "<br>";
    echo "Tinggi : " .$luas1->tinggi. "<br>";
    echo "A : " .$luas1->a. "<br>";
    echo "B : " .$luas1->b. "<br>";
    echo "C : " .$luas1->c. "<br>";
    echo "Luas segitiga adalah : " .$luas1->luasSegitiga(). "<br>";
    echo "Keliling Segitiga adalah : " .$luas1->kelilingSegitiga(). "<hr>";
}

?>