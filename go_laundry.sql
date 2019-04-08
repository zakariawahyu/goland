-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04 Mei 2018 pada 04.42
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `go_laundry`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `kode_barang` int(25) NOT NULL,
  `nama_barang` varchar(55) NOT NULL,
  `satuan` varchar(55) NOT NULL,
  `harga_barang` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`kode_barang`, `nama_barang`, `satuan`, `harga_barang`) VALUES
(1, 'Kaos', 'Kg', '5000'),
(2, 'Pakaian Dalam', 'Kg', '5000'),
(3, 'Kemeja', 'Kg', '5000'),
(4, 'Celana Panjang', 'Kg', '5000'),
(5, 'Celana Pendek', 'Kg', '5000'),
(6, 'Sarung', 'Kg', '5000'),
(7, 'Mukena', 'Kg', '5000'),
(8, 'Sweater', 'Pcs', '2500'),
(9, 'Jaket', 'Pcs', '3000'),
(10, 'Kebaya', 'Pcs', '600'),
(11, 'Jas Pesta', 'Pcs', '6000'),
(12, 'Sprei', 'Pcs', '2500'),
(13, 'Handuk', 'Pcs', '2500'),
(14, 'Jeans', 'Pcs', '3000'),
(15, 'Rok', 'Pcs', '2500'),
(16, 'Selimut', 'Pcs', '2500'),
(17, 'Daster', 'Pcs', '2500'),
(18, 'Baju Muslim', 'Pcs', '2500'),
(19, 'Sarung Tangan', 'Pcs', '2500'),
(20, 'Sepatu', 'Pcs', '3500'),
(21, 'Tas', 'Pcs', '3500'),
(22, 'Kerudung', 'Pcs', '2500'),
(23, 'Ciput', 'Pcs', '2500');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laundry`
--

CREATE TABLE `laundry` (
  `kode_laundry` int(25) NOT NULL,
  `username_laundry` varchar(55) NOT NULL,
  `password_laundry` varchar(55) NOT NULL,
  `nama_laundry` varchar(55) NOT NULL,
  `notelp_laundry` varchar(55) NOT NULL,
  `alamat_laundry` text NOT NULL,
  `latitude` varchar(55) NOT NULL,
  `longitude` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laundry`
--

INSERT INTO `laundry` (`kode_laundry`, `username_laundry`, `password_laundry`, `nama_laundry`, `notelp_laundry`, `alamat_laundry`, `latitude`, `longitude`) VALUES
(1, 'Liquid', '827ccb0eea8a706c4c34a16891f84e7b', 'Liquid Laundry Sukabirus', '0812-2415-5386', 'Jl. Sukabirus No.94, Citeureup, Dayeuhkolot, Bandung, Jawa Barat 40257', '-6.977238', '107.632563'),
(2, 'Seven', '827ccb0eea8a706c4c34a16891f84e7b', 'Seven Laundry Sukapura', '0856-2228-059', 'Jl. Mangga Dua No.70, Sukapura, Dayeuhkolot, Bandung, Jawa Barat 40267', '-6.970799', '107.634172'),
(3, 'Kinclong', '827ccb0eea8a706c4c34a16891f84e7b', 'Kinclong Laundry Sukabirus', '0812-1320-4812', 'Jalan sukabirus, Rt 01 Rw 13 Kostan Salsabila, Citeureup, Dayeuhkolot, Bandung, Jawa Barat 40258', '-6.978918', '107.629888'),
(4, 'Bioclean', '827ccb0eea8a706c4c34a16891f84e7b', 'Bio Clean Laundry Sukapura', '0896-6634-2820', 'Jl. Sukapura No.90, Sukapura, Dayeuhkolot, Bandung, Jawa Barat 40267', '-6.971694', '107.633521'),
(5, 'Waroenk', '827ccb0eea8a706c4c34a16891f84e7b', 'Waroenk Laundry Bojongsoang', '(022) 7506860', 'Jl. Bojongsoang No.307, Cipagalo, Bojongsoang, Bandung, Jawa Barat 40288', '-6.975849', '107.633248'),
(6, 'Papin', '827ccb0eea8a706c4c34a16891f84e7b', 'Papin Laundry Sukapura', '0853-1500-0496', 'Jl. Sukapura No.10, Sukapura, Dayeuhkolot, Kota Bandung, Jawa Barat 40267', '-6.9709742', '107.6279746'),
(7, 'fit', '827ccb0eea8a706c4c34a16891f84e7b', 'FIT Laundry', '085-784-452-111', 'Telkom University', '-6.9709733', '107.6279758');

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan`
--

CREATE TABLE `layanan` (
  `kode_layanan` int(25) NOT NULL,
  `nama_layanan` varchar(55) NOT NULL,
  `jenis_layanan` varchar(55) NOT NULL,
  `jenis_parfum` varchar(55) NOT NULL,
  `antar_jemput` varchar(55) NOT NULL,
  `harga` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `layanan`
--

INSERT INTO `layanan` (`kode_layanan`, `nama_layanan`, `jenis_layanan`, `jenis_parfum`, `antar_jemput`, `harga`) VALUES
(1, 'Cuci', 'Normal Services', 'Sakura', 'Ya', '2000'),
(2, 'Cuci', 'Normal Services', 'Sakura', 'Tidak', '1000'),
(3, 'Cuci', 'Normal Services', 'Lavender', 'Ya', '2000'),
(4, 'Cuci', 'Normal Services', 'Lavender', 'Tidak', '1000'),
(5, 'Cuci', 'Normal Services', 'Luxor', 'Ya', '2000'),
(6, 'Cuci', 'Normal Services', 'Luxor', 'Tidak', '1000'),
(7, 'Cuci', 'Normal Services', 'Downy Passion', 'Ya', '2000'),
(8, 'Cuci', 'Normal Services', 'Downy Passion', 'Tidak', '1000'),
(9, 'Cuci', 'One Day Services', 'Sakura', 'Ya', '3000'),
(10, 'Cuci', 'One Day Services', 'Sakura', 'Tidak', '2000'),
(11, 'Cuci', 'One Day Services', 'Lavender', 'Ya', '3000'),
(12, 'Cuci', 'One Day Services', 'Lavender', 'Tidak', '2000'),
(13, 'Cuci', 'One Day Services', 'Luxor', 'Ya', '3000'),
(14, 'Cuci', 'One Day Services', 'Luxor', 'Tidak', '2000'),
(15, 'Cuci', 'One Day Services', 'Downy Passion', 'Ya', '3000'),
(16, 'Cuci', 'One Day Services', 'Downy Passion', 'Tidak', '2000'),
(17, 'Cuci', 'Urgent Services', 'Sakura', 'Ya', '4000'),
(18, 'Cuci', 'Urgent Services', 'Sakura', 'Tidak', '3000'),
(19, 'Cuci', 'Urgent Services', 'Lavender', 'Ya', '4000'),
(20, 'Cuci', 'Urgent Services', 'Lavender', 'Tidak', '3000'),
(21, 'Cuci', 'Urgent Services', 'Luxor', 'Ya', '4000'),
(22, 'Cuci', 'Urgent Services', 'Luxor', 'Tidak', '3000'),
(23, 'Cuci', 'Urgent Services', 'Downy Passion', 'Ya', '4000'),
(24, 'Cuci', 'Urgent Services', 'Downy Passion', 'Tidak', '3000'),
(25, 'Cuci + Seterika', 'Normal Services', 'Sakura', 'Ya', '3000'),
(26, 'Cuci + Seterika', 'Normal Services', 'Sakura', 'Tidak', '2000'),
(27, 'Cuci + Seterika', 'Normal Services', 'Lavender', 'Ya', '3000'),
(28, 'Cuci + Seterika', 'Normal Services', 'Lavender', 'Tidak', '2000'),
(29, 'Cuci + Seterika', 'Normal Services', 'Luxor', 'Ya', '3000'),
(30, 'Cuci + Seterika', 'Normal Services', 'Luxor', 'Tidak', '2000'),
(31, 'Cuci + Seterika', 'Normal Services', 'Downy Passion', 'Ya', '3000'),
(32, 'Cuci + Seterika', 'Normal Services', 'Downy Passion', 'Tidak', '2000'),
(33, 'Cuci + Seterika', 'One Day Services', 'Sakura', 'Ya', '4000'),
(34, 'Cuci + Seterika', 'One Day Services', 'Sakura', 'Tidak', '3000'),
(35, 'Cuci + Seterika', 'One Day Services', 'Lavender', 'Ya', '4000'),
(36, 'Cuci + Seterika', 'One Day Services', 'Lavender', 'Tidak', '3000'),
(37, 'Cuci + Seterika', 'One Day Services', 'Luxor', 'Ya', '4000'),
(38, 'Cuci + Seterika', 'One Day Services', 'Luxor', 'Tidak', '3000'),
(39, 'Cuci + Seterika', 'One Day Services', 'Downy Passion', 'Ya', '4000'),
(40, 'Cuci + Seterika', 'One Day Services', 'Downy Passion', 'Tidak', '3000'),
(41, 'Cuci + Seterika', 'Urgent Services', 'Sakura', 'Ya', '5000'),
(42, 'Cuci + Seterika', 'Urgent Services', 'Sakura', 'Tidak', '4000'),
(43, 'Cuci + Seterika', 'Urgent Services', 'Lavender', 'Ya', '5000'),
(44, 'Cuci + Seterika', 'Urgent Services', 'Lavender', 'Tidak', '4000'),
(45, 'Cuci + Seterika', 'Urgent Services', 'Luxor', 'Ya', '5000'),
(46, 'Cuci + Seterika', 'Urgent Services', 'Luxor', 'Tidak', '4000'),
(47, 'Cuci + Seterika', 'Urgent Services', 'Downy Passion', 'Ya', '5000'),
(48, 'Cuci + Seterika', 'Urgent Services', 'Downy Passion', 'Tidak', '4000'),
(49, 'Dry Cleaning', 'Normal Services', 'Sakura', 'Ya', '5000'),
(50, 'Dry Cleaning', 'Normal Services', 'Sakura', 'Tidak', '4000'),
(51, 'Dry Cleaning', 'Normal Services', 'Lavender', 'Ya', '5000'),
(52, 'Dry Cleaning', 'Normal Services', 'Lavender', 'Tidak', '4000'),
(53, 'Dry Cleaning', 'Normal Services', 'Luxor', 'Ya', '5000'),
(54, 'Dry Cleaning', 'Normal Services', 'Luxor', 'Tidak', '4000'),
(55, 'Dry Cleaning', 'Normal Services', 'Downy Passion', 'Ya', '5000'),
(56, 'Dry Cleaning', 'Normal Services', 'Downy Passion', 'Tidak', '4000'),
(57, 'Dry Cleaning', 'One Day Services', 'Sakura', 'Ya', '6000'),
(58, 'Dry Cleaning', 'One Day Services', 'Sakura', 'Tidak', '5000'),
(59, 'Dry Cleaning', 'One Day Services', 'Lavender', 'Ya', '6000'),
(60, 'Dry Cleaning', 'One Day Services', 'Lavender', 'Tidak', '5000'),
(61, 'Dry Cleaning', 'One Day Services', 'Luxor', 'Ya', '6000'),
(62, 'Dry Cleaning', 'One Day Services', 'Luxor', 'Tidak', '5000'),
(63, 'Dry Cleaning', 'One Day Services', 'Downy Passion', 'Ya', '6000'),
(64, 'Dry Cleaning', 'One Day Services', 'Downy Passion', 'Tidak', '5000'),
(65, 'Dry Cleaning', 'Urgent Services', 'Sakura', 'Ya', '7000'),
(66, 'Dry Cleaning', 'Urgent Services', 'Sakura', 'Tidak', '6000'),
(67, 'Dry Cleaning', 'Urgent Services', 'Lavender', 'Ya', '7000'),
(68, 'Dry Cleaning', 'Urgent Services', 'Lavender', 'Tidak', '6000'),
(69, 'Dry Cleaning', 'Urgent Services', 'Luxor', 'Ya', '7000'),
(70, 'Dry Cleaning', 'Urgent Services', 'Luxor', 'Tidak', '6000'),
(71, 'Dry Cleaning', 'Urgent Services', 'Downy Passion', 'Ya', '7000'),
(72, 'Dry Cleaning', 'Urgent Services', 'Downy Passion', 'Tidak', '6000'),
(73, 'Wet Cleaning', 'Normal Services', 'Sakura', 'Ya', '7000'),
(74, 'Wet Cleaning', 'Normal Services', 'Sakura', 'Tidak', '6000'),
(75, 'Wet Cleaning', 'Normal Services', 'Lavender', 'Ya', '7000'),
(76, 'Wet Cleaning', 'Normal Services', 'Lavender', 'Tidak', '6000'),
(77, 'Wet Cleaning', 'Normal Services', 'Luxor', 'Ya', '7000'),
(78, 'Wet Cleaning', 'Normal Services', 'Luxor', 'Tidak', '6000'),
(79, 'Wet Cleaning', 'Normal Services', 'Downy Passion', 'Ya', '7000'),
(80, 'Wet Cleaning', 'Normal Services', 'Downy Passion', 'Tidak', '6000'),
(81, 'Wet Cleaning', 'One Day Services', 'Sakura', 'Ya', '8000'),
(82, 'Wet Cleaning', 'One Day Services', 'Sakura', 'Tidak', '7000'),
(83, 'Wet Cleaning', 'One Day Services', 'Lavender', 'Ya', '8000'),
(84, 'Wet Cleaning', 'One Day Services', 'Lavender', 'Tidak', '7000'),
(85, 'Wet Cleaning', 'One Day Services', 'Luxor', 'Ya', '8000'),
(86, 'Wet Cleaning', 'One Day Services', 'Luxor', 'Tidak', '7000'),
(87, 'Wet Cleaning', 'One Day Services', 'Downy Passion', 'Ya', '8000'),
(88, 'Wet Cleaning', 'One Day Services', 'Downy Passion', 'Tidak', '7000'),
(89, 'Wet Cleaning', 'Urgent Services', 'Sakura', 'Ya', '9000'),
(90, 'Wet Cleaning', 'Urgent Services', 'Sakura', 'Tidak', '8000'),
(91, 'Wet Cleaning', 'Urgent Services', 'Lavender', 'Ya', '9000'),
(92, 'Wet Cleaning', 'Urgent Services', 'Lavender', 'Tidak', '8000'),
(93, 'Wet Cleaning', 'Urgent Services', 'Luxor', 'Ya', '9000'),
(94, 'Wet Cleaning', 'Urgent Services', 'Luxor', 'Tidak', '8000'),
(95, 'Wet Cleaning', 'Urgent Services', 'Downy Passion', 'Ya', '9000'),
(96, 'Wet Cleaning', 'Urgent Services', 'Downy Passion', 'Tidak', '8000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id_member` int(25) NOT NULL,
  `username_member` varchar(55) NOT NULL,
  `password_member` varchar(55) NOT NULL,
  `notelp_member` varchar(55) NOT NULL,
  `status_member` varchar(55) NOT NULL,
  `alamat_member` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `username_member`, `password_member`, `notelp_member`, `status_member`, `alamat_member`) VALUES
(1, 'Zakaria', '202cb962ac59075b964b07152d234b70', '082329027297', 'Non Member', 'Jl. Telekomunikasi No 1 Terusan Buah Batu Asrama Putra Gedung 4'),
(2, 'Tania', '202cb962ac59075b964b07152d234b70', '082274119446', 'Non Member', 'Jl. Telekomunikasi No 1 Terusan Buah Batu Asrama Putri Gedung 12'),
(3, 'Ridho', '202cb962ac59075b964b07152d234b70', '081263700294', 'Non Member', 'Jl. Telekomunikasi No 1 Terusan Buah Batu Asrama Putra Gedung 7'),
(4, 'User', '202cb962ac59075b964b07152d234b70', '087796325478', 'Non Member', 'Jl. Telekomunikasi No 1 Terusan Buah Batu Asrama Putra '),
(5, 'Member', '202cb962ac59075b964b07152d234b70', '085896321452', 'Non Member', 'Jl. Telekomunikasi No 1 Terusan Buah Batu Asrama Putra Gedung 5'),
(6, 'Wahyu', '202cb962ac59075b964b07152d234b70', '085362547852', 'Non Member', 'Bandung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `kode_pesanan` int(25) NOT NULL,
  `tgl_pesanan` varchar(55) NOT NULL,
  `jumlah_pesanan` varchar(55) NOT NULL,
  `total_harga` varchar(55) NOT NULL,
  `id_member` int(25) NOT NULL,
  `kode_layanan` int(25) NOT NULL,
  `kode_laundry` int(25) NOT NULL,
  `kode_barang` int(25) NOT NULL,
  `status_pesanan` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`kode_pesanan`, `tgl_pesanan`, `jumlah_pesanan`, `total_harga`, `id_member`, `kode_layanan`, `kode_laundry`, `kode_barang`, `status_pesanan`) VALUES
(1, '01-Apr-2018', '1', '5500', 1, 3, 4, 20, 'Selesai'),
(2, '01-Apr-2018', '2', '8000', 4, 27, 5, 15, 'Selesai'),
(3, '12-Apr-2018', '4', '13000', 4, 31, 3, 13, 'Sedang Diproses'),
(4, '12-Apr-2018', '2', '13000', 2, 25, 4, 1, 'Sedang Diproses'),
(5, '12-Apr-2018', '2', '10000', 4, 11, 1, 20, 'Selesai'),
(6, '12-Apr-2018', '2', '18000', 3, 83, 2, 3, 'Selesai'),
(7, '12-Apr-2018', '5', '28000', 3, 25, 2, 1, 'Selesai'),
(8, '12-Apr-2018', '3', '5000', 2, 60, 1, 10, 'Selesai'),
(9, '13-Apr-2018', '4', '19000', 5, 77, 2, 9, 'Belum Diproses'),
(11, '20-Apr-2018', '2', '10000', 1, 33, 5, 9, 'Selesai'),
(12, '25-Apr-2018', '1', '9000', 4, 37, 1, 2, 'Sedang Diproses'),
(13, '25-Apr-2018', '3', '21000', 4, 57, 6, 1, 'Selesai'),
(15, '26-Apr-2018', '2', '12000', 1, 1, 1, 1, 'Selesai'),
(16, '26-Apr-2018', '3', '13500', 1, 59, 6, 18, 'Sedang Diproses'),
(17, '26-Apr-2018', '2', '14000', 1, 39, 2, 6, 'Belum Diproses'),
(18, '26-Apr-2018', '6', '26000', 1, 85, 4, 14, 'Belum Diproses'),
(19, '26-Apr-2018', '12', '65000', 1, 45, 5, 3, 'Sedang Diproses'),
(20, '26-Apr-2018', '3', '18000', 1, 34, 1, 1, 'Sedang Diproses'),
(21, '26-Apr-2018', '1', '8000', 1, 27, 3, 2, 'Belum Diproses'),
(22, '26-Apr-2018', '2', '14000', 2, 33, 6, 2, 'Belum Diproses'),
(23, '26-Apr-2018', '5', '27000', 2, 5, 2, 1, 'Belum Diproses'),
(24, '26-Apr-2018', '6', '33000', 2, 11, 4, 4, 'Belum Diproses'),
(25, '26-Apr-2018', '2', '8000', 2, 25, 4, 8, 'Belum Diproses'),
(26, '26-Apr-2018', '4', '28000', 2, 33, 5, 11, 'Belum Diproses'),
(27, '26-Apr-2018', '2', '12000', 2, 1, 1, 3, 'Belum Diproses'),
(29, '26-Apr-2018', '4', '22000', 2, 1, 3, 4, 'Belum Diproses'),
(30, '26-Apr-2018', '3', '10500', 3, 25, 1, 8, 'Belum Diproses'),
(31, '26-Apr-2018', '2', '9000', 3, 7, 1, 21, 'Sedang Diproses'),
(32, '26-Apr-2018', '3', '19000', 3, 37, 3, 1, 'Selesai'),
(33, '26-Apr-2018', '3', '18000', 3, 11, 6, 3, 'Selesai'),
(34, '26-Apr-2018', '5', '27000', 2, 3, 1, 5, 'Belum Diproses'),
(35, '26-Apr-2018', '1', '12000', 4, 73, 6, 2, 'Belum Diproses'),
(36, '26-Apr-2018', '10', '28000', 4, 36, 1, 18, 'Belum Diproses'),
(37, '26-Apr-2018', '4', '14000', 4, 3, 1, 9, 'Selesai'),
(38, '26-Apr-2018', '7', '40000', 4, 58, 4, 2, 'Belum Diproses'),
(39, '26-Apr-2018', '4', '16000', 5, 68, 6, 12, 'Sedang Diproses'),
(40, '26-Apr-2018', '4', '26000', 5, 59, 1, 4, 'Selesai'),
(41, '26-Apr-2018', '5', '17000', 5, 1, 1, 9, 'Sedang Diproses'),
(42, '26-Apr-2018', '8', '23000', 5, 9, 1, 8, 'Belum Diproses'),
(43, '26-Apr-2018', '3', '5800', 5, 35, 2, 10, 'Selesai'),
(44, '26-Apr-2018', '5', '33000', 6, 83, 6, 2, 'Sedang Diproses'),
(45, '26-Apr-2018', '3', '18000', 6, 36, 2, 2, 'Sedang Diproses'),
(46, '26-Apr-2018', '5', '19000', 6, 35, 4, 9, 'Belum Diproses'),
(47, '26-Apr-2018', '5', '29000', 6, 33, 4, 3, 'Belum Diproses'),
(48, '26-Apr-2018', '3', '14500', 6, 65, 5, 8, 'Sedang Diproses'),
(49, '26-Apr-2018', '2', '7200', 6, 57, 3, 10, 'Belum Diproses'),
(50, '26-Apr-2018', '5', '17500', 6, 60, 1, 8, 'Sedang Diproses'),
(51, '26-Apr-2018', '3', '18000', 6, 29, 1, 2, 'Selesai'),
(52, '26-Apr-2018', '1', '5600', 6, 47, 1, 10, 'Belum Diproses'),
(53, '27-Apr-2018', '2', '13000', 1, 9, 1, 3, 'Selesai'),
(54, '29-Apr-2018', '4', '14000', 6, 33, 3, 8, 'Sedang Diproses'),
(55, '29-Apr-2018', '5', '20500', 6, 31, 5, 20, 'Sedang Diproses'),
(56, '29-Apr-2018', '3', '19000', 5, 37, 5, 2, 'Sedang Diproses'),
(57, '29-Apr-2018', '3', '10500', 2, 31, 3, 17, 'Selesai'),
(58, '29-Apr-2018', '2', '10000', 2, 13, 2, 20, 'Selesai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `laundry`
--
ALTER TABLE `laundry`
  ADD PRIMARY KEY (`kode_laundry`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`kode_layanan`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`kode_pesanan`),
  ADD KEY `id_member` (`id_member`),
  ADD KEY `kode_layanan` (`kode_layanan`),
  ADD KEY `kode_laundry` (`kode_laundry`),
  ADD KEY `kode_barang` (`kode_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `kode_barang` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `laundry`
--
ALTER TABLE `laundry`
  MODIFY `kode_laundry` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `kode_layanan` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `kode_pesanan` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesanan_ibfk_3` FOREIGN KEY (`kode_laundry`) REFERENCES `laundry` (`kode_laundry`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesanan_ibfk_4` FOREIGN KEY (`kode_layanan`) REFERENCES `layanan` (`kode_layanan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
