-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jun 2021 pada 09.14
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmvc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(3) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nis` int(5) NOT NULL,
  `email` varchar(200) NOT NULL,
  `jurusan` enum('Multimedia','Teknik Komputer Jaringan','Rekayasa Perangkat Lunak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `nis`, `email`, `jurusan`) VALUES
(14, 'umarkhalid', 1901, 'khalidaris@gmail.com', 'Multimedia'),
(15, 'febryibme', 1902, 'febryibme19@gmail.com', 'Rekayasa Perangkat Lunak'),
(16, 'fathanthoriq', 1903, 'thoriqfathan@gmailcom', 'Teknik Komputer Jaringan'),
(17, 'zareemiller', 1904, 'leozaree@gmail.com', 'Multimedia'),
(18, 'gustitateh', 1905, 'tatehgusti@gmail.com', 'Rekayasa Perangkat Lunak'),
(20, 'firmanmullend', 1906, 'mullendfirman@gmail.com', 'Teknik Komputer Jaringan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
