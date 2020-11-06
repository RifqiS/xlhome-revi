-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Nov 2020 pada 09.42
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

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
  `tlp` int(15) NOT NULL,
  `wa` int(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`, `TitleHome`, `logo`, `sos1`, `sos2`, `tlp`, `wa`, `alamat`) VALUES
('Un!X1d@4pp', 'admin', 'admin', 'XL Home', '5fa16b68cd57c.png', '@XLHomeBandung', '@XLHomeBandung', 8214124, 214124, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15842.5451974668!2d107.72809224999999!3d-6.9339996500000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c339604eb345%3A0xfce20741362af34e!2sGriya%20Grand%20Cinunuk!5e0!3m2!1sid!2sid!4v1604506502515!5m2!1sid!2sid');

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
('03112000', 'Content 1', '5fa4fb5edd8e5.jpg', 100000, 'Baik digunakan untuk 1-10 komputer atau gadget.', 'Wi-Fi Fiber Modem', 'IP Dynamic Private', 'Fitur 3', 'Fitur 4', 'Fitur 6', '30'),
('04112001', 'Content 2', '5fa2d6212f7e8.jpg', 10000, 'sub judul2', 'Fitur 1', 'Fitur 2', 'Fitur 3', 'Fitur 4', 'Fitur 6', 'Fitur 7'),
('04112002', 'Content 3', '5fa2d635ab37b.jpg', 1000, 'sub judul', 'Fitur 1', 'Fitur 2', 'Fitur 3', 'Fitur 4', 'Fitur 6', 'Fitur 7');

-- --------------------------------------------------------

--
-- Struktur dari tabel `registrasi`
--

CREATE TABLE `registrasi` (
  `id` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `kecamatan` text NOT NULL,
  `kota` text NOT NULL,
  `desa` text NOT NULL,
  `kodepos` text NOT NULL,
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
-- Dumping data untuk tabel `registrasi`
--

INSERT INTO `registrasi` (`id`, `alamat`, `kecamatan`, `kota`, `desa`, `kodepos`, `paket`, `nama`, `email`, `noHp`, `tlp`, `fotoKtp`, `fotoSelfie`, `timeStamp`, `statusRead`) VALUES
('03112000', 'alamat', 'kecamatan', 'kota', 'desa', 'kodepos', '', 'nama', 'email@gmail.com', 902148, 8214124, '5fa17eea313a7.jpg', '5fa17eea3169b.jpg', '0000-00-00 00:00:00', 0);

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
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
