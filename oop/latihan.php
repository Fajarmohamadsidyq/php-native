<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fajar Mohamad Sidyq</title>
</head>
<body>
    <form action="" method="post">
    <table>
        <fieldset>
            <legend>OOP PERHITUNGAN</legend>
            <tr>
                <td>Masukan Bilangan ke-1</td>
                <td> : </td>
                <td>
                    <input type="number" name="bil1">
                </td>
            </tr>
            <tr>
                <td>Masukan Bilangan ke-2</td>
                <td> : </td>
                <td>
                    <input type="number" name="bil2">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="masukin" name="submit">
                </td>
            </tr>
        </fieldset>
    </table>
</form>
</body>
</html>

<?php

class mtk
{
    public $bilangan;
    public $bilangan2;
    public function __construct($x, $y)
    {
        $this->bilangan = $x;
        $this->bilangan2 = $y;
    }

    public function tambah()
    {
        return ($this->bilangan + $this->bilangan2);

    }

    public function kurang()
    {
        return ($this->bilangan - $this->bilangan2);
    }

    public function kali()
    {
        return ($this->bilangan * $this->bilangan2);
    }

    public function bagi()
    {
        return ($this->bilangan / $this->bilangan2);
    }

    public function modulus()
    {
        return ($this->bilangan % $this->bilangan2);
    }

}

if (isset($_POST['submit'])) {
    $bilangan = $_POST['bil1'];
    $bilangan2 = $_POST['bil2'];

    $aritmatika = new mtk($bilangan, $bilangan2);
    echo "Bilangan ke-1 : " . $aritmatika->bilangan . "<br>";
    echo "Bilangan ke-2 : " . $aritmatika->bilangan2 . "<br>";
    echo "Penjumlahan : " . $aritmatika->tambah() . "<br>";
    echo "Pengurangan : " . $aritmatika->kurang() . "<br>";
    echo "Perkalian : " . $aritmatika->kali() . "<br>";
    echo "Pembagian : " . $aritmatika->bagi() . "<br>";
    echo "Modulus : " . $aritmatika->modulus() . "<br>";

}
?>
