<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fajar Mohamad S</title>
</head>
<body>
    <table>
    <form action="" method="POST">
    <h2>BORMA TOSERBA</h2>
    <h4>INFO HARGA BARANG :</h4>
    <table>
    <tr> 1.Kinder joy : Rp. 15.000<br> </tr>
    <tr> 2.Sprite     : Rp. 7.000<br></tr>
    <tr> 3.Pepsi      : Rp. 11.000<br></tr>
    <tr> 4.Potato     : Rp. 18.000<br></tr>
    <tr> 5.Aqua       : Rp. 5.000<br></tr>
    <tr>
    <h6>===============================================</h6>
    <h4>Masukan Pesanan Anda :</h4>
        <td>Kinder joy</td>
        <td>:</td>
        <td><input type="number" name="kinderjoy"></td>
    </tr>
    <tr>
        <td>Sprite</td>
        <td>:</td>
        <td><input type="number" name="sprite"></td>
    </tr>
    <tr>
        <td>Pepsi</td>
        <td>:</td>
        <td><input type="number" name="pepsi"></td>
    </tr>
    <tr>
        <td>Potato</td>
        <td>:</td>
        <td><input type="number" name="potato"></td>
    </tr>
    <tr>
        <td>Aqua</td>
        <td>:</td>
        <td><input type="number" name="aqua"></td>
    </tr>
    <tr>
        <td>Masukan Uang</td>
        <td>:</td>
        <td><input type="text" name="uang"></td>
    </tr>
    <tr><td></td>
    <td> </td>
    <td><input type="submit" name="submit" value="Input"></td></tr>



</table>
</form>
</body>
</html>
<?php
if (isset($_POST["submit"])) {

    class Kasir
    {

        public $kinderjoy;
        public $sprite;
        public $pepsi;
        public $potato;
        public $aqua;
        public $uang;

        function __construct()
        {
            $kinderjoy = $_POST['kinderjoy'];
            $sprite = $_POST['sprite'];
            $pepsi = $_POST['pepsi'];
            $potato = $_POST['potato'];
            $aqua = $_POST['aqua'];
            $uang = $_POST['uang'];
            $this->kinderjoy = $kinderjoy;
            $this->sprite = $sprite;
            $this->pepsi = $pepsi;
            $this->potato = $potato;
            $this->aqua = $aqua;
            $this->uang = $uang;
        }

        function hitung()
        {
            $b1 = $this->kinderjoy * 15000;
            $b2 = $this->sprite * 7000;
            $b3 = $this->pepsi * 11000;
            $b4 = $this->potato * 18000;
            $b5 = $this->aqua * 5000;

            echo "--------------------------- Detail Transaksi ----------------------<br>";

            $jumlah = $b1 + $b2 + $b3 + $b4 + $b5;
            echo "Total Belanja : Rp." . $jumlah . "<br>";

            echo "Uang anda : Rp." . $this->uang;

            if ($jumlah >= 100000) {
                $hasil = $jumlah - ($jumlah * (30 / 100));
                echo "<br>Anda mendapatkan diskon 30%<br>";
                echo "total pembayaran Rp." . $hasil;
            } else {
                echo "<br>Uang anda kurang!!!";
            }

        }

        function __destruct()
        {

            echo "<br>";
            echo "Terima Kasih Telah Berbelanja Di Toko Kami :)";

        }

    }

    $toko = new Kasir();
    echo $toko->hitung();

}
