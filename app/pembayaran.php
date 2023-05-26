<?php

namespace App;
use Inc\Koneksi as Koneksi;

class pembayaran extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_siswa";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan()
    {
        $form_namapembayaran = $_POST['form_namapembayaran'];
        $form_jumlahpembayaran = $_POST['form_jumlahpembayaran'];
        $form_keterangan = $_POST['form_keterangan'];
        
        $sql = "INSERT INTO tb_jenis_pembayaran (nama_pembayaran, jumlah_bayar, keterangan) VALUES (:form_namapembayaran, :form_jumlahpembayaran, :form_keterangan)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":form_namapembayaran", $form_namapembayaran);
        $stmt->bindParam(":form_jumlahpembayaran", $form_jumlahpembayaran);
        $stmt->bindParam(":form_keterangan", $form_keterangan);
        $stmt->execute();

    }

}