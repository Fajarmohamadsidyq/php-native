<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Input Array</legend>
        <form action="" method="post">
        <table>
            <tr>
                <th>Masukan Jumlah Data</th>
                <td>: <input type="number" name="jumlah"></td>
            </tr>
            <tr>
                <th>
                </th>
                <td>
                    <button type="submit" name="simpan">Simpan</button></th>
                <button type="reset">Reset</button>
                </td>
            </tr>
        </table>
        </form>
    </fieldset>
    <?php
    if(isset($_POST['simpan'])) 
    {
    $row = $_POST['jumlah'];
    ?>
    <fieldset>
        <legend>Input Data Siswa</legend>
        <table>
            <form action="masuk.php" method="post">
            <?php
            for($i=1;$i <= $row ; $i++) 
            {
            ?> 
            <tr>
                <th colspan=2> Data Ke <?php echo $i;?></th>
                <th>Nama</th>
                <th>:</th>
                <td><input type="text" name="nama[]" required></td>
            </tr>
            <tr>
                <th colspan=2></th>
                <th>Asal Sekolah</th>
                <th>:</th>
                <td><input type="text" name="sekolah[]" required></td>
            </tr>
            <tr>
                <th colspan=2></th>
                <th>Nilai Bahasa Indonesia</th>
                <th>:</th>
                <td><input type="number" max="100" name="bindo[]" required></td>
            </tr>
            <tr>
                <th colspan=2></th>
                <th>Nilai Matemaika</th>
                <th>:</th>
                <td><input type="number" max="100" name="mtk[]" required></td>
            </tr>
            <tr>
                <th colspan=2></th>
                <th>Nilai Bahasa Inggris</th>
                <th> : </th>
                <td><input type="number" max="100" name="inggris[]" required></td>
            </tr>
            <tr>
                <th colspan=2></th>
                <th>Nilai Ilmu pengetahuan alam</th>
                <th>:</th>
                <td><input type="number" max="100" name="ipa[]"></td>
            </tr>
               <?php
            }
            ?>
            <tr>
                <th>
                </th>
                <td><button type="submit" name="masuk">Simpan</button></td>
            </tr>
            </form>
        </table>
    </fieldset>
    <?php
    }
    ?>
</body>
</html>
