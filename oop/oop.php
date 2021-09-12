<?php

{
    //mendefinisikan sebuah kelas
    class kucing
    {
        //membuat property atau atribut
        public $warna="Oren";
        public $jumlahkaki =4;
        public $jenisbulu ="Panjang";
        public $makanan ="Ikan";

        //membuat method
        public function bersuara()
        {
            return "gokkk...gok...gok...";
        }
        public function berburu()
        {
            return "berburu ikan";
        }
    }
    //membuat object (inisiasi object)
    $kucing1 = new kucing();
    echo "Warna kucing : " . $kucing1->warna . "<br>";
    echo "Suara kucing : " . $kucing1->bersuara() . "<hr>";
    
    $kucing2 = new kucing();
    //set warna kucing
    $kucing2->warna = "putih";
    echo "Warna kucing : " . $kucing2->warna . "<br>";
    echo "Suara kucing : " . $kucing2->bersuara() . "<hr>";
}
?>