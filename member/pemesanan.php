<?php
date_default_timezone_set('Asia/Jakarta');
include "../login/koneksi.php";
if (isset($_POST['submit'])) {
  session_start();
  if ($_SESSION['username']) {
    $member = $_SESSION['username'];
    $query1 = "SELECT * FROM member where username_member ='$member'";
    $hasil1 = mysqli_query($koneksi, $query1);
    $data = mysqli_fetch_array($hasil1);
    $id_member = $data['id_member'];
    $tgl = date('d-M-Y');
    $kode_laundry = $_POST['setuju'];
    $jumlah = $_POST['qty'];
    $produk = $_POST['produk'];
    $paket = $_POST['paket'];
    $parfum = $_POST['parfum'];
    $antar = $_POST['kurir'];
    $query2 = "SELECT * FROM layanan where nama_layanan='$produk' and jenis_layanan='$paket' and jenis_parfum='$parfum' and antar_jemput='$antar'";
    $hasil2 = mysqli_query($koneksi,$query2);
    $row = mysqli_fetch_array($hasil2);
    $harga_layanan = $row['harga'];
    $kode_layanan = $row['kode_layanan'];
    $nama_barang = $_POST['pilihbahan'];
    $query4 = "SELECT * FROM barang where nama_barang='$nama_barang'";
    $hasil4 = mysqli_query($koneksi, $query4);
    $rowbarang = mysqli_fetch_array($hasil4);
    $harga_barang = $rowbarang['harga_barang'];
    $kode_barang = $rowbarang['kode_barang'];
    $hartot = ($harga_barang*$jumlah) + $harga_layanan;
    $query3 = "INSERT INTO pesanan VALUES('','$tgl','$jumlah','$hartot','$id_member','$kode_layanan','$kode_laundry', '$kode_barang','Belum Diproses')";
    $hasil3 = mysqli_query($koneksi, $query3);
    if ($hasil3) {
      echo "<script>alert('Terimakasih Telah Melakukan Pemesanan, Pesanan akan segera di proses');document.location='index.php';</script>";
    } else {
      echo "<script>alert('Pemesanan Gagal, Silahkan lengkapi data pemesanan');document.location='index.php';</script>";
    }
  }
}

 ?>
