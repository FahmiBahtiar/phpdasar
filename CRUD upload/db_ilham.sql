-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jan 2021 pada 04.13
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ilham`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftarsiswa`
--

CREATE TABLE `daftarsiswa` (
  `id` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `nis` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `agama` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftarsiswa`
--

INSERT INTO `daftarsiswa` (`id`, `foto`, `nis`, `nama`, `alamat`, `email`, `jurusan`, `agama`) VALUES
(1, 'pubeg.jpg', 12345, 'Fahmi Bahtiar Adi Nugroho          ', 'Demak           ', 'fahmi@gmail.com      ', 'Rekayasa Perangkat Lunak', 'Islam'),
(2, 'logo_transparent_coloured.png', 12356, 'Ilham Nadhif', 'Gebog', 'ilham@gmail.com', 'Rekayasa Perangkat Lunak', 'Islam');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftarsiswa`
--
ALTER TABLE `daftarsiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftarsiswa`
--
ALTER TABLE `daftarsiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
