<?php
require_once "bootstrap.html";
?>

<h2>Tambah Data Siswa</h2>

<form action="datasiswa_proses.php" method="post">
  
<form>
  <div class="form-group">
  <div class="form-group col-md-4">
      <label for="form_nis">NIS</label>
      <input type="text" class="form-control" id="form_nis" name="form_nis" placeholder=" Masukkan NIS">
    </div>
    <div class="form-group col-md-4">
      <label for="form_namasiswa">Nama Siswa</label>
      <input type="text" class="form-control" id="form_namasiswa" name="form_namasiswa" placeholder="Masukkan Nama Siswa">
    </div>
    <div class="form-group col-md-4">
      <label for="form_kelas">Kelas</label>
      <input type="text" class="form-control" id="form_kelas" name="form_kelas" placeholder="Masukkan Kelas">
    </div>

    <div class="form-group col-md-4">
      <label for="form_alamat">Alamat</label>
      <input type="text" class="form-control" id="form_alamat" name="form_alamat" placeholder="Masukkan Alamat siswa">
    </div>
    <div class="form-group col-md-4">
      <label for="form_notelepon">No TELEPON</label>
      <input type="text" class="form-control" id="form_notelepon" name="form_notelepon" placeholder="Masukkan nomor telepon orang tua">
    </div>
  </div>
  <button type="submit" class="btn btn-success" name="btn_simpan">Simpan</button>
</form>


<!-- <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="cat_name"></td>
        </tr>
        <tr>
            <td>KELAS</td>
            <td><input type="text" name="cat_name"></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="cat_name"></td>
        </tr>
        <tr>
            <td>NO TELEPON</td>
            <td><input type="text" name="cat_name"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table> -->
</form>