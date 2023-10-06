-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2023 at 05:41 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ekost`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `nama`, `no_hp`, `password`) VALUES
('admin', 'Bang admin', '08288282', '111');

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `kamar_id` int(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `fasilitas` varchar(200) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `harga` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`kamar_id`, `nama`, `deskripsi`, `fasilitas`, `gambar`, `harga`, `status`) VALUES
(1, 'Single Room', 'Single room adalah tempat tinggal yang ideal bagi individu yang menginginkan privasi dan kenyamanan pribadi. Kamar ini dilengkapi dengan tempat tidur nyaman, meja kecil, dan lemari pakaian. Beberapa single room juga memiliki fasilitas tambahan seperti meja kerja, TV, atau kulkas mini. Dalam kamar tunggal, Anda dapat menikmati ruang pribadi yang tenang dan fokus untuk bekerja, belajar, atau beristirahat. Dengan privasi yang terjaga, Anda dapat menciptakan suasana yang sesuai dengan kebutuhan Anda. Single room memberikan kebebasan dan kenyamanan dalam gaya hidup sehari-hari, menjadikannya pilihan yang populer di kalangan mahasiswa, pekerja, dan individu yang menghargai privasi.', 'KASUR,LEMARI', 'single.jpg', 500000, 'Tersedia'),
(2, 'Double Room', 'Double room adalah pilihan ideal bagi mereka yang ingin berbagi tempat tinggal dengan teman atau pasangan. Kamar ini menyediakan ruang yang cukup untuk dua orang dengan fasilitas yang nyaman. Biasanya, kamar ganda dilengkapi dengan tempat tidur ganda atau dua tempat tidur single, lemari pakaian, dan meja kecil. Beberapa kamar ganda juga menyediakan fasilitas tambahan seperti TV atau area duduk. Dalam kamar ganda, Anda dapat menikmati kenyamanan berbagi ruang dengan orang yang dekat, sambil tetap memiliki privasi pribadi. Ruangan ini menciptakan lingkungan yang nyaman untuk beristirahat, bekerja, atau menghabiskan waktu bersama dalam suasana yang akrab dan hangat. Kamar ganda adalah pilihan yang populer bagi mereka yang mencari akomodasi yang lebih terjangkau sambil tetap mempertahankan kebersamaan dengan orang yang mereka pilih.', 'Kasur Double,LEMARI', 'double1.jpg', 900000, 'Tersedia'),
(3, 'Air Conditioned Room', 'Air Conditioned Room adalah pilihan yang nyaman bagi mereka yang menginginkan suasana yang sejuk dan nyaman di dalam kamar kost. Kamar ini dilengkapi dengan AC untuk mengatur suhu udara sesuai kebutuhan. Penghuni dapat menikmati udara yang segar dan sejuk saat cuaca panas di luar. Kamar ber-AC biasanya dilengkapi dengan fasilitas seperti tempat tidur, lemari, dan meja kecil seperti halnya kamar kost pada umumnya. Dengan adanya AC, penghuni dapat merasa lebih nyaman saat beristirahat, tidur, belajar, atau bekerja di dalam kamar. Kamar ber-AC menjadi pilihan yang populer di daerah dengan iklim yang panas, karena memberikan kenyamanan tambahan dan membantu mengurangi kelelahan akibat suhu yang tinggi.\r\n\r\n   ', 'AC,LEMARI,KASUR\r\n', 'delux.jpg', 1300000, 'Tersedia'),
(4, 'Inside Bathroom', 'Inside Bathroom adalah fasilitas yang memungkinkan penghuni kamar kost untuk memiliki akses langsung ke kamar mandi pribadi dari dalam kamar mereka sendiri. Dalam kamar dengan inside bathroom, penghuni tidak perlu berbagi kamar mandi dengan penghuni kost lainnya. Kamar mandi dalam biasanya dilengkapi dengan shower, toilet, dan wastafel, serta dilengkapi dengan perlengkapan mandi dasar. Dengan memiliki kamar mandi pribadi, penghuni dapat menikmati privasi dan kenyamanan ekstra saat menggunakan kamar mandi tanpa perlu mengantre atau berbagi fasilitas dengan orang lain. Fasilitas inside bathroom ini sangat memudahkan penghuni untuk menjaga kebersihan diri mereka sendiri dan memberikan kenyamanan tambahan dalam keseharian mereka di kost. Dengan memiliki inside bathroom, penghuni dapat memiliki ruang mandi pribadi yang bersih, nyaman, dan aman untuk digunakan kapan pun mereka membutuhkannya, meningkatkan tingkat kenyamanan dan privasi dalam tinggal mereka di kamar kost.', 'AC, TV,KAMAR MANDI DALAM,KASUR', 'king.jpg', 700000, 'Tersedia'),
(5, 'Full Facilities Room', 'Full Facilities Room adalah tipe kamar kost yang menyediakan fasilitas tambahan untuk kenyamanan penghuninya. Kamar ini dilengkapi dengan berbagai fasilitas seperti TV, lemari es, dan dapur kecil di dalam kamar. Penghuni dapat menikmati hiburan dengan menonton TV di kamar mereka, menyimpan makanan dan minuman favorit di lemari es, serta memasak makanan ringan atau minuman di dapur kecil. Fasilitas lengkap ini memberikan kenyamanan tambahan dan memudahkan penghuni dalam menjalani kehidupan sehari-hari di dalam kamar kost. Dalam kamar fasilitas lengkap, penghuni dapat merasa seperti berada di rumah sendiri dengan fasilitas yang memadai untuk memenuhi kebutuhan mereka. Kamar ini cocok bagi mereka yang menginginkan kenyamanan dan privasi ekstra serta memiliki kebebasan untuk menyiapkan makanan atau minuman sesuai keinginan mereka di dalam kamar. Dengan fasilitas lengkap ini, penghuni dapat merasa lebih santai dan terpenuhi dalam tinggal mereka di kamar kost.', 'TV,KASUR,LEMARI,AC,KAMAR MANDI DALAM,WIFI', 'honeymoon.jpg', 1700000, 'Tersedia'),
(6, 'Full Facilities Room', 'Full Facilities Room adalah tipe kamar kost yang menyediakan fasilitas tambahan untuk kenyamanan penghuninya. Kamar ini dilengkapi dengan berbagai fasilitas seperti TV, lemari es, dan dapur kecil di dalam kamar. Penghuni dapat menikmati hiburan dengan menonton TV di kamar mereka, menyimpan makanan dan minuman favorit di lemari es, serta memasak makanan ringan atau minuman di dapur kecil. Fasilitas lengkap ini memberikan kenyamanan tambahan dan memudahkan penghuni dalam menjalani kehidupan sehari-hari di dalam kamar kost. Dalam kamar fasilitas lengkap, penghuni dapat merasa seperti berada di rumah sendiri dengan fasilitas yang memadai untuk memenuhi kebutuhan mereka. Kamar ini cocok bagi mereka yang menginginkan kenyamanan dan privasi ekstra serta memiliki kebebasan untuk menyiapkan makanan atau minuman sesuai keinginan mereka di dalam kamar. Dengan fasilitas lengkap ini, penghuni dapat merasa lebih santai dan terpenuhi dalam tinggal mereka di kamar kost.', 'AC, TV, WIFI, Bathroom', 'WhatsApp Image 2023-06-22 at 10.44.27.jpeg', 2000000, 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `pelanggan_id` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`pelanggan_id`, `nama`, `alamat`, `no_hp`, `password`, `email`) VALUES
('blackstuf', 'teddy', 'paingan,jogja', '0923723232', '123', NULL),
('hizkia', 'Hizkia Pratama', 'Kaliagung,sentolo', '082214358120', '123', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sewa`
--

CREATE TABLE `sewa` (
  `sewa_id` varchar(20) NOT NULL,
  `masa_berlaku` int(2) NOT NULL,
  `tanggal_awal` date NOT NULL,
  `kamar_id` int(11) NOT NULL,
  `pelanggan_id` varchar(20) NOT NULL,
  `admin_id` varchar(20) NOT NULL,
  `biaya` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`kamar_id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`pelanggan_id`);

--
-- Indexes for table `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`sewa_id`),
  ADD KEY `kamar_id` (`kamar_id`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `pelanggan_id` (`pelanggan_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sewa`
--
ALTER TABLE `sewa`
  ADD CONSTRAINT `sewa_ibfk_1` FOREIGN KEY (`kamar_id`) REFERENCES `kamar` (`kamar_id`),
  ADD CONSTRAINT `sewa_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`),
  ADD CONSTRAINT `sewa_ibfk_3` FOREIGN KEY (`pelanggan_id`) REFERENCES `pelanggan` (`pelanggan_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
