<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5</title>
</head>
<body>
    <form action="latihan6.php" method="POST">
        <td>Nama : </td>
        <input type="text" name="nama"> <br>
        <td>NIK  :</td>
        <input type="text" name="nik"> <br>
        <td> Jenis kelamin </td> <br>
        <input type="radio" name="jk" value="laki-laki"> laki-laki
        <input type="radio" name="jk" value="perempuan"> perempuas <br>
        <td> Pilih agama : </td> <br>
        <select name="agama" required>
        <option value="">Pilih</option>
        <option value="islam">Islam</option>
        <option value="kristen">Kristen</option>
        <option value="katolik">Katolik</option>
        <option value="hindu">Hindu</option>
        <option value="budha">Budha</option>
        <option value="konghucu">Konghucu</option>
        </select> <br>
        <td>Nama mobil : </td>
        <input type="text" name="namamobil"> <br>
        <td>Jenis Mobil : </td> <br>
        <select name="jenismobil">
            <option value="pilih">pilih</option>
            <option value="lamborghini_aventador">lamborghini aventador</option>
            <option value="ferarri448">ferarri 448</option>
            <option value="buggati_veyrone">buggati verone</option>
            <option value="bmwi8">bmw i8</option>
        </select> <br>
        <td> Merk mobil : </td>
        <select name="merkmobil">
            <option value="pilih">pilih</option>
            <option value="sport">lamborghini</option>
            <option value="sport">ferarri</option>
            <option value="sport">buggati</option>
            <option value="sport">bmw</option>
        </select> <br>
        <td>Tanggal pinjam :</td>
        <input type="date" name="tanggalpinjam"> <br>
        <td>Tanggal kembali :</td>
        <input type="date" name="tanggalkembali"> <br>
        <td>No plat mobil : </td>
        <input type="text" name="plat"> <br>
        <td>Penjamin : </td>
        <select name="penjamin">
            <option value="pilih"> pilih </option>
            <option value="Fotocopysim">fc sim</option>
            <option value="Fotocopyktp">fc ktp</option>
            <option value="Fotocopykk">fc kk</option>
        </select> <br>
        <td>Menggunakan supir :</td>
        <select name="supir">
            <option value="pilih">pilih</option>
            <option value="ya">ya</option>
            <option value="tidak">tidak</option>
        </select> <br>
        <button type="submit" name="input"> MASUK </button>
        <button type="reset"> RESET </button>
    </form>
</body>
</html>