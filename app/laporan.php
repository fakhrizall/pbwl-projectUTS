<?php

namespace App;
use Inc\Koneksi as Koneksi;

class laporan extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_siswa 
                JOIN tb_jenis_pembayaran ON tb_siswa.id_siswa = tb_jenis_pembayaran.id_jenis";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
    
        $data = [];
    
        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }
    
        return $data;
    }
    

}