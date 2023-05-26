<?php
require_once "bootstrap.html";

$laporan = new App\laporan;
$rows = $laporan->tampil();

?>

<h2 class="mt-8">Laporan Data Siswa</h2>

<table>
    <tr>
        <th>NO</th>
        <th style="text-align: center;width: 10%">NIS</th>
        <th style="text-align: center;width: 17%">NAMA</th>
        <th style="text-align: center;width: 10%">KELAS</th>
        <th style="text-align: center;width: 23%">ALAMAT</th>
        <th style="text-align: center;width: 23%">No TELEPON</th>
        <th style="text-align: center;width: 15%">NAMA PEMBAYARAN</th>
        <th style="text-align: center;width: 15%">JUMLAH BAYAR</th>
        <th style="text-align: center;width: 15%">KETERANGAN</th>
    </tr>
    <?php 
    $nomor = 1;
    foreach ($rows as $row) { ?>
        <tr>
            <td style="text-align: center;width: 2%"><?php echo $nomor;$nomor++ ?></td>
            <td style="text-align: center;width: 10%"><?php echo $row['nis']; ?></td>
            <td><?php echo $row['nama_siswa']; ?></td>
            <td style="text-align: center;width: 10%"><?php echo $row['kelas']; ?></td>
            <td><?php echo $row['alamat']; ?></td>
            <td style="text-align: center;width: 15%"><?php echo $row['no_telepon']; ?></td>
            <td style="text-align: center;width: 15%"><?php echo $row['nama_pembayaran']; ?></td>
            <td style="text-align: center;width: 15%"><?php echo $row['jumlah_bayar']; ?></td>
            <td style="text-align: center;width: 15%"><?php echo $row['keterangan']; ?></td>
        </tr>
    <?php } ?>
</table>
