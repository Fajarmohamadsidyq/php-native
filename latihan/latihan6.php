<?php
    if (isset($_POST['input'])) {
        $nama = $_POST ['nama'];
        $nik = $_POST ['nik'];
        $jeniskelamin = $_POST ['jk'];
        $agama = $_POST ['agama'];
        $namamobil = $_POST ['namamobil'];
        $jenismobil = $_POST ['jenismobil'];
        $merkmobil = $_POST ['merkmobil'];
        $tanggalpinjam = $_POST ['tanggalpinjam'];
        $tanggalkembali = $_POST ['tanggalkembali'];
        $noplat = $_POST ['plat'];
        $penjamin = $_POST ['penjamin'];
        $supir = $_POST ['supir'];
    }
        
        ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="masuk4.php" method="post">
<input type="hidden" name="nama" value=<?php echo "$nama";?> >
<input type="hidden" name="nik" value=<?php echo "$nik";?> >
<input type="hidden" name="jk" value=<?php echo "$jeniskelamin";?> >
<input type="hidden" name="agama" value=<?php echo "$agama";?> >
<input type="hidden" name="namamobil" value=<?php echo "$namamobil";?> >
<input type="hidden" name="jenismobil" value=<?php echo "$jenismobil";?> >
<input type="hidden" name="merkmobil" value=<?php echo "$merkmobil";?> >
<input type="hidden" name="tanggalpinjam" value=<?php echo "$tanggalpinjam";?> >
<input type="hidden" name="tanggalkembali" value=<?php echo "$tanggalkembali";?> >
<input type="hidden" name="plat" value=<?php echo "$noplat";?> >
<input type="hidden" name="penjamin" value=<?php echo "$penjamin";?> >
<input type="hidden" name="supir" value=<?php echo "$supir";?> >


        <td>Tanggal Pengembalian :</td>
        <td><input  type="date" name="tanggalpengembalian"></td> <br>
        <button type="submit" name="masuk">MASUK</button>
</form>
</body>
</html>