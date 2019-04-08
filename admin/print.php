<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" />
    <title></title>
  </head>
  <style media="screen">
<?php
include "../login/koneksi.php";
if (isset($_GET['id'])) {
  $kode = $_GET['id'];
  $query = "select kode_pesanan, jumlah_pesanan, total_harga, jenis_layanan, tgl_pesanan, alamat_laundry, notelp_laundry,
  jenis_parfum, antar_jemput,username_member, nama_laundry, nama_barang, nama_layanan, status_pesanan
from pesanan ps, member mb , laundry ln , barang br, layanan ly
where ps.id_member = mb.id_member and ps.kode_laundry = ln.kode_laundry
and ps.kode_barang = br.kode_barang and ps.kode_layanan = ly.kode_layanan and kode_pesanan='$kode'";
$hasil = mysqli_query($koneksi, $query);
while ($row = mysqli_fetch_array($hasil)) {
  ?>

  </style>
  <body onload="javascript:window.print()">
    <div class="container">
      <div class="row">
        <br><br>
        <center><h1>GO-LAUNDRY</h1></center>
        <center><h5>---+++ Nota Untuk Laundry +++---</h5></center>
        <center><h3>-----------------------------------------------------------------------------------------</h3></center>
        <h4>Nama Laundry&nbsp : <?php echo $row['nama_laundry']; ?></h4>
        <h5>Alamat  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : <?php echo $row['alamat_laundry']; ?></h5>
        <h4>No Telp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : <?php echo $row['notelp_laundry']; ?></h4>
        <center><h3>-----------------------------------------------------------------------------------------</h3></center>
        <h4>Nomor Pesanan &nbsp&nbsp&nbsp: <?php echo $row['kode_pesanan']; ?> </h4>
        <h4>Nama Pemesan &nbsp&nbsp&nbsp: <?php echo $row['username_member']; ?></h4>
        <h4>Tanggal Pesanan &nbsp: <?php echo $row['tgl_pesanan']; ?></h4><br>
        <table class="table table-bordered table-striped table-hover">
          <tr>
            <td>Nama Layanan</td>
            <td>Jenis Bahan</td>
            <td>Jumlah</td>
            <td>Total Harga</td>
          </tr>
          <tr>
            <td><?php echo $row['jenis_layanan']; ?></td>
            <td><?php echo $row['nama_barang']; ?></td>
            <td><?php echo $row['jumlah_pesanan']; ?></td>
            <td>Rp. <?php echo $row['total_harga']; ?></td>
          </tr>
        </table>
        <br>
        <center><h5>---+++ CEPAT, TEPAT, DIANTAR KE TEMPAT +++---</h5></center>
        <center><h5>~ COPYRIGHT © 2018 ~</h5></center>
      </div>
    </div>

    <?php
  }
}
if (isset($_REQUEST['print']))
{
	include $_REQUEST['print'] . ".php";
}
?>
  </body>
</html>
