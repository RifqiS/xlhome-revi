-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2020 at 09:46 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(10) NOT NULL,
  `user` text NOT NULL,
  `pass` text NOT NULL,
  `TitleHome` text NOT NULL,
  `logo` varchar(200) NOT NULL,
  `logo2` varchar(200) NOT NULL,
  `sos1` text NOT NULL,
  `sos2` text NOT NULL,
  `tlp` int(15) NOT NULL,
  `wa` int(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`, `TitleHome`, `logo`, `logo2`, `sos1`, `sos2`, `tlp`, `wa`, `alamat`) VALUES
('Un!X1d@4pp', 'admin', 'admin', 'XL Home', '5fb8ca2334f2d.png', '5fb8ca23351a6.png', '@XLHomeBandung', '@XLHomeBandung', 2147483647, 2147483647, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126745.81129709996!2d107.51462800673565!3d-6.913712284218133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e98450572439%3A0x31af8fb73c0cc230!2sXL%20Home%20Fiber%20Bandung!5e0!3m2!1sen!2sid!4v1605935066720!5m2!1sen!2sid');

-- --------------------------------------------------------

--
-- Table structure for table `content`
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
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `judul`, `logo`, `harga`, `sub_judul`, `cont_1`, `cont_2`, `cont_3`, `cont_4`, `cont_5`, `cont_6`) VALUES
('03112000', 'Family Pack', '5fa4fb5edd8e5.jpg', 89000, 'Baik digunakan untuk 1-10 komputer atau gadget.', 'Wi-Fi Fiber Modem', 'IP Dynamic Private', 'ini untuk fitur tambahan bisa di munculin kalo mau pas production', 'ini untuk fitur tambahan bisa di munculin kalo mau pas production', 'ini untuk fitur tambahan bisa di munculin kalo mau pas production', '30 mbps (ini untuk pengingat speed aja pas di registrasi)'),
('04112001', 'Premium Pack', '5fa557af55e22.jpg', 200000, 'Baik digunakan untuk 1-10 komputer atau gadget.', 'Wi-Fi Fiber Modem', 'IP Dynamic Private', 'Fitur 3', 'Fitur 4', 'Fitur 6', '50 mbps'),
('04112002', 'Ultimate Pack', '5fa8a0c03ffa7.jpg', 350000, 'Baik digunakan untuk 1-10 komputer atau gadget.', 'Wi-Fi Fiber Modem', 'IP Dynamic Private', 'Fitur 3', 'Fitur 4', 'Fitur 6', '100 mbps');

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
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
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`id`, `alamat`, `kecamatan`, `kota`, `desa`, `kodepos`, `paket`, `nama`, `email`, `noHp`, `tlp`, `fotoKtp`, `fotoSelfie`, `timeStamp`, `statusRead`) VALUES
('03112000', 'alamat', 'kecamatan', 'kota', 'desa', 'kodepos', '', 'nama', 'email@gmail.com', 902148, 8214124, '5fa17eea313a7.jpg', '5fa17eea3169b.jpg', '2020-11-21 07:49:32', 1),
('09112001', 'asfagdaljadulgdva', 'arcaamik', 'bandung', 'muarajaya', '40696', '04112002', 'qwe', 'asfa@gmail.com', 8956245, 2889416, '5fa8a5f2cbcac.png', '5fa8a5f2cc02b.png', '2020-11-08 19:14:40', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
