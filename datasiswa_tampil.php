<?php
require_once "bootstrap.html";

$datasiswa = new App\datasiswa;
$rows = $datasiswa->tampil();

?>

<h2 class="mt-8">Data Siswa</h2>
<a href="index.php?hal=datasiswa_input">
<button type="button" class="btn btn-success my-2"><i class="bi bi-person-plus"></i>&nbsp;Tambah Data Siswa</button></a>
<table border="1" class="col-md-12"></a>

<table>
    <tr>
        
        <th>NO</th>
        <th style="text-align: center;width: 10%">NIS</th>
        <th style="text-align: center;width: 17%">NAMA</th>
        <th style="text-align: center;width: 10%">KELAS</th>
        <th style="text-align: center;width: 23%">ALAMAT</th>
        <th style="text-align: center;width: 15%">NO TELEPON</th>
        <th style="text-align: center;width: 20%">AKSI</th>
        
        
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
        <td style="text-align: center;" ><a class="btn btn-warning btn-sm" href="index.php?hal=datasiswa_edit&id=<?php echo $row['id_siswa']; ?>"><i class="bi bi-pencil-square "></i>&nbsp;Edit</a> |
        <a class="btn btn-danger btn-sm" href="index.php?hal=datasiswa_delete&id=<?php echo $row['id_siswa']; ?>"><i class="bi bi-trash3"></i>&nbsp;Delete</a></td>    
    </tr>
    <?php } ?>
</table>
