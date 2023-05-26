<?php
require_once "bootstrap.html";

$datasiswa = new App\pembayaran;
$rows = $datasiswa->tampil();

?>

<h2 class="mt-8">Data Pembayaran Siswa</h2>

<table>
    <tr>
        <th>NO</th>
        <th style="text-align: center;width: 5%">NIS</th>
        <th style="text-align: center;width: 17%">NAMA</th>
        <th style="text-align: center;width: 5%">KELAS</th>
        <th style="text-align: center;width: 10%">AKSI</th>
    </tr>
    <?php 
    $nomor = 1;
    foreach ($rows as $row) { ?>
        <tr>
            <td style="text-align: center;width: 2%"><?php echo $nomor;$nomor++ ?></td>
            <td style="text-align: center;width: 5%"><?php echo $row['nis']; ?></td>
            <td><?php echo $row['nama_siswa']; ?></td>
            <td style="text-align: center;width: 5%"><?php echo $row['kelas']; ?></td>
            <td style="text-align: center;">
                <a class="btn btn-warning btn-sm" href="index.php?hal=pembayaran_input&id_siswa=<?php echo $row['id_siswa']; ?>">
                    <i class="bi bi-pencil-square"></i>&nbsp;Bayar
                </a>    
            </td>
        </tr>
    <?php } ?>
</table>
