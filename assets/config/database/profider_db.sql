-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Nov 2020 pada 08.39
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profider_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` varchar(10) NOT NULL,
  `user` text NOT NULL,
  `pass` text NOT NULL,
  `TitleHome` text NOT NULL,
  `logo` varchar(200) NOT NULL,
  `sos1` text NOT NULL,
  `sos2` text NOT NULL,
  `agen` text NOT NULL,
  `agen1` text NOT NULL,
  `agen2` text NOT NULL,
  `tlp` int(15) NOT NULL,
  `tlp1` int(15) NOT NULL,
  `tlp2` int(15) NOT NULL,
  `wa` int(15) NOT NULL,
  `wa1` int(15) NOT NULL,
  `wa2` int(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`, `TitleHome`, `logo`, `sos1`, `sos2`, `agen`, `agen1`, `agen2`, `tlp`, `tlp1`, `tlp2`, `wa`, `wa1`, `wa2`, `alamat`) VALUES
('Un!X1d@4pp', 'admin', 'admin', 'XLHome Bandung', '', '@XLHomeBandung', 'XLHomeBandung', 'Andi', 'Revi', 'Rini', 81224, 82335, 89644, 81224, 82335, 89644, 'Bandung Boi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `content`
--

CREATE TABLE `content` (
  `id` varchar(10) NOT NULL,
  `judul` text NOT NULL,
  `logo` text NOT NULL,
  `harga` int(10) NOT NULL,
  `sub_judul` text NOT NULL,
  `cont_1` text NOT NULL,
  `cont_2` text NOT NULL,
  `cont_3` text NOT NULL,
  `cont_4` text NOT NULL,
  `cont_5` text NOT NULL,
  `cont_6` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `content`
--

INSERT INTO `content` (`id`, `judul`, `logo`, `harga`, `sub_judul`, `cont_1`, `cont_2`, `cont_3`, `cont_4`, `cont_5`, `cont_6`) VALUES
('1', '1', '', 1, '1', '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `registrasi`
--

CREATE TABLE `registrasi` (
  `id` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `paket` varchar(10) NOT NULL,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `noHp` int(15) NOT NULL,
  `tlp` int(15) NOT NULL,
  `fotoKtp` text NOT NULL,
  `fotoSelfie` text NOT NULL,
  `timeStamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `statusRead` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `paket` (`paket`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
