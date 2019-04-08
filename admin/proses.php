<?php
include "../login/koneksi.php";
if (isset($_GET['id'])) {
  $kode = $_GET['id'];
  $query = "UPDATE pesanan set status_pesanan='Sedang Diproses' where kode_pesanan='$kode'";
  $hasil = mysqli_query($koneksi, $query);
  if ($hasil) {
    echo "<script>alert('Berhasil Diproses'); document.location='index.php?page=lihat_pemesanan';</script>";
  } else {
    echo "<script>alert('Gagal Diproses')</script>";
  }
}
?>
