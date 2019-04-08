<?php
include "../login/koneksi.php";
if (isset($_GET['id'])) {
  $kode = $_GET['id'];
  $query = "UPDATE pesanan set status_pesanan='Selesai' where kode_pesanan='$kode'";
  $hasil = mysqli_query($koneksi, $query);
  if ($hasil) {
    echo "<script>alert('Berhasil Diselesaikan'); document.location='index.php?page=pesanan_proses';</script>";
  } else {
    echo "<script>alert('Gagal Diselesaikan')</script>";
  }
}
?>
