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
            <legend>Latihan 1</legend>
            <form action="" method="post">
                <tr>
                    <td>Nama Mahasiswa</td>
                    <td> : </td>
                    <td><input type="text" name="siswa"></td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td> : </td>
                    <td><input type="number" name="nim" max=100 min=1></td>
                </tr>
                <tr>
                    <td>Masukan Nilai</td>
                    <td> : </td>
                    <td><input type="number" name="nilai" max=100 min=1 ></td>
                </tr>
                <tr>
                    <td>Nama Dosen</td>
                    <td> : </td>
                    <td><input type="text" name="dosen"></td>
                </tr>
                <tr>
                    <td>Mata Kuliah</td>
                    <td> : </td>
                    <td><input type="text" name="matkul"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Input" name="masukin"></td>
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
    $nim = $_POST['nim'];
    $dosen = $_POST['dosen'];
    $matkul = $_POST['matkul'];

    class siswa
    {
        public function __construct($siswa, $nilai, $nim, $dosen, $matkul)
        {
            $this->siswa = $siswa;
            $this->nilai = $nilai;
            $this->nim = $nim;
            $this->matkul = $matkul;
            $this->dosen = $dosen;

        }
    }

    class matakuliah extends siswa
    {
        public function status()
        {
            if (65 >= $this->nilai) {
                $a = "Grade D (Tidak Lulus)";

            } elseif (75 >= $this->nilai) {
                $a = "Grade C (Perbaikan)";

            } elseif (85 >= $this->nilai) {
                $a = "Grade B (Lulus)";

            } else {
                $a = "Grade A (Lulus)";

            }
            return $a;
        }
    }

    $namaSiswa = new matakuliah($siswa, $nilai, $nim, $dosen, $matkul);

    echo "Nama : $namaSiswa->siswa<br>";
    echo "Nilai :  $namaSiswa->nilai<br>";
    echo "Nim :  $namaSiswa->nim<br>";
    echo "Dosen :  $namaSiswa->dosen<br>";
    echo "Mata Kuliah :  $namaSiswa->matkul<br>";
    echo "Status :" . $namaSiswa->status() . "<br>";
}
?>