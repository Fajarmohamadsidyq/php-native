<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <fieldset>
            <form action="" method="post">
                <tr>
                    <td>Nama Barang</td>
                    <td> : </td>
                    <td><input type="text" name="barang"></td>
                </tr>
                <tr>
                    <td>Harga Barang</td>
                    <td> : </td>
                    <td><input type="text" name="harga"></td>
                </tr>
                <tr>
                    <td>Jumlah Pesanan</td>
                    <td> : </td>
                    <td><input type="number" name="pesanan"></td>
                </tr>
                <tr>
                    <td>Sistem Pembayaran</td>
                    <td> : </td>
                    <td>
                        <select name="pembayaran">
                            <option value="Cash"> Cash </option>
                            <option value="M-Banking"> M-Banking </option>
                            <option value="Gopay"> Gopay </option>
                            <option value="PickUp"> PickUp</option>
                        </select>
                    </td>
                </tr>
                <tr>
                <td>
                <input type="submit" value="input" name="submit">
                <td>
                </tr>
            </form>
        </fieldset>
    </table>
</body>
</html>

<?php

if (isset($_POST['submit'])) {
    $barang = $_POST['barang'];
    $harga = $_POST['harga'];
    $pesanan = $_POST['pesanan'];
    $bayar = $_POST['pembayaran'];

    class pesen
    {
        public $barang;
        public $harga;
        public $pesanan;
        public $bayar;

        public function __construct()
        {

        }
    }
}

?>
