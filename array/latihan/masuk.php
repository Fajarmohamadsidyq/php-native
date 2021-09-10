<?php

if (isset($_POST['masuk'])) {

    $nama = $_POST['nama'];
    $sekolah = $_POST['sekolah'];
    $bindo = $_POST['bindo'];
    $mtk = $_POST['mtk'];
    $inggris = $_POST['inggris'];
    $ipa = $_POST['ipa'];
    $total = 0;
    $keterangan ="";
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fajar mohamad sidyq</title>
</head>
<body>
    <fieldset>
        <legend>Data Siswa</legend>
        <table border=1>
            <tr>
                <th>Nomor</th>
                <th>Nama</th>
                <th>Asal Sekolah</th>
                <th>Nilai Bahasa Indonesia</th>
                <th>Nilai Matematika</th>
                <th>Nilai Bahasa Inggris</th>
                <th>Nilai IPA</th>
                <th>Jumlah Nilai</th>
                <th>Rata-rata</th>
                <th>Keterangan</th>
            </tr>
            
            <?php
            $no=1;
            
            for($i = 0 ; $i < count($nama); $i++){?>
            
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $nama[$i]; ?></td>
                <td><?php echo $sekolah[$i]; ?></td>
                <td><?php echo $bindo[$i]; ?></td>
                <td><?php echo $mtk[$i]; ?></td>
                <td><?php echo $inggris[$i]; ?></td>
                <td><?php echo $ipa[$i]; ?></td>
                <?php $total = $bindo[$i] + $mtk[$i] + $inggris[$i] + $ipa[$i];?>
                <?php $rata = $total / 4;?>
                <td><?php echo $total; ?></td>
                <?php
                if($total > 340) {
                    $keterangan = "Diterima";
                } else {
                    $keterangan = "Tidak Diterima";
                }
                ?>
                <td><?php echo $rata;?></td>
                <td><?php echo $keterangan;?></td>
            </tr>
            <?php } ?>

        </table>
    </fieldset>
    
</body>
</html>
