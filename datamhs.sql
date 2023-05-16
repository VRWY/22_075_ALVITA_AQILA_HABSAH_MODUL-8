-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Bulan Mei 2023 pada 15.19
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datamhs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mhs_1`
--

CREATE TABLE `mhs_1` (
  `nim` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `dosen` varchar(100) NOT NULL,
  `statu` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mhs_1`
--

INSERT INTO `mhs_1` (`nim`, `nama`, `dosen`, `statu`, `ket`) VALUES
('200441100052', 'Affan Maulana Zulkarnain', 'Sri Herawati', 'Asprak', 'Hadir'),
('210441100054', 'Fanky Abdil Qoyyim', 'Sri Herawati', 'Asprak', 'Alpha'),
('210441100106', 'Abdul Wahid', 'Sri Herawati', 'Asprak', 'Hadir'),
('220441100045', 'Fera Devi Susanti', 'Sri Herawati', 'Praktikan', 'Alpha'),
('220441100075', 'Alvita Aqila Habsah', 'Sri Herawati', 'Praktikan', 'Alpha'),
('220441100077', 'Sukma Ayu Maharini', 'Sri Herawati', 'Praktikan', 'Hadir'),
('220441100117', 'Muhammad Rayhan R', 'Sri Herawati', 'Praktikan', 'Alpha');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mhs_1`
--
ALTER TABLE `mhs_1`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
