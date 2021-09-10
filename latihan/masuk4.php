<?php
    if (isset($_POST['masuk'])) {
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
        $tanggalpengembalian = $_POST ['tanggalpengembalian'];
   
        
       
 function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
}

if ($supir == "ya") {
    $biayaharian = 250000+25000;
} else {
    $biayaharian = 150000;
}


$tgl1 = new DateTime("$tanggalpinjam");
$tgl2 = new DateTime("$tanggalkembali");
$jarak = $tgl2->diff($tgl1);

$tgl11 = new DateTime("$tanggalkembali");
$tgl22 = new DateTime("$tanggalpengembalian");
$lama = $tgl22->diff($tgl11);

$denda = 240000 * $jarak->d;

$totalbiaya = $biayaharian*$jarak->d;
$totaldenda =$jarak->d * $denda;
$totalpembayaran= $totalbiaya + $totaldenda;
} 
 
?>
<html>
<style>   
    @media print
    {
    .noprint {display:none;}
    }
</style>
 
<div class="noprint">
<!-- Tombol print / element yang ingin dihilangkan saat print -->
</div>
<fieldset>
    <table border=5 width=100% align=”center”>
        <tr><th colspan="6">DATA DIRI</th></tr>
        <tr>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>NIk</th>
            <th>Agama</th>
            
            <th colspan="2">Penjamin</th>
            <tr>
                <td><?php echo "$nama"; ?> </td>
                <td><?php echo "$nik"; ?> </td>
                <td><?php echo "$jeniskelamin"; ?> </td>
                <td><?php echo "$agama"; ?> </td>
                <td colspan="2"><?php echo "$penjamin"; ?></td>
                <!-- <td><?php echo "$tanggalpinjam"; ?> </td>
                <td><?php echo "$tanggalpengembalian"; ?> </td> -->

            </tr>

        </tr>
        
        <tr>
            <th colspan="6">DATA PEMINJAMAN MOBIL</th>
        </tr>
        <tr>
            <th>Nama Mobil</th>
            <th>Jenis Mobil</th>
            <th>Merk Mobil</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Menggunakan Supir</th>
        </tr>
        <tr>
            <td><?php echo "$namamobil";?></td>
            <td><?php echo "$jenismobil";?></td>
            <td><?php echo "$merkmobil"; ?></td>`
            <td><?php echo "$tanggalpinjam"; ?></td>
            <td><?php echo "$tanggalkembali";?></td>
            <td><?php echo "$supir" ?></td>
           

        </tr>
        <tr>
            <th colspan="6">Rncian Biaya</th>
        </tr>
        <tr>
            <th colspan="5" align="left">Lama Pinjaman</th>
            <td><?php echo"$jarak->d";?></td>
        </tr>
        <tr>
        <?php  
        
        ?>
            <th colspan="5" align="left">Biaya Harian</th>
            <td><?php echo rupiah($biayaharian); ?></td>
        </tr>

        <tr>
            <th colspan="5" align="left">Telat Mengembalikan</th>
            <td><?php echo"$lama->d"?></td>
        </tr>
        <tr>
            <th colspan="5" align="left">Denda</th>
            <td><?php echo rupiah($denda); ?></td>
        </tr>
        <tr>
            <th colspan="6">Total Biaya</th>
        </tr>

        <tr>
            <th colspan="5" align="left">Total Biaya(Lama Pinjaman * Harian)</th>
            <td><?php echo rupiah($totalbiaya)?>;</td>
        </tr>
        <tr>
        <th colspan="5" align="left">Total Denda(Telat Mengembalikan  * Biaya Denda)</th>
            <td><?php echo rupiah($totaldenda);?></td>
        </tr>
        <tr>
            <th colspan="6">Pembayaran</th>
        </tr>

        <tr>
            <th colspan="5" align="left">Total Pembayaran(Biaya Telat + Total Denda) </th>
            <td><?php echo rupiah($totalpembayaran);?></td>
        </tr>

        

        
    </table>
    <div style=text-align:right>Bandung,<?php echo date('d  M  Y');?>
    <br><br><br><br><br>
    <br>Bendahara<br><br>
    <div class="noprint">
    <button onClick="window.print();">Print</button>
    </div>
</div>
<form action="masuk5.php" method="post">
    <br>
    <b>Masukan Uang pembayaran :</b>
        <input type="text" name="uangpembayaran">
        <input type="submit" value="Bayar" name="proses">  
        <input type="hidden" name="totalpembayaran" value=<?php echo 
        "$totalpembayaran";?> >
</html>
</fieldset>
</html>