-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Okt 2022 pada 08.01
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_poin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `keterlambatan`
--

CREATE TABLE `keterlambatan` (
  `no` int(7) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `alasan_terlambat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `keterlambatan`
--

INSERT INTO `keterlambatan` (`no`, `nama_siswa`, `kelas`, `alasan_terlambat`) VALUES
(1, 'dexi', '10 ppxlg', 'kontols');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `keterlambatan`
--
ALTER TABLE `keterlambatan`
  ADD PRIMARY KEY (`no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
