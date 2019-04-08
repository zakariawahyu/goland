<?php
include "../login/koneksi.php";
if (isset($_GET['id'])) {
  $kode = $_GET['id'];
  $query = "DELETE FROM barang WHERE kode_barang='$kode'";
  $hasil = mysqli_query($koneksi, $query);
  if ($hasil) {
    echo "<script>alert('Berhasil Dihapus'); document.location='index.php?page=lihat_barang';</script>";
  } else {
    echo "<script>alert('Gagal Dihapus')</script>";
  }
}
?>
