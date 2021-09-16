<?php
class hargaPemain
{
    protected $beli = 75000000;
    private $jual = 150000000;
    public $gaji = 1000000000;
    public $nama;
    public $noPunggung;

    public function pembeli()
    {
        $a = $this->beli;
        $b = $this->jual;
        if ($a == 75000000 && $b == 150000000) {
            $c = "Transfer Pemain Berhasil";
        }
        return $c;
    }

    public function infoTf()
    {
        $a = $this->beli;
        $b = $this->jual;
        $d = $this->nama;
        $e = $this->noPunggung;
        $f = $this->gaji;
        $c = "Nama pemain : " . $d . "<br>" .
            " No Punggung :" . $e . "<br>" .
            "Harga Jual :" . $b . "<br>" .
            "Gaji pemain : " . $f . "<br>";
        return $c;
    }
}
$pemain = new hargaPemain();
$pemain->nama = "Cristiano Ronaldo <br>";
$pemain->noPunggung = "7 <br>";
echo $pemain->infoTf() . "<br>";
