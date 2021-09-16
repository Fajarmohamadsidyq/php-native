<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fajar Mohamad S</title>
</head>
<body>
    <fieldset>
        <legend></legend>
        <form action="" method="post">
            <table>
            <tr>
                <td>Nama Kucing</td>
                <td> : </td>
                <td><input type="text" name="nama"><br></td>
            </tr>
            <tr>
                <td>Jenis Kucing</td>
                <td> : </td>
                <td><input type="text" name="jenis">
            </td>
            </tr>
            <tr>
                <td>Warna Kucing</td>
                <td> : </td>
                <td><input type="text" name="warna"><br></td>
            </tr>
            <tr>
                <td>Jumlah Kaki</td>
                <td> : </td>
                <td><input type="number" name="kaki" id=""></td>
            </tr>
            <tr>
                <td></td><td></td>
                <td><input type="submit" name="submit" value="Masuk">
                    <input type="reset" name="reset" value="Hapus"></td>
            </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $a = $_POST['nama'];
    $b = $_POST['jenis'];
    $c = $_POST['warna'];
    $d = $_POST['kaki'];

    class kucing
    {
        public $a;
        public $b;
        public $c;
        public $d;

        public function anjing($a, $b, $c, $d)
        {
            if ($d == 4) {
                echo "Nama Kucing : " . $a . "<br>";
                echo "Jenis kucing : " . $b . "<br>";
                echo "Warna kucing : " . $c . "<br>";
                echo "Jumlah kaki : " . $d . "<br>";
                echo "Keterangan : Normal";
            } else if ($d <= 3) {
                echo "Nama Kucing : " . $a . "<br>";
                echo "Jenis kucing : " . $b . "<br>";
                echo "Warna kucing : " . $c . "<br>";
                echo "Jumlah kaki : " . $d . "<br>";
                echo "Keterangan : Cingked";
            } else if ($d >= 5) {
                echo "Nama Kucing : " . $a . "<br>";
                echo "Jenis kucing : " . $b . "<br>";
                echo "Warna kucing : " . $c . "<br>";
                echo "Jumlah kaki : " . $d . "<br>";
                echo "Keterangan : Siluman";
            }
        }
    }
    $kucing = new kucing();
    echo $kucing->anjing($a, $b, $c, $d);
}