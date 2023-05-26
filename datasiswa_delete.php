<?php
require_once "bootstrap.html";


$id = $_GET['id'];

$datasiswa = new App\datasiswa();
$rows = $datasiswa->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=datasiswa_tampil" class="btn btn-infox  ">Kembali</a>
</div>