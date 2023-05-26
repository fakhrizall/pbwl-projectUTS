<?php
require_once "bootstrap.html";
?>

<h2>Pembayaran Data Siswa</h2>

<form action="pembayaran_proses.php" method="post">
  
<form>
  <div class="form-group">
  <div class="form-group col-md-4">
      <label for="form_nis">Untuk Pembayaran</label>
      <input type="text" class="form-control" id="form_namapembayaran" name="form_namapembayaran" placeholder=" Masukkan nama pembayaran">
    </div>
    <div class="form-group col-md-4">
      <label for="form_namasiswa">Jumlah pembayaran</label>
      <input type="text" class="form-control" id="form_jumlahpembayaran" name="form_jumlahpembayaran" placeholder="Masukkan jumlah pembayaran">
    </div>
    <div class="form-group col-md-4">
      <label for="form_kelas">keterangan</label>
      <input type="text" class="form-control" id="form_keterangan" name="form_keterangan" placeholder="Masukkan keterangan">
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