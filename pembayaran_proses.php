<?php

require_once "inc/Koneksi.php";
require_once "app/pembayaran.php";

$kat = new App\pembayaran();

if (isset($_POST['btn_simpan'])) {
    $kat->simpan();
    header("location:index.php?hal=pembayaran_tampil");
}

