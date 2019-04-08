<div class="row">
  <div class="col-md-12">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Form Tambah Barang</h3>
      </div>
      <form class="form-horizontal" method="post">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Nama Barang</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Barang" name="nama_barang">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Satuan</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Satuan" name="satuan">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Harga</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Harga" name="harga">
          </div>
        </div>
        <div class="box-footer">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-success" name="tambah">Tambah</button>
            <?php
            include "../login/koneksi.php";
            if (isset($_POST['tambah'])) {
              $nama = $_POST['nama_barang'];
              $jenis = $_POST['satuan'];
              $harga = $_POST['harga'];
              $query = "INSERT INTO barang values(null, '$nama', '$jenis' , '$harga')";
              $hasil = mysqli_query($koneksi, $query);
              if ($hasil) {
                echo "<script>alert('Data Barang Berhasil Ditambahkan')</script>";
              } else {
                echo "<script>alert('Data Barang Gagal Ditambahkan')</script>";
              }
            }
            ?>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
