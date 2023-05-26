<?php

require_once "inc/Koneksi.php";
require_once "app/datasiswa.php";

$kat = new App\datasiswa();

if (isset($_POST['btn_simpan'])) {
    $kat->simpan();
    header("location:index.php?hal=datasiswa_tampil");
}

if (isset($_POST['btn_update'])) {
    $kat->update();
    header("location:index.php?hal=datasiswa_tampil");
}