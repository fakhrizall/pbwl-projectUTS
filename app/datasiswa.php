<?php

namespace App;
use Inc\Koneksi as Koneksi;

class datasiswa extends Koneksi {

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
        $form_nis = $_POST['form_nis'];
        $form_namasiswa = $_POST['form_namasiswa'];
        $form_kelas = $_POST['form_kelas'];
        $form_alamat = $_POST['form_alamat'];
        $form_notelepon = $_POST['form_notelepon'];

        $sql = "INSERT INTO tb_siswa (nis, nama_siswa, kelas, alamat, no_telepon) VALUES (:form_nis, :form_namasiswa, :form_kelas, :form_alamat, :form_notelepon)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":form_nis", $form_nis);
        $stmt->bindParam(":form_namasiswa", $form_namasiswa);
        $stmt->bindParam(":form_kelas", $form_kelas);
        $stmt->bindParam(":form_alamat", $form_alamat);
        $stmt->bindParam(":form_notelepon", $form_notelepon);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_siswa WHERE id_siswa=:id_siswa";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_siswa", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
{
    $form_nis = $_POST['form_nis'];
    $form_namasiswa = $_POST['form_namasiswa'];
    $form_kelas = $_POST['form_kelas'];
    $form_alamat = $_POST['form_alamat'];
    $form_notelepon = $_POST['form_notelepon'];
    $form_id_siswa = $_POST['form_id_siswa']; 

    $sql = "UPDATE tb_siswa SET nis=:form_nis, nama_siswa=:form_namasiswa, kelas=:form_kelas, alamat=:form_alamat, no_telepon=:form_notelepon WHERE id_siswa=:form_id_siswa"; 
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":form_nis", $form_nis);
    $stmt->bindParam(":form_namasiswa", $form_namasiswa);
    $stmt->bindParam(":form_kelas", $form_kelas);
    $stmt->bindParam(":form_alamat", $form_alamat);
    $stmt->bindParam(":form_notelepon", $form_notelepon);
    $stmt->bindParam(":form_id_siswa", $form_id_siswa); 
   
    if ($stmt->execute()) {
        header("location: index.php?hal=datasiswa_tampil");
        exit();
    } else {
        echo "Data gagal diubah";
        exit();
    }
}



    public function delete($id)
    {

        $sql = "DELETE FROM tb_siswa WHERE id_siswa=:id_siswa";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_siswa", $id);
        $stmt->execute();

    }

}