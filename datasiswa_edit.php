<?php

require_once "bootstrap.html";

$id = $_GET['id'];
$datasiswa = new App\datasiswa();

$row = $datasiswa->edit($id);
?>

<h2>Edit Data Siswa</h2>


<form action="datasiswa_proses.php" method="post">
  <div class="form-group">
  <div class="form-group col-md-4">
      <input type="hidden" class="form-control" id="form_id_siswa" name="form_id_siswa" value="<?php echo $row['id_siswa']; ?>">
    </div>
  <div class="form-group col-md-4">
      <label for="form_nis">NIS</label>
      <input type="text" class="form-control" id="form_nis" name="form_nis" value="<?php echo $row['nis']; ?>" placeholder=" Masukkan NIS">
    </div>
    <div class="form-group col-md-4">
      <label for="form_namasiswa">Nama Siswa</label>
      <input type="text" class="form-control" id="form_namasiswa" name="form_namasiswa" value="<?php echo $row['nama_siswa']; ?>" placeholder="Masukkan Nama Siswa">
    </div>
    <div class="form-group col-md-4">
      <label for="form_kelas">Kelas</label>
      <input type="text" class="form-control" id="form_kelas" name="form_kelas" value="<?php echo $row['kelas']; ?>" placeholder="Masukkan Kelas">
    </div>

    <div class="form-group col-md-4">
      <label for="form_alamat">Alamat</label>
      <input type="text" class="form-control" id="form_alamat" name="form_alamat" value="<?php echo $row['alamat']; ?>" placeholder="Masukkan Alamat siswa">
    </div>
    <div class="form-group col-md-4">
      <label for="form_notelepon">No TELEPON</label>
      <input type="text" class="form-control" id="form_notelepon" name="form_notelepon" value="<?php echo $row['no_telepon']; ?>" placeholder="Masukkan nomor telepon orang tua">
    </div>
  </div>
  <button type="submit" class="btn btn-success" name="btn_update">Simpan perubahan</button>
</form>

<!-- <form action="datasiswa_proses.php" method="post">
    <input type="hidden" name="id_siswa" value="<?php echo $row['id_siswa']; ?>">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="cat_name" value="<?php echo $row['cat_name']; ?>"></td>
        </tr>
        <tr>
            <td>KETERANGAN</td>
            <td><textarea name="cat_text" id="" cols="30" rows="10"><?php echo $row['cat_text']; ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form> -->