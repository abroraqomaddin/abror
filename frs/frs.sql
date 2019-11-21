-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Nov 2019 pada 16.19
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `frs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `frs`
--

CREATE TABLE `frs` (
  `id` int(11) NOT NULL,
  `nama_mk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `frs`
--

INSERT INTO `frs` (`id`, `nama_mk`) VALUES
(18, 'Sistem Pendukung Keputusan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kode_mk` varchar(6) NOT NULL,
  `nama_mk` varchar(30) DEFAULT NULL,
  `semester` int(1) DEFAULT NULL,
  `sks` int(2) DEFAULT NULL,
  `dosen` varchar(45) DEFAULT NULL,
  `kelas` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `matakuliah`
--

INSERT INTO `matakuliah` (`kode_mk`, `nama_mk`, `semester`, `sks`, `dosen`, `kelas`) VALUES
('A1', 'Sistem Pendukung Keputusan', 5, 3, 'Brina Miftahurrohmah, S.Si., M.Si.', 'A'),
('A2', 'Tata Kelola TI', 5, 3, 'Renny Sari Dewi, S.Kom., M.Kom.', 'A'),
('A3', 'Manajemen Proses Bisnis', 5, 3, 'Yogantara Setya Dharmawan, S.Kom., M.Sc.', 'A'),
('A4', 'Manajemen Rantai Pasok', 5, 3, 'Putri Amelia, S.T., M. Eng.', 'A'),
('A5', 'Manajemen Proyek TI', 5, 3, 'Catur Wulandari, S.Kom., M.Kom.', 'A');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `frs`
--
ALTER TABLE `frs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`kode_mk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `frs`
--
ALTER TABLE `frs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
