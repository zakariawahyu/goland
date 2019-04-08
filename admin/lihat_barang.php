<div class="row">
  <div class="col-xs-12">
    <div class="box box-info">
      <div class="box-header">
        <h3 class="box-title">Data Barang</h3>
      </div>
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <tr>
            <td>Kode Barang</td>
            <td>Nama Barang</td>
            <td>Satuan</td>
            <td>Harga</td>
            <td>Action</td>
          </tr>
          <?php
          include "../login/koneksi.php";
          $query = "select * from barang";
          $hasil = mysqli_query($koneksi, $query);

          while ($row = mysqli_fetch_array($hasil)) {
            ?>
            <tr>
              <td><?php echo $row['kode_barang']; ?></td>
              <td><?php echo $row['nama_barang']; ?></td>
              <td><?php echo $row['satuan']; ?></td>
              <td>Rp. <?php echo $row['harga_barang']; ?></td>
              <td>
                <button type="submit" class="btn btn-default" name="hapus"><a href="hapus_barang.php?id=<?php echo $row['kode_barang']; ?>">Hapus
                </a></button>
              </td>
            </tr>
            <?php
          }
           ?>
        </table>
      </div>
    </div>
  </div>
</div>
