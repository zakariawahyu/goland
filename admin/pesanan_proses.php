<div class="row">
  <div class="col-xs-12">
    <form action="#" method="get" class="form-group">
      <div class="input-group">
      <input type="text" onkeyup="myFunction()" id="myInput" class="form-control" placeholder="Search Nama...">
      </div>
    </form>
    <div id="myTable">
    <div class="box box-info">
      <div class="box-header">
        <h3 class="box-title">Data Pemesanan</h3>
      </div>
      <div class="box-body">
      <form method="POST">
        <table id="example1" class="table table-bordered table-striped table-hover">
          <thead>
            <tr>
              <th>Nomer Pemesanan</th>
              <th>Nama Pemesan</th>
              <th>Quantity (kg)</th>
              <th>Total Harga</th>
              <th>Jenis Bahan</th>
              <th>Paket</th>
              <th>Jenis Paket</th>
              <th>Jenis Parfum</th>
              <th>Jasa Antar Jemput</th>
              <th>Tanggal Pemesanan</th>
              <th>Status Pesanan</th>
              <th>Selesaikan</th>
            </tr>
          </thead>
            <?php
            include "../login/koneksi.php";
            $nama_laundry = $_SESSION['username'];
            $query1 = "SELECT * FROM laundry WHERE username_laundry='$nama_laundry'";
            $hasil1 = mysqli_query($koneksi, $query1);
            $row1 = mysqli_fetch_array($hasil1);
            $nama = $row1['username_laundry'];


            $query2 = "select kode_pesanan, jumlah_pesanan, total_harga, jenis_layanan, tgl_pesanan,
            jenis_parfum, antar_jemput,username_member, nama_laundry, nama_barang, nama_layanan, status_pesanan
from pesanan ps, member mb , laundry ln , barang br, layanan ly
where ps.id_member = mb.id_member and ps.kode_laundry = ln.kode_laundry
and ps.kode_barang = br.kode_barang and ps.kode_layanan = ly.kode_layanan and username_laundry='$nama' and status_pesanan='Sedang Diproses' order by kode_pesanan desc";
            $hasil2 = mysqli_query($koneksi, $query2);
            while ($row = mysqli_fetch_array($hasil2)) {
              ?>
              <tr>
                <td><?php echo $row['kode_pesanan']; ?></td>
                <td><?php echo $row['username_member']; ?></td>
                <td><?php echo $row['jumlah_pesanan']; ?></td>
                <td>Rp. <?php echo $row['total_harga']; ?></td>
                <td><?php echo $row['nama_barang']; ?></td>
                <td><?php echo $row['nama_layanan']; ?></td>
                <td><?php echo $row['jenis_layanan']; ?></td>
                <td><?php echo $row['jenis_parfum']; ?></td>
                <td><?php echo $row['antar_jemput']; ?></td>
                <td><?php echo $row['tgl_pesanan']; ?></td>
                <td><?php echo $row['status_pesanan']; ?></td>
                <?php
                if ($row['status_pesanan'] == 'Sedang di proses') {
                  // code...
                }
                 ?>
                <td><button type="submit" class="btn btn-default"><a href="selesai.php?id=<?php echo $row['kode_pesanan']; ?>">Selesai</a></button></td>
              </tr>
              <?php
            }

             ?>
        </table>
      </form>
      </div>
    </div>
  </div>
  </div>
</div>
<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
