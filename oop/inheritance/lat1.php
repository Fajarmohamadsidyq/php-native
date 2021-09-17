<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body>
    <table>
        <fieldset>
            <legend>Latihan</legend>
            <form action="" method="post">
                <tr>
                    <td>Nama Mahasiswa</td>
                    <td> : </td>
                    <td><input type="text" name="siswa"></td>
                </tr>
                <tr>
                    <td>Masukan Nilai</td>
                    <td> : </td>
                    <td><input type="number" name="nilai"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="input" name="masukin"></td>
                </tr>
            </form>
        </fieldset>
    </table>
</body>
</html>

<?php

if (isset($_POST['masukin'])) {
    $siswa = $_POST['siswa'];
    $nilai = $_POST['nilai'];
}

class siswa
{
    public $nama;
    public $nik;
    public $nilai;

    public function kelas()
    {

    }
}

class matakuliah extends siswa
{
    public $dosen;
    public $matkul;
    public $status;

    public function matakul()
    {

    }
}
?>