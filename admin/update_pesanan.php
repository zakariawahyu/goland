<?php
include "../login/koneksi.php";
if (isset($_GET['id'])) {
  $kode = $_GET['id'];
  $qty = $_GET['qty'];
  $query = "UPDATE pesanan set jumlah_pesanan='$qty' where kode_pesanan='$kode'";
  $hasil = mysqli_query($koneksi, $query);
  if ($hasil) {
    echo "<script>alert('Berhasil Di Update'); document.location='index.php?page=pesanan_proses';</script>";
  } else {
    echo "<script>alert('Gagal Di Update')</script>";
  }
}

?>
