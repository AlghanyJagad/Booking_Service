-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jun 2020 pada 14.16
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `boking`
--

CREATE TABLE `boking` (
  `id_booking` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_tlpn` varchar(15) NOT NULL,
  `bengkel` varchar(40) NOT NULL,
  `tipe` varchar(30) NOT NULL,
  `model` varchar(120) NOT NULL,
  `nopol` varchar(11) NOT NULL,
  `jenis_servis` varchar(50) NOT NULL,
  `tgl_booking` date NOT NULL,
  `jam` varchar(10) NOT NULL,
  `pesan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `boking`
--

INSERT INTO `boking` (`id_booking`, `nama`, `email`, `no_tlpn`, `bengkel`, `tipe`, `model`, `nopol`, `jenis_servis`, `tgl_booking`, `jam`, `pesan`) VALUES
(11, 'Alghanyj', 'alghany@email.com', '0888888', 'Service Center,Bogor', 'Mobil', 'Lamborghi Galardo', 'F 1726 BB', 'Terjadi Kerusakan', '2020-06-26', '12:00', 'Mesin Tidak Menyala');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dealer`
--

CREATE TABLE `dealer` (
  `id_dealer` int(11) NOT NULL,
  `tipe_dealer` varchar(50) NOT NULL,
  `daerah` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dealer`
--

INSERT INTO `dealer` (`id_dealer`, `tipe_dealer`, `daerah`, `alamat`) VALUES
(1, 'Service Center', 'Bogor', 'Jl.Raya Padjajaran No.22'),
(2, 'Service Center', 'Cibedug', 'Jl. Veteran 3 Tapos No.22'),
(3, 'Service Center', 'Wangun', 'Jl.Raya Wangun No.23'),
(5, 'Bengkel', 'Ciawi', 'Jl.Raya Ciawi No.23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran`
--

CREATE TABLE `saran` (
  `id_saran` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `pesan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `saran`
--

INSERT INTO `saran` (`id_saran`, `nama`, `no_tlp`, `pesan`) VALUES
(2, 'Alghany', '08888888', 'Jagad tuh ganteng'),
(5, 'Steph Curry', '0987665', 'qwerty');

-- --------------------------------------------------------

--
-- Struktur dari tabel `selesai_booking`
--

CREATE TABLE `selesai_booking` (
  `id_booking` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_tlpn` varchar(15) NOT NULL,
  `bengkel` varchar(40) NOT NULL,
  `tipe` varchar(30) NOT NULL,
  `model` varchar(120) NOT NULL,
  `nopol` varchar(11) NOT NULL,
  `jenis_servis` varchar(50) NOT NULL,
  `tgl_booking` date NOT NULL,
  `jam` varchar(10) NOT NULL,
  `pesan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `selesai_booking`
--

INSERT INTO `selesai_booking` (`id_booking`, `nama`, `email`, `no_tlpn`, `bengkel`, `tipe`, `model`, `nopol`, `jenis_servis`, `tgl_booking`, `jam`, `pesan`) VALUES
(7, 'Alghanyj', 'alghany@email.com', '0888888', 'Service Center,Bogor', 'Mobil', 'Lamborghi Galardo', 'F 1726 BB', 'Servis Biasa', '2020-06-10', '10:00', 'Tarikan kurang kencang'),
(9, 'Steph Curry', 'tsepp@email', '0987665', 'Service Center,Wangun', 'Mobil', 'Daihatsu', 'F 1234 YY', 'Terjadi Kerusakan', '2020-06-10', '10:00', 'Mesin Tidak Menyala'),
(10, 'Steph Curry', 'tsepp@email', '0987665', 'Service Center,Bogor', 'Mobil', 'Product 16', 'F 1234 YY', 'Kerusakan Body', '2020-06-20', '12:00', 'Penyok Bemper Depan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `no_hp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `no_hp`) VALUES
(1, 'Alghanyj', 'goni', 'alghany@email.com', '0888888'),
(2, 'Steph Curry', 'steph', 'tsepp@email', '0987665');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `boking`
--
ALTER TABLE `boking`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indeks untuk tabel `dealer`
--
ALTER TABLE `dealer`
  ADD PRIMARY KEY (`id_dealer`);

--
-- Indeks untuk tabel `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- Indeks untuk tabel `selesai_booking`
--
ALTER TABLE `selesai_booking`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `boking`
--
ALTER TABLE `boking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `dealer`
--
ALTER TABLE `dealer`
  MODIFY `id_dealer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `saran`
--
ALTER TABLE `saran`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
